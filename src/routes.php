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
    $post = $request->getParsedBody();
    $mail = new PHPMailer;
    $mail->setFrom($post['email'], $post['name']);
    $mail->Subject = $post['subject'];
    $mail->Body = $post['message'];
    $mail->addAddress('chloe@ic-health.co.uk');
    $client = new \GuzzleHttp\Client();
    try {
        $resp = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => \Defuse\Crypto\Crypto::decryptWithPassword(
    'def5020084935a2ec1822406f0b5eec60e46ad053ff3b1442a0deab3163bf5b0750cac2a099e96d676a970352df6daf03a53a899e3f7769bb31e03c1a876c8a911db2f208701fe2df00643bd96adca340fc1b20a65d774914579f0b3782d4c01eb6eaad4c5555aa40ba4d8d944fefb647590158e4efb7fbd8b5af9be', getenv('IC_KEY')),
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
    return $this->view->render($response, 'services.twig');
})->setName('services');

$app->get('/health', function ($request, $response, $args) {
    return $this->view->render($response, 'health.twig');
})->setName('health');