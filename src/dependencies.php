<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['view'] = function ($c) use($container) {
    $settings = $c->get('settings')['renderer'];
    $view = new \Slim\Views\Twig($settings['template_path'], $settings['twig_envs']);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));
    return $view;
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));
    return $logger;
};

// $container['layout'] = function($c) {
//     $layout = new \Middleware\Layout($c->get('renderer'), $c->get('settings')['layout']);
//     return $layout;
// };