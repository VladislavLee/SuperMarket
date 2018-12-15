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


    public static function getCategoriesListAdmin()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT * FROM Category ORDER BY sort_order ASC');

        // Получение и возврат результатов
        $categoryList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['sort_order'] = $row['sort_order'];
            $categoryList[$i]['status'] = $row['status'];
            $i++;
        }
        return $categoryList;
    }
}