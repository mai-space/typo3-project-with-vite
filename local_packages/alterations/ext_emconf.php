<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Alterations',
    'description' => 'Client specific alterations',
    'version' => '12.0.0',
    'state' => 'stable',
    'category' => 'templates',
    'author' => 'Joel Maximilian Mai',
    'author_email' => 'joel@maispace.de',
    'author_company' => 'Maispace',
    'constraints' => [
        'depends' => [
            'typo3' => '12.3.0-12.3.99',
            'fluid_styled_content' => '12.3.0-12.3.99',
            'rte_ckeditor' => '12.3.0-12.3.99',
        ],
        'conflicts' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'autoload' => [
        'psr-4' => [
            'Maispace\\Alterations\\' => 'Classes',
        ],
    ],
];
