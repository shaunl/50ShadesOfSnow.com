<?php
/**
 * @author shaunl
 * @created 28/02/2015 11:01
 * @copyright 2014 Shaun Lawless
 */

require_once 'bootstrap.php';

use Silex\Application;
use Symfony\Component\HttpFoundation\Response;

$app = new Application;

$app->get('/', function (){
    return new Response('Under Construction');
});

return $app;
