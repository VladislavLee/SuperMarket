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

            $result = $db->query('SELECT title, date, short_content, author_name FROM SuperMarket.Reviews WHERE id=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $reviewItem = $result->fetch();

            return $result->fetch();
        }
    }


    public static function GetReviewsList(){
        $db = Db::getConnection();

        $reviewsList = array();

        $result = $db->query ("SELECT id, title, short_content , author_name , date FROM Reviews ORDER BY date DESC");

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i=0;
        while ($row = $result->fetch()){
            $reviewsList[$i]['id'] = $row['id'];
            $reviewsList[$i]['title'] = $row['title'];
            $reviewsList[$i]['short_content'] = $row['short_content'];
            $reviewsList[$i]['date'] = $row['date'];
            $reviewsList[$i]['author_name'] = $row['author_name'];
            $i++;
        }

        return $reviewsList;

    }

}