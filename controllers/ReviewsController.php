<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 28/11/2018
 * Time: 22:13
 */

include_once ROOT.'/models/Reviews.php';

class ReviewsController{

    public  function actionList(){

        $reviewsList = array();
        $reviewsList = Reviews :: GetReviewsList();

        require_once (ROOT.'/views/products/product-detail.php');

        return true;
    }


    public function actionItem($id){

        $id = intval($id);

        if($id){
            $reviewItem = Reviews:: GetReviewItemById($id);

            require_once (ROOT.'/views/reviews/review.php');

        }
        return true;
    }



    public function actionAdd($productId){


        User::checkLogged();
        $author_name = null;
        $content = null;
        $errors=null;

        $product = Products::getProductItemById($productId);

        if(isset($_POST['submit'])) {
            $rtext = $_POST['message'];


            Reviews::AddReview($author_name, $content);
        }


        if($errors!=null) $placeholder=$errors;
        require_once ROOT.'/views/reviews/addReview.php';
    }


}