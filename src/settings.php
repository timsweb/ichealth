<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates_twig/',
            'twig_envs' => [
                'cache' => __DIR__ . '/../templates_cache/',
                'auto_reload' => true,
            ],
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
        ],

        'layout' => [
            'header' => 'layout/header.phtml',
            'footer' => 'layout/footer.phtml',
        ],
    ],
];
