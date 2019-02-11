<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 28/11/2018
 * Time: 18:43
 */


class IndexController{

    public function actionMain(){

        $sliderProducts = Products::getRecommendedProducts();

        $latestProducts = Products:: getProductsIndex(0);




        require_once (ROOT.'/views/index/content.php');

    }



}