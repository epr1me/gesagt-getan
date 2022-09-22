<?php 
declare(strict_types=1);

namespace Neos\Media\Domain\ValueObject\Configuration;

/*
 * This file is part of the Neos.Media package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

class MediaTypePattern_Original
{
    /**
     * @var string
     */
    private $mediaTypePattern;

    /**
     * Currently only image/* media types are allowed, because asset variant presets lack
     * support for other types, such as audio, document or video.
     *
     * @param string $mediaTypePattern A regular exception matching media type(s)
     */
    public function __construct(string $mediaTypePattern)
    {
        try {
            preg_match($mediaTypePattern, 'foo');
        } catch (\Throwable $exception) {
            $message = str_replace('preg_match():', '', $exception->getMessage());
            throw new \InvalidArgumentException(sprintf('Failed parsing the media type pattern "%s": %s', $mediaTypePattern, $message), 1552988339);
        }
        if (strpos($mediaTypePattern, 'image/') === false && strpos($mediaTypePattern, 'image\/') === false) {
            throw new \InvalidArgumentException(sprintf('Invalid media type pattern "%s": Currently only patterns starting with "image/" are supported.', $mediaTypePattern), 1552991434);
        }
        $this->mediaTypePattern = $mediaTypePattern;
    }

    /**
     * @param string $mediaType The concrete media type, for example "image/jpeg"
     * @return bool
     */
    public function matches(string $mediaType): bool
    {
        return preg_match($this->mediaTypePattern, $mediaType) === 1;
    }

    /**
     * @return string
     */
    public function getMediaTypePattern(): string
    {
        return $this->mediaTypePattern;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->mediaTypePattern;
    }
}

#
# Start of Flow generated Proxy code
#

final class MediaTypePattern extends MediaTypePattern_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * Currently only image/* media types are allowed, because asset variant presets lack
     * support for other types, such as audio, document or video.
     *
     * @param string $mediaTypePattern A regular exception matching media type(s)
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $mediaTypePattern in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'mediaTypePattern' => 'string',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Media/Classes/Domain/ValueObject/Configuration/MediaTypePattern.php
#