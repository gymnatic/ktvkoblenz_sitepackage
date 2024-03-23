<?php

/**
 * Extension Manager/Repository config file for ext "ktvkoblenz_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'KTVKoblenz Sitepackage',
    'description' => 'Official sitepackage of KTV Koblenz',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'KtvKoblenzEv\\KtvkoblenzSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Pascal G',
    'author_email' => 'p.glowienka@ktvkoblenz.de',
    'author_company' => 'KTV Koblenz e.V.',
    'version' => '1.0.0',
];
