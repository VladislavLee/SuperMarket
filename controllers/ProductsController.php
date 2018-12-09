<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 28/11/2018
 * Time: 18:43
 */

include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Products.php';

class ProductsController{

    public  function actionList(){
        $categories = array();
        $categories = Category::GetCategoriesList();

        $latestProducts  = array();
        $latestProducts = Products:: GetLatestProducts(6);


        require_once(ROOT . '/views/products/products-list.php');

        return true;
    }

    public function actionCategory($categoryId){

        $categories = array();
        $categories = Category::GetCategoriesList();



        $categoryProducts =array();
        $categoryProducts = Products::GetProductsListByCategory($categoryId);


        require_once(ROOT . '/views/products/products-category.php');

        return true;
    }


    public function actionProduct($productId){


        $productsItem = Products::GetProductItemById($productId);


        require_once (ROOT.'/views/products/product-detail.php');


        return true;
    }



}