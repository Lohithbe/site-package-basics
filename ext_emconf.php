<?php

/**
 * Extension Manager/Repository config file for ext "site_package_basics".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'site package basics',
    'description' => 'typo3 site package basics demo',
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
            'HofUniversity\\SitePackageBasics\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Lohith B E',
    'author_email' => 'lbyadarahallieswarap@hof-university.de',
    'author_company' => 'Hof University',
    'version' => '1.0.0',
];
