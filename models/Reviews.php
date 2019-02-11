<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 28/11/2018
 * Time: 23:11
 */

class Reviews{

    public static function GetReviewItemById($id){
        if($id) {
            $db = Db::getConnection();
            $reviewsList = array();

            $result = $db->query ('SELECT * FROM Reviews WHERE id_product=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $i=0;
            while ($row = $result->fetch()){
                $reviewsList[$i]['id'] = $row['id'];
                $reviewsList[$i]['date'] = $row['date'];
                $i++;
            }

            return $reviewsList;
        }
    }


    public static function GetReviewsList(){
        $db = Db::getConnection();

        $reviewsList = array();

        $result = $db->query ("SELECT * FROM Reviews JOIN user ON Reviews.user_id = user.id WHERE id_product =");

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i=0;
        while ($row = $result->fetch()){
            $reviewsList[$i]['id'] = $row['id'];
            $reviewsList[$i]['date'] = $row['date'];
            $reviewsList[$i]['name'] = $row['name'];
            $i++;
        }

        return $reviewsList;

    }






    public static function GetReviewsListById($productId)
    {
        if ($productId){

            $db = Db::getConnection();

            $reviewsList = array();

            $result = $db->query("SELECT * FROM Reviews JOIN user ON Reviews.user_id = user.id WHERE id_product=".$productId);

            $result->setFetchMode(PDO::FETCH_ASSOC);


            $i = 0;
            while ($row = $result->fetch()) {
                $reviewsList[$i]['id'] = $row['id'];
                $reviewsList[$i]['content'] = $row['content'];
                $reviewsList[$i]['date'] = $row['date'];
                $reviewsList[$i]['name'] = $row['name'];
                $i++;
            }

            return $reviewsList;
        }
    }



    public static function addReview($user_id,$content,$id_product){
        $db = Db::getConnection();
        $sql = 'INSERT INTO Reviews(id_product, user_id, date, content) 
                VALUES (:id_product, :user_id, NOW(), :content)';
        $result = $db->prepare($sql);
        $result->bindParam(':id_product',$id_product , PDO::PARAM_INT);
        $result->bindParam(':user_id',$user_id , PDO::PARAM_INT);
        $result->bindParam(':content',$content , PDO::PARAM_STR);
        return $result->execute();
    }
}