<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 28/11/2018
 * Time: 18:43
 */


class ProductsController{

    public  function actionList(){
        $categories = array();
        $categories = Category::GetCategoriesList();

        $latestProducts  = array();
        $latestProducts = Products:: GetLatestProducts(6);


        require_once(ROOT . '/views/products/products-list.php');

        return true;
    }



    public function actionCategory($categoryId, $page = 'page-1'){
        $page=substr($page,5,strlen($page)-1);

        $categoryProducts = Products::GetProductsListByCategory($categoryId, $page);
        $categories = Category::GetCategoriesList();

        $total = Products::GetTotalProductsInCategory($categoryId);


        $pagination = new Pagination($total, $page, Products::SNOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/products/products-category.php');
        return true;
    }


    public function actionProduct($productId)
    {
        $reviewsList = Reviews::GetReviewsListById($productId);

        $productsItem = Products::getProductItemById($productId);

        $sliderProducts = Products::getRecommendedProducts();


        $name = null;
        $text = null;


        if (isset($_POST['submit'])) {
            $author_name = trim($_POST['author_name']);
            $content = trim($_POST['content']);

            Reviews::addReview($author_name,$content,$productId);

        }

        require_once(ROOT . '/views/products/product-detail.php');

        return true;
    }







}