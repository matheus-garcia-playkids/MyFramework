<?php

/*
 * @author Matheus Garcia <matheus.mfgarcia@gmail.com>
 */

define('DS',DIRECTORY_SEPARATOR);
define('ROOT',dirname(__FILE__));

require 'Library'.DS.'AutoLoad.php';
$autoLoad = new AutoLoad();
$autoLoad->setPath(ROOT);
$autoLoad->setExt('php');

spl_autoload_register(array($autoLoad, 'loadCore'));
spl_autoload_register(array($autoLoad, 'load'));

use Framework\Router;

$router = New Router();
$router->init($_SERVER['REQUEST_URI']);
