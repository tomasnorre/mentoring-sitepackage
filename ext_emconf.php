<?php

/**
 * Extension Manager/Repository config file for ext "mentoring_sandbox".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Mentoring Sandbox',
    'description' => 'This is a site-package for the mentoring sandbox.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'MentoringInc\\MentoringSandbox\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'James Dante Midzi',
    'author_email' => 'no-reply@sandbox.tomasnorre.dk',
    'author_company' => 'Mentoring Inc.',
    'version' => '1.0.0',
];
