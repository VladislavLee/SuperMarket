<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 15/12/2018
 * Time: 10:18
 */

class CartController{

    public function actionAdd($id){

        Cart::addProduct($id);


        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }


    public function actionAddAjax($id){

        echo Cart::addProduct($id);
        return true;
    }


    public function actionDelete($id){

        Cart::deleteProduct($id);
        header("Location: /cart");
    }

    public function actionDown($id){
        $count = Cart::down($id);
        if($count>0) echo $count;
        else{
            Cart::deleteProduct($id);
            echo 'remove';
        }

        return true;
    }

    public function actionRemove($id){
        echo Cart::removeByID($id);
        return true;
    }





    public function actionIndex(){

        $categories = Category::getCategoriesList();

        $productsInCart = Cart::getProducts();

        if ($productsInCart) {

            $productsIds = array_keys($productsInCart);


            $products = Products::getProductsByIds($productsIds);


            $totalPrice = Cart::getTotalPrice($products);
        }


        require_once(ROOT . '/views/cart/cart.php');
        return true;
    }



    public function actionCheckout()
    {

        $productsInCart = Cart::getProducts();


        if ($productsInCart == false) {
            header("Location: /");
        }


        $categories = Category::getCategoriesList();


        $productsIds = array_keys($productsInCart);
        $products = Products::getProductsByIds($productsIds);
        $totalPrice = Cart::getTotalPrice($products);

        $totalQuantity = Cart::countItems();


        $userName = false;
        $userPhone = false;
        $userComment = false;


        $result = false;

        if (!User::isGuest()) {

            $userId = User::checkLogged();
            $user = User::getUserById($userId);
            $userName = $user['name'];
        } else {
            $userId = false;
            header("Location: /user/login");
        }


        if (isset($_POST['submit'])) {

            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

            $errors = false;


            if (!User::checkName($userName)) {
                $errors[] = 'Неправильное имя';
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = 'Неправильный телефон';
            }


            if ($errors == false) {

                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

                if ($result) {

                    $adminEmail = 'napsterlinc@gmail.com';
                    $message = '<a href="/admin/orders">Список заказов</a>';
                    $subject = 'Новый заказ!';
                    mail($adminEmail, $subject, $message);

                    Cart::clear();
                }
            }
        }


        require_once(ROOT . '/views/cart/checkout.php');
        return true;
    }



    public function actionClear(){
        Cart::Clear();
        header("Location: /cart");
    }







}
