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
$session->destroy();
header('Location: index.php');