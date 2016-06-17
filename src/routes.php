<?php
// Routes
$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'index.twig');
});

$app->get('/about', function ($request, $response, $args) {
    return $this->view->render($response, 'about.twig');
})->setName('about');

$app->group('/services', function(){
    $this->get('', function ($request, $response, $args) {
        return $this->view->render($response, 'services.twig');
    })->setName('services');
    $this->get('/online-pt', function ($request, $response, $args) {
        return $this->view->render($response, 'services/online-pt.twig');
    })->setName('online-pt');
    $this->get('/personal-training', function ($request, $response, $args) {
        return $this->view->render($response, 'services/personal-training.twig');
    })->setName('personal-training');
    $this->get('/group-training', function ($request, $response, $args) {
        return $this->view->render($response, 'serivces/group-training.twig');
    })->setName('group-training');
    $this->get('/injury-prevention', function ($request, $response, $args) {
        return $this->view->render($response, 'services/injury-prevention.twig');
    })->setName('injury-prevention');
});

// $app->get('', function($request, $response, $args){})->setName('');
// $app->get('', function($request, $response, $args){})->setName('');
// $app->get('', function($request, $response, $args){})->setName('');
// $app->get('', function($request, $response, $args){})->setName('');
// $app->get('', function($request, $response, $args){})->setName('');
