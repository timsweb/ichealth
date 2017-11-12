<?php
// Routes
$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'index-new.twig');
});

$app->get('/about', function ($request, $response, $args) {
    return $response->withRedirect('/', 302);
    return $this->view->render($response, 'about.twig');
})->setName('about');

$app->get('/contact', function ($request, $response, $args) {
    return $response->withRedirect('/', 302);
    return $this->view->render($response, 'contact.twig');
})->setName('contact');

$app->post('/contact', function ($request, $response, $args) {
    $post = $request->getParsedBody();
    $mail = new PHPMailer;
    $mail->setFrom($post['email'], $post['name']);
    $mail->Subject = $post['subject'];
    $mail->Body = $post['message'];
    $mail->addAddress('chloe@ic-health.co.uk');
    $mail->addAddress('ian@ic-health.co.uk');
    $client = new \GuzzleHttp\Client();
    try {
        $resp = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => \Defuse\Crypto\Crypto::decryptWithPassword(
    'def50200f314c2c271c68369ac1060b727f243ebc1957f5506d681cdbbf5f0cb59957fb8ce1cda17bf880ca24c4b39d1385e9ff95b68d1b987c5df9e481b821aca1327fc0f12c15c6e4ec1cc72c388af9ed748fc65a4c87006587c46b52673af953da06be3051cd0ee8895364503dccc2412dd5eb84b0a5d311ee549', getenv('IC_KEY')),
                'response' => $post['g-recaptcha-response'],
            ]
        ]);
        if ($resp->getStatusCode() !== 200) {
            return $this->view->render($response, 'contact-thanks.twig', ['error' => true]);
        }
        $verification  = json_decode($resp->getBody());
        if ($verification->success) {
            if (!$mail->send()) {
                return $this->view->render($response, 'contact-thanks.twig', ['error' => true]);
            }
        }
    } catch (\Exception $e) {
        return $this->view->render($response, 'contact-thanks.twig', ['error' => true]);
    }
    return $this->view->render($response, 'contact-thanks.twig', ['error' => false]);
})->setName('contact_post');

$app->get('/services', function ($request, $response, $args) {
    return $response->withRedirect('/', 302);
    return $this->view->render($response, 'services.twig');
})->setName('services');

$app->get('/health', function ($request, $response, $args) {
    return $response->withRedirect('/', 302);
    return $this->view->render($response, 'health.twig');
})->setName('health');