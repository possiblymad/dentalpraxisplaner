<?php

/**
 * Extension Manager/Repository config file for ext "dentalpraxisplaner".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'dentalpraxisplaner',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'fluid_styled_content' => '9.5.0-9.5.99',
            'rte_ckeditor' => '9.5.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Nocompany\\Dentalpraxisplaner\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'deepseafish',
    'author_email' => 'mr.euki@gmail.com',
    'author_company' => 'nocompany',
    'version' => '1.0.0',
];
