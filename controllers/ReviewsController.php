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

        require_once (ROOT.'/views/reviews/reviews.php');

        return true;
    }


    public function actionItem($id){

        $id = intval($id);

        if($id){
            $reviewItem = Reviews:: GetReviewItemById($id);

            require_once (ROOT.'/views/reviews/reviews.php');

        }
        return true;
    }

}