<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 16/12/2018
 * Time: 01:16
 */

abstract class AdminBase
{


    public static function checkAdmin()
    {

        $userId = User::checkLogged();


        $user = User::getUserById($userId);

        if ($user['role'] == 'admin') {
            return true;
        }

    }

}