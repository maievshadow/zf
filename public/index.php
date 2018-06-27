<?php
/**
 * Created by PhpStorm.
 * User: maievshabu
 * Date: 2018/6/27
 * Time: 下午2:04
 */

use Symfony\Component\HttpFoundation\Request;

require __DIR__.'/../src/Kernel.php';

$kernel = new Kernel('dev', true);
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);