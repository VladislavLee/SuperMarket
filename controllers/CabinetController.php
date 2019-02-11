<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 13/12/2018
 * Time: 20:15
 */

class CabinetController
{

    public function actionIndex(){




        $userId = User::checkLogged();
        $orderList = Order::getOrdersListForUser($userId);

        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        $name = $user['name'];
        $password = $user['password'];


        $result = false;


        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $password = $_POST['password'];


            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }

            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if ($errors == false) {

                $result = User::edit($userId, $name, $password);
            }
        }




        require_once(ROOT . '/views/account/cabinet.php');
        return true;
    }



    public function actionOrderOfUser($id)
    {
        $order = Order::getOrderById($id);


        $productsQuantity = json_decode($order['products'], true);


        $productsIds = array_keys($productsQuantity);
        $products = Products::getProductsByIds($productsIds);
        require_once(ROOT . '/views/account/orderOfUser.php');
        return true;
    }




//    public function actionEdit(){
//        $userId = User::checkLogged();
//
//        $user = User::getUserById($userId);
//
//        $name = $user['name'];
//        $password = $user['password'];
//
//
//        $result = false;
//
//
//        if (isset($_POST['submit'])) {
//
//            $name = $_POST['name'];
//            $password = $_POST['password'];
//
//
//            $errors = false;
//
//            if (!User::checkName($name)) {
//                $errors[] = 'Имя не должно быть короче 2-х символов';
//            }
//
//            if (!User::checkPassword($password)) {
//                $errors[] = 'Пароль не должен быть короче 6-ти символов';
//            }
//
//            if ($errors == false) {
//
//                $result = User::edit($userId, $name, $password);
//            }
//        }
//
//
//        require_once(ROOT . '/views/account/edit.php');
//        return true;
//    }






}
