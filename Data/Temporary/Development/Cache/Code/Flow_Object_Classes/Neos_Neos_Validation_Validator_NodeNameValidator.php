<?php 
namespace Neos\Neos\Validation\Validator;

/*
 * This file is part of the Neos.Neos package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Validation\Validator\RegularExpressionValidator;
use Neos\ContentRepository\Domain\Model\NodeInterface;

/**
 * Validator for node names
 */
class NodeNameValidator_Original extends RegularExpressionValidator
{
    /**
     * @var array
     */
    protected $supportedOptions = [
        'regularExpression' => [NodeInterface::MATCH_PATTERN_NAME, 'The regular expression to use for validation, used as given', 'string']
    ];
}

#
# Start of Flow generated Proxy code
#
/**
 * Validator for node names
 * @codeCoverageIgnore
 */
class NodeNameValidator extends NodeNameValidator_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


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
  'supportedOptions' => 'array',
  'acceptsEmptyValues' => 'boolean',
  'options' => 'array',
  'resultStack' => 'array<Neos\\Error\\Messages\\Result>',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Neos/Classes/Validation/Validator/NodeNameValidator.php
#