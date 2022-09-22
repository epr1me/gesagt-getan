<?php 
declare(strict_types=1);

namespace Neos\Flow\Http;

/*
 * This file is part of the Neos.Flow package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

/**
 * Cache-Control HTTP header generation/parsing
 */
class CacheControlDirectives_Original
{
    /**
     * @var array
     */
    protected $cacheDirectives = [
        'visibility' => '',
        'max-age' => '',
        's-maxage' => '',
        'must-revalidate' => '',
        'proxy-revalidate' => '',
        'no-store' => '',
        'no-transform' => ''
    ];

    /**
     * @param string $rawHeaderValue The value of a specification compliant Cache-Control header
     */
    private function __construct(string $rawHeaderValue)
    {
        foreach (array_keys($this->cacheDirectives) as $key) {
            $this->cacheDirectives[$key] = '';
        }
        preg_match_all('/([a-zA-Z][a-zA-Z_-]*)\s*(?:=\s*(?:"([^"]*)"|([^,;\s"]*)))?/', $rawHeaderValue, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            if (isset($match[2]) && $match[2] !== '') {
                $value = $match[2];
            } elseif (isset($match[3]) && $match[3] !== '') {
                $value = $match[3];
            } else {
                $value = null;
            }
            $this->setDirective(strtolower($match[1]), $value);
        }
    }

    /**
     * Internally sets the cache directives correctly by parsing the given
     * Cache-Control header value.
     *
     * @param string $rawHeaderValue The value of a specification compliant Cache-Control header
     * @return self
     */
    public static function fromRawHeader(string $rawHeaderValue): self
    {
        return new self($rawHeaderValue);
    }

    /**
     * Sets a special directive for use in the Cache-Control header, according to
     * RFC 2616 / 14.9
     *
     * @param string $name Name of the directive, for example "max-age"
     * @param string|null $value An optional value
     * @return void
     * @api
     */
    public function setDirective(string $name, ?string $value = null): void
    {
        switch ($name) {
            case 'public':
                $this->cacheDirectives['visibility'] = 'public';
            break;
            case 'private':
            case 'no-cache':
                $this->cacheDirectives['visibility'] = $name . (!empty($value) ? '="' . $value . '"' : '');
            break;
            case 'no-store':
            case 'no-transform':
            case 'must-revalidate':
            case 'proxy-revalidate':
                $this->cacheDirectives[$name] = $name;
            break;
            case 'max-age':
            case 's-maxage':
                $this->cacheDirectives[$name] = $name . '=' . $value;
            break;
        }
    }

    /**
     * Removes a special directive previously set for the Cache-Control header.
     *
     * @param string $name Name of the directive, for example "public"
     * @return void
     */
    public function removeDirective(string $name): void
    {
        switch ($name) {
            case 'public':
            case 'private':
            case 'no-cache':
                $this->cacheDirectives['visibility'] = '';
            break;
            case 'no-store':
            case 'max-age':
            case 's-maxage':
            case 'no-transform':
            case 'must-revalidate':
            case 'proxy-revalidate':
                $this->cacheDirectives[$name] = '';
            break;
        }
    }

    /**
     * Returns the value of the specified Cache-Control directive.
     *
     * If the cache directive is not present, NULL is returned. If the specified
     * directive is present but contains no value, this method returns true. Finally,
     * if the directive is present and does contain a value, the value is returned.
     *
     * @param string $name Name of the cache directive, for example "max-age"
     * @return mixed
     * @api
     */
    public function getDirective(string $name)
    {
        $value = null;

        switch ($name) {
            case 'public':
                $value = ($this->cacheDirectives['visibility'] === 'public' ? true : null);
            break;
            case 'private':
            case 'no-cache':
                preg_match('/^(' . $name . ')(?:="([^"]+)")?$/', $this->cacheDirectives['visibility'], $matches);
                if (!isset($matches[1])) {
                    $value = null;
                } else {
                    $value = ($matches[2] ?? true);
                }
            break;
            case 'no-store':
            case 'no-transform':
            case 'must-revalidate':
            case 'proxy-revalidate':
                $value = ($this->cacheDirectives[$name] !== '' ? true : null);
            break;
            case 'max-age':
            case 's-maxage':
                preg_match('/^(' . $name . ')=(.+)$/', $this->cacheDirectives[$name], $matches);
                if (!isset($matches[1])) {
                    $value = null;
                } else {
                    $value = (isset($matches[2]) ? (int)$matches[2] : true);
                }
            break;
        }

        return $value;
    }

    /**
     * @return array
     */
    public function getDirectives(): array
    {
        return array_values(array_filter($this->cacheDirectives));
    }

    /**
     * Renders and returns a Cache-Control header value, based on the previously set
     * cache control directives.
     *
     * @return string|null Either the value of the header or NULL if it shall be omitted
     */
    public function getCacheControlHeaderValue(): ?string
    {
        $cacheControl = '';
        foreach ($this->cacheDirectives as $cacheDirective) {
            $cacheControl .= ($cacheDirective !== '' ? $cacheDirective . ', ' : '');
        }
        $cacheControl = trim($cacheControl, ' ,');
        return ($cacheControl === '' ? null : $cacheControl);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Cache-Control HTTP header generation/parsing
 * @codeCoverageIgnore
 */
class CacheControlDirectives extends CacheControlDirectives_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     *
     * @param string $rawHeaderValue The value of a specification compliant Cache-Control header
     */
    public function __construct()
    {
        $arguments = func_get_args();
        if (!array_key_exists(0, $arguments)) throw new \Neos\Flow\ObjectManagement\Exception\UnresolvedDependenciesException('Missing required constructor argument $rawHeaderValue in class ' . __CLASS__ . '. Note that constructor injection is only support for objects of scope singleton (and this is not a singleton) – for other scopes you must pass each required argument to the constructor yourself.', 1296143788);
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
  'cacheDirectives' => 'array',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Framework/Neos.Flow/Classes/Http/CacheControlDirectives.php
#