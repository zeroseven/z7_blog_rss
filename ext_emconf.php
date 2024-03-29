<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Blog (RSS)',
    'description' => 'RSS-feed for extension z7_blog',
    'category' => 'plugin',
    'author' => 'Raphael Thanner',
    'author_email' => 'r.thanner@zeroseven.de',
    'author_company' => 'zeroseven design studios GmbH',
    'state' => 'obsolete',
    'clearCacheOnLoad' => 1,
    'version' => '1.3.2',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-11.99.99',
            'z7_blog' => '1.0.0-1.3.99'
        ]
    ]
];
