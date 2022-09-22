<?php 
namespace Neos\Diff\Renderer\Text;

/**
 * This file is part of the Neos.Diff package.
 *
 * (c) 2009 Chris Boulton <chris.boulton@interspire.com>
 * Portions (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Diff\Renderer\AbstractRenderer;

/**
 * Unified Diff Renderer
 */
class TextUnifiedRenderer_Original extends AbstractRenderer
{
    /**
     * Render and return a unified diff.
     *
     * @return string The unified diff.
     */
    public function render()
    {
        $diff = '';
        $opCodes = $this->diff->getGroupedOpcodes();
        foreach ($opCodes as $group) {
            $lastItem = count($group) - 1;
            $i1 = $group[0][1];
            $i2 = $group[$lastItem][2];
            $j1 = $group[0][3];
            $j2 = $group[$lastItem][4];

            if ($i1 == 0 && $i2 == 0) {
                $i1 = -1;
                $i2 = -1;
            }

            $diff .= '@@ -' . ($i1 + 1) . ',' . ($i2 - $i1) . ' +' . ($j1 + 1) . ',' . ($j2 - $j1) . " @@\n";
            foreach ($group as $code) {
                list($tag, $i1, $i2, $j1, $j2) = $code;
                if ($tag == 'equal') {
                    $diff .= ' ' . implode("\n ", $this->diff->GetA($i1, $i2)) . "\n";
                } else {
                    if ($tag == 'replace' || $tag == 'delete') {
                        $diff .= '-' . implode("\n-", $this->diff->GetA($i1, $i2)) . "\n";
                    }

                    if ($tag == 'replace' || $tag == 'insert') {
                        $diff .= '+' . implode("\n+", $this->diff->GetB($j1, $j2)) . "\n";
                    }
                }
            }
        }
        return $diff;
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Unified Diff Renderer
 * @codeCoverageIgnore
 */
class TextUnifiedRenderer extends TextUnifiedRenderer_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

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
  'diff' => 'object Instance of the diff class that this renderer is generating the rendered diff for.',
  'defaultOptions' => 'array Array of the default options that apply to this renderer.',
  'options' => 'array Array containing the user applied and merged default options for the renderer.',
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
# PathAndFilename: /Applications/MAMP/htdocs/neos-example/Packages/Application/Neos.Diff/Classes/Renderer/Text/TextUnifiedRenderer.php
#