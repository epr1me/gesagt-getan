<?php 
namespace Neos\Http\Factories;

use GuzzleHttp\Psr7\Stream;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\StreamInterface;

/**
 *
 */
class StreamFactory_Original implements StreamFactoryInterface
{
    /**
     * @inheritDoc
     */
    public function createStream(string $content = ''): StreamInterface
    {
        $fileHandle = fopen('php://temp', 'r+');
        fwrite($fileHandle, $content);
        rewind($fileHandle);

        return $this->createStreamFromResource($fileHandle);
    }

    /**
     * @inheritDoc
     */
    public function createStreamFromFile(string $filename, string $mode = 'r'): StreamInterface
    {
        $fileHandle = fopen($filename, $mode);
        return $this->createStreamFromResource($fileHandle);
    }

    /**
     * @inheritDoc
     */
    public function createStreamFromResource($resource): StreamInterface
    {
        return new Stream($resource);
    }

}

#
# Start of Flow generated Proxy code
#
/**
 *
 * @codeCoverageIgnore
 */
class StreamFactory extends StreamFactory_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Http.Factories/Classes/StreamFactory.php
#