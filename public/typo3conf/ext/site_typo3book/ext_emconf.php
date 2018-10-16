<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Site Extension for TYPO3Book',
    'description' => 'main configuration',
    'version' => '0.0.1',
    'state' => 'beta',
    'clearCacheOnLoad' => 1,
    'author' => 'Elli Ludwigson',
    'author_email' => 'elli@openstrategypartners.com',
    'author_company' => 'Open Strategy Partners',
    'constraints' => array(
        'depends' => array(
            'typo3' => '9.5.0-9.9.9'
        ),
    ),
);