<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 28/11/2018
 * Time: 18:43
 */


class IndexController{

    public function actionMain(){



        require_once(ROOT . '/views/layouts/header.php');
        require_once (ROOT.'/views/index/content.php');
        require_once(ROOT . '/views/layouts/footer.php');
    }



}