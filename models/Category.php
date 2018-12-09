<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 05/12/2018
 * Time: 15:57
 */

class Category{

    public  static function GetCategoriesList(){

        $db = Db::getConnection();

        $categoryList = array();

        $result = $db->query('SELECT id , name FROM Category ORDER BY sort_order ASC ');

        $i=0;
        while ($row = $result->fetch()){
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];

            $i++;
        }

        return $categoryList;
    }

}