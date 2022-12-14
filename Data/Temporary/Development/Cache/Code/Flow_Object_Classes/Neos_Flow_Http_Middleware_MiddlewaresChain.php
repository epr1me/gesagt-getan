<?php 
declare(strict_types=1);

namespace Neos\Flow\Http\Middleware;

/*
* This file is part of the Neos.Flow package.
*
* (c) Contributors of the Neos Project - www.neos.io
*
* This package is Open Source Software. For the full copyright and license
* information, please view the LICENSE file which was distributed with this
* source code.
*/

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class MiddlewaresChain_Original implements RequestHandlerInterface
{
    /**
     * @var MiddlewareInterface[]
     */
    private $chain;

    /**
     * @var \Closure[]
     */
    private $stepCallbacks = [];

    public function __construct(array $middlewaresChain)
    {
        array_walk($middlewaresChain, static function ($middleware) {
            if (!$middleware instanceof MiddlewareInterface) {
                throw new Exception(sprintf('Invalid element "%s" in middleware chain. Must implement %s.', is_object($middleware) ? get_class($middleware) : gettype($middleware), MiddlewareInterface::class));
            }
        });
        $this->chain = $middlewaresChain;
    }

    /**
     * Register a callback that is invoked whenever a middleware component is about to be processed
     *
     * Usage:
     *
     * $middlewaresChain->onStep(function(ServerRequestInterface $request) {
     *   // $request contains the latest instance of the server request
     * });
     *
     * @param \Closure $callback
     */
    public function onStep(\Closure $callback): void
    {
        $this->stepCallbacks[] = $callback;
    }

    /**
     * The PSR-15 request handler implementation method
     *
     * @inheritDoc
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        if (count($this->chain) === 0) {
            return new Response();
        }
        foreach ($this->stepCallbacks as $callback) {
            $callback($request);
        }
        $middleware = array_shift($this->chain);
        return $middleware->process($request, $this);
    }
}

#
# Start of Flow generated Proxy code
#

final class MiddlewaresChain extends MiddlewaresChain_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $middlewaresChain in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) ??? for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
        parent::__construct(...$arguments);
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
  'chain' => 'array<Psr\\Http\\Server\\MiddlewareInterface>',
  'stepCallbacks' => 'array<\\Closure>',
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
    }
}
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Http/Middleware/MiddlewaresChain.php
#