<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Blog (RSS)',
    'description' => 'z7_blog RSS-feed',
    'category' => 'plugin',
    'author' => 'Raphael Thanner',
    'author_email' => 'r.thanner@zeroseven.de',
    'author_company' => 'zeroseven design studios GmbH',
    'state' => 'alpha',
    'clearCacheOnLoad' => 1,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'z7_blog' => ''
        ],
        'suggests' => [
        ]
    ]
];
