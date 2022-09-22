<?php 
declare(strict_types=1);

namespace Neos\Fusion\Form\Runtime\FusionObjects;

/*
 * This file is part of the Neos.Fusion.Form package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\ActionRequest;
use Neos\Error\Messages\Result;
use Neos\Fusion\Form\Runtime\Domain\FormState;
use Neos\Fusion\Form\Runtime\Domain\FormStateService;
use Neos\Fusion\Form\Runtime\Domain\ProcessInterface;
use Neos\Fusion\Form\Runtime\Domain\ProcessCollectionInterface;
use Neos\Fusion\FusionObjects\AbstractFusionObject;
use Neos\Utility\Arrays;

class MultiStepProcessImplementation_Original extends AbstractFusionObject implements ProcessInterface
{
    /**
     * @Flow\Inject
     * @var FormStateService
     */
    protected $formStateService;

    /**
     * @var FormState|null
     */
    protected $state;

    /**
     * @var mixed[]
     */
    protected $data;

    /**
     * @var string
     */
    protected $currentSubProcessKey;

    /**
     * @var string
     */
    protected $targetSubProcessKey;

    /**
     * Return reference to self during fusion evaluation
     * @return $this
     */
    public function evaluate()
    {
        return $this;
    }

    /**
     * @param ActionRequest $request
     * @param mixed[] $data
     */
    public function handle(ActionRequest $request, array $data = []): void
    {
        $this->data = $data;

        $internalArguments = $request->getInternalArguments();

        // restore state
        if (array_key_exists('__state', $internalArguments)
            && $internalArguments['__state']
        ) {
            $this->state = $this->formStateService->unserializeState($internalArguments['__state']);
        }

        // make the current `data` available to the context before sub processes are evaluated
        // as those may have conditions that rely on previous data
        $this->runtime->pushContext('data', $this->getData());

        // evaluate the subprocesses this has to be done after the state was restored
        // as the current data may affect @if conditions
        $subProcesses = $this->getSubProcesses();

        // select current subprocess
        if (array_key_exists('__current', $internalArguments)
            && $internalArguments['__current']
        ) {
            $this->currentSubProcessKey = (string)$internalArguments['__current'];
        } else {
            $subProcessKeys = array_keys($subProcesses);
            $this->currentSubProcessKey = (string)reset($subProcessKeys);
        }

        // store target subprocess, but only if it already was submitted
        if (array_key_exists('__target', $internalArguments)
            && $internalArguments['__target']
            && $this->state
            && $this->state->hasPart($internalArguments['__target'])
        ) {
            $this->targetSubProcessKey = (string)$internalArguments['__target'];
        }

        // find current and handle
        $currentSubProcess = $subProcesses[$this->currentSubProcessKey];
        $currentSubProcess->handle($request, $this->data);

        if ($currentSubProcess->isFinished()) {
            if (!$this->state) {
                $this->state = new FormState();
            }

            $this->state->commitPart(
                $this->currentSubProcessKey,
                $currentSubProcess->getData()
            );
        } else {
            if ($this->targetSubProcessKey) {
                $request->setArgument('__submittedArguments', []);
                $request->setArgument('__submittedArgumentValidationResults', new Result());
            }
        }

        // restore fusion context to the state before data was pushed
        $this->runtime->popContext();
    }

    /**
     * @return bool
     */
    public function isFinished(): bool
    {
        if (!$this->state) {
            return false;
        }

        if ($this->targetSubProcessKey) {
            return false;
        }

        $subProcesses = $this->getSubProcesses();

        foreach ($subProcesses as $subProcessKey => $subProcess) {
            if ($this->state->hasPart($subProcessKey) == false) {
                return false;
            }
        }
        return true;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        $subProcesses = $this->getSubProcesses();
        if ($this->targetSubProcessKey) {
            $renderSubProcessKey = $this->targetSubProcessKey;
        } else {
            foreach ($subProcesses as $subProcessKey => $subProcess) {
                if (!$this->state || !$this->state->hasPart($subProcessKey)) {
                    $renderSubProcessKey = $subProcessKey;
                    break;
                }
            }
        }

        if (isset($renderSubProcessKey) && $renderSubProcessKey && array_key_exists($renderSubProcessKey, $subProcesses)) {
            $this->getRuntime()->pushContext('process', $this->prepareProcessInformation($renderSubProcessKey, $subProcesses));
            $hiddenFields = $this->runtime->evaluate($this->path . '/hiddenFields') ?? '';
            $header = $this->runtime->evaluate($this->path . '/header') ?? '';
            $body = $subProcesses[$renderSubProcessKey]->render();
            $footer = $this->runtime->evaluate($this->path . '/footer') ?? '';
            $this->getRuntime()->popContext();
            return $hiddenFields . $header . $body . $footer;
        }

        return '';
    }

    /**
     * @return mixed[]
     */
    public function getData(): array
    {
        // initial data
        $data = $this->data;

        // add subprocess data from state
        if ($this->state) {
            foreach ($this->state->getAllParts() as $subProcessKey => $subProcessData) {
                $data = Arrays::arrayMergeRecursiveOverrule(
                    $data,
                    $subProcessData
                );
            }
        }

        return $data;
    }

    /**
     * @param string|int $subProcessKey
     * @param ProcessInterface[] $subProcesses
     * @return mixed[]
     */
    protected function prepareProcessInformation($subProcessKey, array $subProcesses): array
    {
        $subProcessKeys = array_keys($subProcesses);
        $currentIndex = array_search($subProcessKey, $subProcessKeys);

        $process = [];
        $process['state'] = $this->state ? $this->formStateService->serializeState($this->state) : null;
        $process['current'] = $subProcessKey;
        $process['prev'] = ($currentIndex > 0) ? $subProcessKeys[$currentIndex - 1]: null ;
        $process['next'] = ($currentIndex < (count($subProcessKeys) - 1)) ? $subProcessKeys[$currentIndex + 1] : null;
        $process['all'] = $subProcessKeys;
        $process['submitted'] = $this->state ? $this->state->getCommittedPartNames() : [];
        $process['isFirst'] = ($subProcessKey === reset($subProcessKeys));
        $process['isLast'] = ($subProcessKey === end($subProcessKeys));

        return $process;
    }

    /**
     * @return ProcessInterface[]
     */
    protected function getSubProcesses(): array
    {
        $this->runtime->pushContext('data', $this->getData());
        $collection = $this->getProcessCollection();
        $result = $collection->getItems();
        $this->runtime->popContext();
        return $result;
    }

    /**
     * @return ProcessCollectionInterface
     */
    protected function getProcessCollection(): ProcessCollectionInterface
    {
        return $this->fusionValue('steps');
    }
}

#
# Start of Flow generated Proxy code
#

class MultiStepProcessImplementation extends MultiStepProcessImplementation_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Constructor
     *
     * @param Runtime $runtime
     * @param string $path
     * @param string $fusionObjectName
     */
    public function __construct()
    {
        $arguments = func_get_args();

        if (!array_key_exists(0, $arguments)) $arguments[0] = \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Fusion\Core\Runtime');
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $runtime in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(1, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $path in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        if (!array_key_exists(2, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $fusionObjectName in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
        if ('Neos\Fusion\Form\Runtime\FusionObjects\MultiStepProcessImplementation' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __sleep()
    {
            $result = NULL;
        $this->Flow_Object_PropertiesToSerialize = array();
        unset($this->Flow_Persistence_RelatedEntities);

        $transientProperties = array (
);
        $propertyVarTags = array (
  'formStateService' => 'Neos\\Fusion\\Form\\Runtime\\Domain\\FormStateService',
  'state' => 'Neos\\Fusion\\Form\\Runtime\\Domain\\FormState|null',
  'data' => 'array<mixed>',
  'currentSubProcessKey' => 'string',
  'targetSubProcessKey' => 'string',
  'runtime' => 'Neos\\Fusion\\Core\\Runtime',
  'path' => 'string',
  'fusionObjectName' => 'string',
  'fusionValueCache' => 'array',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->formStateService = new \Neos\Fusion\Form\Runtime\Domain\FormStateService();
        $this->Flow_Injected_Properties = array (
  0 => 'formStateService',
);
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Fusion.Form/Classes/Runtime/FusionObjects/MultiStepProcessImplementation.php
#