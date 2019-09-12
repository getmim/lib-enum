<?php

return [
    '__name' => 'lib-enum',
    '__version' => '0.0.2',
    '__git' => 'git@github.com:getmim/lib-enum.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/lib-enum' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'LibEnum\\Library' => [
                'type' => 'file',
                'base' => 'modules/lib-enum/library'
            ],
            'LibEnum\\Formatter' => [
                'type' => 'file',
                'base' => 'modules/lib-enum/formatter'
            ]
        ],
        'files' => []
    ],
    'libEnum' => [
        'enums' => []
    ],
    'libFormatter' => [
        'handlers' => [
            'enum' => [
                'handler' => 'LibEnum\\Formatter\\Main::enum',
                'collective' => FALSE
            ],
            'multiple-enum' => [
                'handler' => 'LibEnum\\Formatter\\Main::multipleEnum',
                'collective' => FALSE
            ]
        ]
    ],
    'callback' => [
        'app' => [
            'reconfig' => [
                'LibEnum\\Library\\Config::reconfig' => TRUE
            ]
        ]
    ]
];