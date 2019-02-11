<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 16/12/2018
 * Time: 01:15
 */

class AdminController extends AdminBase{

    public function actionIndex()
    {

        self::checkAdmin();

        require_once(ROOT . '/views/admin/index.php');
        return true;
    }

}