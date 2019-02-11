<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 28/11/2018
 * Time: 18:43
 */


class ProductsController{

    public  function actionList($page = 'page-1'){
        $categories = array();
        $categories = Category::GetCategoriesList();


        $latestProducts = Products:: getProductsList($page);


        $total = Products::GetTotalProducts();

        $pagination = new Pagination($total, $page, Products::SNOW_BY_DEFAULT, 'page-');

        require_once(ROOT . '/views/products/products-list.php');
        return true;
    }



    public function actionCategory($categoryId, $page = 1){

        $categoryProducts = Products::GetProductsListByCategory($categoryId, $page);
        $categories = Category::GetCategoriesList();

        $categoryName = Category::getCategoryById($categoryId);
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


        $user_id = User::getUserId();

        $content = null;

        if (isset($_POST['submit'])) {

            $content = trim($_POST['content']);

            Reviews::addReview($user_id,$content,$productId);
            header("Location: /products/$productId");
        }

        require_once(ROOT . '/views/products/product-detail.php');
        return true;
    }



    public  function actionSearch(){
        echo (323423424243);
        if (isset($_POST['enter'])) {
            $text = trim($_POST['text']);
            $_SESSION['search'] = $text;
            header("Location: /searchList");
        }

        return true;
    }


    public function actionSearchList(){

        $categories = array();
        $categories = Category::GetCategoriesList();

        $search = $_SESSION['search'];

        $searchProducts=Products::GetProductsListBySearch($search);

        require_once(ROOT . '/views/products/products-search.php');

    }





}