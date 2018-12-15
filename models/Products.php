<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 04/12/2018
 * Time: 16:28
 */

class Products{

    const SNOW_BY_DEFAULT= 3;

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



    public static function GetProductsListByCategory($categoryId=false ,$page ){


        if($categoryId) {

            $page = intval($page);
            $offset = ($page - 1) *self::SNOW_BY_DEFAULT;

            $db = Db::getConnection();

            $products = array();

          /*  $result = $db->query(" SELECT *
                                            FROM Products
                                            WHERE products_status = '1' AND category_id = '$categoryId'
                                            ORDER BY id
                                            LIMIT 3 
                                           ");*/
          $queryString = 'SELECT *
                                        FROM Products WHERE category_id='."'".$categoryId."'"
              .' LIMIT 3 OFFSET '.$page*3;

            $result = $db->query($queryString);
            echo "page = ".$page;
            echo $queryString;
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


    public static function getProductItemById($productId){
        if ($productId){
            $db = Db::getConnection();

            $result = $db->query("SELECT id, name, price, image, preview, category_id, description, products_status
                                            FROM Products
                                            WHERE id = '$productId'
                                             ");


            $result->setFetchMode(PDO::FETCH_ASSOC);




            return $result->fetch();
        }
    }




    public static function GetTotalProductsInCategory($categoryId)
    {

        $db = Db::getConnection();

        $result = $db->query( "SELECT count(id) AS count FROM Products WHERE products_status='1' AND category_id = '$categoryId'");

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $row = $result->fetch();
        return $row['count'];
    }



}