<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 15/12/2018
 * Time: 20:00
 */

class Cart
{

    public static function addProduct($id)
    {
        $id = intval($id);

        $productsInCart = array();

        if (isset($_SESSION['products'])) {
            $productsInCart = $_SESSION['products'];
        }

        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id] ++;
        } else {
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;


        return self::countItems();
    }


    public static function countItems(){
        if (isset($_SESSION['products'])) {
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return 0;
        }
    }



    public static function down($id){
        $products = self::getProducts();
        $products[$id]--;
        self::setCart($products);
        header("Location: /cart");
        return $products[$id];
    }


    public static function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }


    public static function getTotalPrice($products){
        $productsInCart = self::getProducts();

        $total = 0;
        if ($productsInCart) {

            foreach ($products as $item) {
                 $total += $item['price'] * $productsInCart[$item['id']];
            }
        }

        return $total;
    }


    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }

        return '';
    }


    public static function deleteProduct($id)
    {

        $productsInCart = self::getProducts();

        unset($productsInCart[$id]);

        $_SESSION['products'] = $productsInCart;

    }

    private static function setCart($products){
        $_SESSION['products'] = $products;
    }




}
