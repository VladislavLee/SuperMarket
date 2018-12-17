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

            $result = $db->query('SELECT * FROM SuperMarket.Reviews WHERE id=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $reviewItem = $result->fetch();

            return $result->fetch();
        }
    }


    public static function GetReviewsList(){
        $db = Db::getConnection();

        $reviewsList = array();

        $result = $db->query ("SELECT * FROM Reviews ORDER BY date DESC");

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i=0;
        while ($row = $result->fetch()){
            $reviewsList[$i]['id'] = $row['id'];
            $reviewsList[$i]['date'] = $row['date'];
            $reviewsList[$i]['author_name'] = $row['author_name'];
            $i++;
        }

        return $reviewsList;

    }






    public static function GetReviewsListById($productId)
    {
        if ($productId) {

            $db = Db::getConnection();

            $reviewsList = array();

            $result = $db->query("SELECT * FROM Reviews WHERE id_product =  '$productId' ");

            $result->setFetchMode(PDO::FETCH_ASSOC);


            $i = 0;
            while ($row = $result->fetch()) {
                $reviewsList[$i]['id'] = $row['id'];
                $reviewsList[$i]['content'] = $row['content'];
                $reviewsList[$i]['date'] = $row['date'];
                $reviewsList[$i]['author_name'] = $row['author_name'];
                $i++;
            }


            return $reviewsList;
        }
    }



    public static function addReview($author_name,$content,$id_product){
        $db = Db::getConnection();
        $sql = 'INSERT INTO Reviews(id_product, author_name, date, content) 
                VALUES (:id_product, :author_name, NOW(), :content)';
        $result = $db->prepare($sql);
        $result->bindParam(':id_product',$id_product , PDO::PARAM_STR);
        $result->bindParam(':author_name',$author_name , PDO::PARAM_STR);
        $result->bindParam(':content',$content , PDO::PARAM_STR);
        return $result->execute();
    }
}