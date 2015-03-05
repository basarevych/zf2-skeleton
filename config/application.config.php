<?php

return [
    'modules' => [
        'Application',
        'ExampleORM',
        // Your modules here
        'DoctrineModule',
        'DoctrineORMModule',
        'DoctrineMongoODMModule',
    ],

    'module_listener_options' => [
        'module_paths' => [
            './module',
            './vendor',
        ],

        'config_glob_paths' => [
            'config/autoload/{,*.}{global,local}.php',
        ],
    ],
];
