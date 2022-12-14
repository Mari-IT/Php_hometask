<?php

namespace Apsl\Inf03\Webdev;

use Apsl\Html\Template;
use Apsl\Http\Request;
use Apsl\Http\Response;
use Apsl\Session\Session;


class Application
{
    const LOGIN = 'person';
    const PASS = '12345';

    public function run(): void
    {
        $request = new Request();

        $response = new Response();
        $response->addHeader(Response::HEADER_CONTENT_TYPE, 'text/html');

        $session = new Session();


        if($session->getValue('userlogin_authorized') == self::LOGIN){
            header("Location: templates/user_authorized.php");
        }

        $template = new Template('templates/index.html.php');
        $out = $template->render([
            'title' => 'Hello!'
        ]);
        
        // TODO: hide login form when user is logged in, display log out which will destroy session
        $response->setBody($out);

        $response->send();
    }
}
