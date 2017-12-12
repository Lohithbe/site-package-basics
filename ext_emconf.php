<?php

/**
 * Extension Manager/Repository config file for ext "payd".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'payd',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99',
            'bootstrap_package' => '8.0.0-8.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Payd\\Payd\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Lohith',
    'author_email' => 'lohithbe007@gmail.com',
    'author_company' => 'payd',
    'version' => '1.0.0',
];
