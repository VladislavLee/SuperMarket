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

         $result = $db->query("SELECT *
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
            $productsList[$i]['preview'] = $row['preview'];
            $i++;
        }

        return $productsList;
    }


    public static function getProductsList(){

        $db = Db::getConnection();


        $result = $db->query('SELECT id, name, price FROM Products');
        $productsList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }
        return $productsList;
    }


    public static function deleteProductById($id)
    {

        $db = Db::getConnection();


        $sql = 'DELETE FROM Products WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }




    public static function GetProductsListByCategory($categoryId=false ,$page ){
        if($categoryId) {

            $page = intval($page);
            $offset = ($page - 1) *self::SNOW_BY_DEFAULT;

            $db = Db::getConnection();

            $products = array();

            $queryString = 'SELECT *
                                        FROM Products WHERE category_id='."'".$categoryId."'"
              .' LIMIT 3 OFFSET '.$page*3;

            $result = $db->query($queryString);

            $result->setFetchMode(PDO::FETCH_ASSOC);

            $i = 0;
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['preview'] = $row['preview'];
                $i++;
            }
        }

        return $products;
    }


    public static function getProductItemById($productId){
        if ($productId){
            $db = Db::getConnection();

            $result = $db->query("SELECT *
                                            FROM Products
                                            WHERE id = '$productId'
                                             ");


            $result->setFetchMode(PDO::FETCH_ASSOC);




            return $result->fetch();
        }
    }



    public static function getProductsByIds($idsArray){
        $db = Db::getConnection();

        $idsString = implode(',', $idsArray);

        $sql = "SELECT * FROM Products WHERE  id IN ($idsString)";
        $result = $db->query($sql);

        $result->setFetchMode(PDO::FETCH_ASSOC);


        $i = 0;
        $products = array();
        while ($row = $result->fetch()) {
            $products[$i]['id'] = $row['id'];
            $products[$i]['count'] = $row['count'];
            $products[$i]['name'] = $row['name'];
            $products[$i]['price'] = $row['price'];
            $i++;
        }
        return $products;
    }



    public static function GetTotalProductsInCategory($categoryId){
        $db = Db::getConnection();

        $result = $db->query( "SELECT count(id) AS count FROM Products WHERE products_status='1' AND category_id = '$categoryId'");

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $row = $result->fetch();
        return $row['count'];
    }



    public static function getRecommendedProducts(){
        $db = Db::getConnection();

        $result = $db->query('SELECT id, name, price FROM Products '
            . 'WHERE  is_recommended = "1" '
            . 'ORDER BY id DESC');
        $i = 0;

        $productsList = array();
        while ($row = $result->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['price'] = $row['price'];
            $i++;
        }
        return $productsList;
    }



    public static function createProduct($options){
         $db = Db::getConnection();

        $sql = 'INSERT INTO Products '
            . '(name, price, count, category_id,  available,'
            . 'is_recommended, products_status, preview, description)'
            . 'VALUES '
            . '(:name, :price, :count, :category_id, :available,'
            . ':is_recommended, :products_status, :preview, :description)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':count', $options['count'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':available', $options['available'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':products_status', $options['products_status'], PDO::PARAM_INT);
        $result->bindParam(':preview', $options['preview'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);

        if ($result->execute()) {

            return $db->lastInsertId();
        }

        return 0;
    }


    public static function updateProductById($id, $options){
         $db = Db::getConnection();

        $sql = "UPDATE Products
            SET 
                name = :name,  
                price = :price, 
                count = :count,
                category_id = :category_id, 
                available = :available, 
                is_recommended = :is_recommended, 
                products_status = :products_status,
                preview = :preview, 
                description = :description
            WHERE id = :id ";


        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $result->bindParam(':price', $options['price'], PDO::PARAM_STR);
        $result->bindParam(':count', $options['count'], PDO::PARAM_STR);
        $result->bindParam(':category_id', $options['category_id'], PDO::PARAM_INT);
        $result->bindParam(':available', $options['available'], PDO::PARAM_INT);
        $result->bindParam(':is_recommended', $options['is_recommended'], PDO::PARAM_INT);
        $result->bindParam(':products_status', $options['products_status'], PDO::PARAM_INT);
        $result->bindParam(':preview', $options['preview'], PDO::PARAM_INT);
        $result->bindParam(':description', $options['description'], PDO::PARAM_STR);

        return $result->execute();
    }



    public static function getImage($id){
        $noImage = '1.jpg';

        $path = '/images/products/';

        $pathToProductImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToProductImage)) {
            return $pathToProductImage;
        }

        return $path . $noImage;
    }


}