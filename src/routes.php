<?php
// Routes
$app->get('/', function ($request, $response, $args) {
    return $this->renderer->render($response, 'index.phtml');
});

$app->get('/about', function ($request, $response, $args) {
    return $this->renderer->render($response, 'about.phtml');
})->setName('about');

$app->group('/services', function(){
    $this->get('', function ($request, $response, $args) {
        return $this->renderer->render($response, 'services.phtml');
    })->setName('services');
    $this->get('/online-pt', function ($request, $response, $args) {
        return $this->renderer->render($response, 'services/online-pt.phtml');
    })->setName('online-pt');
    $this->get('/personal-training', function ($request, $response, $args) {
        return $this->renderer->render($response, 'services/personal-training.phtml');
    })->setName('personal-training');
    $this->get('/group-training', function ($request, $response, $args) {
        return $this->renderer->render($response, 'serivces/group-training.phtml');
    })->setName('group-training');
    $this->get('/injury-prevention', function ($request, $response, $args) {
        return $this->renderer->render($response, 'services/injury-prevention.phtml');
    })->setName('injury-prevention');
});

// $app->get('', function($request, $response, $args){})->setName('');
// $app->get('', function($request, $response, $args){})->setName('');
// $app->get('', function($request, $response, $args){})->setName('');
// $app->get('', function($request, $response, $args){})->setName('');
// $app->get('', function($request, $response, $args){})->setName('');
