<?php
namespace Energy;

use Energy\Library\Router;

//test

session_start();

//Define constant
//Permet de définir le caractère de séparation
// "/" pour Windows, "\" pour Linux
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)));
define('APPPATH', realpath(ROOT.DS.'app'));
define('LIBPATH', realpath(ROOT.DS.'library'));
define('ASSETSPATH', realpath(ROOT.DS.'assets'));

define('DEBUG_LEVEL', 2);

require LIBPATH.DS.'autoload.php';
require LIBPATH.DS.'function.php';

//Load Router
$rooter = new Router();
$rooter->SetErrorReporting();

//Run
$rooter->CallHook();