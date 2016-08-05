<?php

use Symfony\Component\HttpFoundation\Request;

require __DIR__."/../app/kernel.php";

$kernel = new AppKernel('dev', true);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);