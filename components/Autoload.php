<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 12/12/2018
 * Time: 00:48
 */

spl_autoload_register(function($class_name) {

    $array_paths = array(
        '/models/',
        '/components/',
        '/controllers/',
    );

    foreach ($array_paths as $path) {


        $path = ROOT . $path . $class_name . '.php';


        if (is_file($path)) {
            include_once $path;
        }
    }
});