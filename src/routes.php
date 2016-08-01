<?php
// Routes
$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'index.twig');
});

$app->get('/about', function ($request, $response, $args) {
    return $this->view->render($response, 'about.twig');
})->setName('about');

$app->get('/contact', function ($request, $response, $args) {
    return $this->view->render($response, 'contact.twig');
})->setName('contact');

$app->post('/contact', function ($request, $response, $args) {
    return $this->view->render($response, 'contact.twig');
})->setName('contact_post');

$app->get('/services', function ($request, $response, $args) {
    return $this->view->render($response, 'services.twig');
})->setName('services');

$app->get('/health', function ($request, $response, $args) {
    return $this->view->render($response, 'health.twig');
})->setName('health');
