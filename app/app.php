<?php
/**
 * @author shaunl
 * @created 28/02/2015 11:01
 * @copyright 2014 Shaun Lawless
 */

require_once 'bootstrap.php';

use Silex\Application;

$app = new Application;

$app->mount('/', new \Shaunl\FiftyShades\Provider\BaseControllerProvider);

return $app;
