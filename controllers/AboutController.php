<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 23/12/2018
 * Time: 22:28
 */

class AboutController{


    public function actionIndex(){

        $list = About::getAbout();

        require_once (ROOT.'/views/about/about.php');

        return true;


    }



}