<?php

require_once 'vendor/autoload.php';

use Apsl\Session\Session;
use Apsl\Http\Request;
use Apsl\Html\Template;
use Apsl\Http\Response;

const LOGIN = 'person';
const PASS = '12345';

$session = new Session();

$request = new Request();
if ($request->isMethod(Request::METHOD_POST)) {
    $login = $request->getValue('login');
    $pass = $request->getValue('pass');

    // TODO: store in session, display success message, display error message if wrong credentials

    if($login != LOGIN || $pass != PASS){
           ?>
           
            <h1> Your credentials are not corrent. Please, check them!</h1>

           <style>
            h1{
                font-size: 20pt
            }
           </style>

           <?php
    }
    else{
        $session->setValue('userlogin_authorized', $login);
        
        $template = new Template('templates/user_authorized.php');
        $out = $template->render([
            'login' => $login
        ]);

        $response = new Response();
        $response->addHeader(Response::HEADER_CONTENT_TYPE, 'text/html');

        $response->setBody($out);

        $response->send();
    }
}
