<?php
/**
 * @author shaunl
 * @created 28/02/2015 11:04
 * @copyright 2014 Shaun Lawless
 */

require_once __DIR__ . '/../vendor/autoload.php';

$debug = getenv('ENVIRONMENT') !== 'PRODUCTION' ? true : false;
define('DEBUG_MODE', $debug);
