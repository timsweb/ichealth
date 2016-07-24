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

$app->group('/services', function(){
    $this->get('', function ($request, $response, $args) {
        return $this->view->render($response, 'services.twig');
    })->setName('services');
    $this->get('/virtual-pt', function ($request, $response, $args) {
        return $this->view->render($response, 'services/virtual-pt.twig');
    })->setName('virtual-pt');
    $this->get('/personal-training', function ($request, $response, $args) {
        return $this->view->render($response, 'services/personal-training.twig');
    })->setName('personal-training');
    $this->get('/group-training', function ($request, $response, $args) {
        return $this->view->render($response, 'services/group-training.twig');
    })->setName('group-training');
    $this->get('/injury-prevention', function ($request, $response, $args) {
        return $this->view->render($response, 'services/injury-prevention.twig');
    })->setName('injury-prevention');
    $this->get('/sports-conditioning', function ($request, $response, $args) {
        return $this->view->render($response, 'services/sports-conditioning.twig');
    })->setName('sports-conditioning');
    $this->get('/nutrition', function ($request, $response, $args) {
        return $this->view->render($response, 'services/nutrition.twig');
    })->setName('nutrition');
});

// $app->get('', function($request, $response, $args){})->setName('');
// $app->get('', function($request, $response, $args){})->setName('');
// $app->get('', function($request, $response, $args){})->setName('');
// $app->get('', function($request, $response, $args){})->setName('');
// $app->get('', function($request, $response, $args){})->setName('');
