<?php

namespace Contao;

class tl_content_vimeo extends \tl_content
{
    /**
     * Extract the Vimeo ID from an URL
     *
     * @param mixed         $varValue
     * @param DataContainer $dc
     *
     * @return mixed
     */
    public function extractVimeoId($varValue, DataContainer $dc)
    {
        if ($dc->activeRecord->singleSRC != $varValue)
        {
            $matches = array();

            if (preg_match('%vimeo\.com/(?:channels/(?:\w+/)?|groups/(?:[^/]+)/videos/|album/(?:\d+)/video/)?(\d+)(?:$|/|\?)%i', $varValue, $matches))
            {
                $varValue = $matches[1];
            }
        }

        return $varValue;
    }
}