<?php

$dc = &$GLOBALS['TL_DCA']['tl_content'];

// fields
$dc['fields']['vimeo'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['vimeo'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => ['mandatory' => true, 'decodeEntities' => true, 'rgxp' => 'url', 'tl_class' => 'w50'],
    'save_callback' => [
        ['tl_content_vimeo', 'extractVimeoId']
    ],
    'sql'                     => "varchar(16) NOT NULL default ''"
];

// palettes
$dc['palettes']['vimeo'] = '{type_legend},type,headline;{source_legend},vimeo;{player_legend},playerSize,autoplay;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID;{invisible_legend:hide},invisible,start,stop';