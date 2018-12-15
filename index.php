<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 27/11/2018
 * Time: 20:37
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);


define('ROOT', dirname(__FILE__));
require_once ROOT.'/components/Autoload.php';


$router = new Router();
$router ->run();