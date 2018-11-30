<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 28/11/2018
 * Time: 23:17
 */

class Db
{
    public static function getConnection(){
        $parametersRoot = ROOT.'/config/db_parameters.php';
        $parameters = include($parametersRoot);

        $db = new PDO("mysql:host={$parameters['host']};dbname={$parameters['dbname']};charset=utf8;",$parameters['user'],$parameters['password'],[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        return $db;
    }
}