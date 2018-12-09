<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 04/12/2018
 * Time: 16:28
 */

class Products{

    const SNOW_BY_DEFAULT= 6;

     public static function GetLatestProducts($count= self::SNOW_BY_DEFAULT ){

        $count = intval($count);

        $db = Db::getConnection();

        $productsList = array();

         $result = $db->query("SELECT id, name, price, image, preview
                                            FROM Products
                                            WHERE products_status = '1' 
                                            ORDER BY id DESC 
                                            LIMIT $count ");


        $result->setFetchMode(PDO::FETCH_ASSOC);

        $i=0;
        while ($row = $result->fetch()){
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['preview'] = $row['preview'];
            $i++;
        }

        return $productsList;
    }


    public static function GetProductsListByCategory($categoryId){


        if($categoryId) {
            $db = Db::getConnection();
            $categoryId = preg_replace( '/^.(.*)$/', '\1', $categoryId );
            $products = array();

            $result = $db->query("SELECT id, name, price, image, preview, category_id, products_status
                                            FROM Products
                                            WHERE products_status = '1' AND category_id = '$categoryId'
                                            ORDER BY id DESC
                                             ");


            $result->setFetchMode(PDO::FETCH_ASSOC);

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['preview'] = $row['preview'];
                $i++;
            }
        }

        return $products;
    }



    public static function GetProductItemById($productId){



        if ($productId){
            $db = Db::getConnection();
            $productId = preg_replace( '/^.(.*)$/', '\1', $productId );

            $result = $db->query("SELECT id, name, price, image, preview, category_id, products_status
                                            FROM Products
                                            WHERE products_status = '1' AND id = '$productId'
                                            ORDER BY id DESC
                                             ");

            $result->setFetchMode(PDO::FETCH_ASSOC);



            return $result->fetch();
        }
    }


}