<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 12/12/2018
 * Time: 02:54
 */
class UserController
{

    public function actionRegister(){
        $name = false;
        $email = false;
        $password = false;
        $result = false;


        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];


            $errors = false;


            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            if (User::checkEmailExists($email)) {
                $errors[] = 'Такой email уже используется';
            }

            if ($errors == false) {
                $result = User::register($name, $email, $password);
                $userId = User::checkUserData($email, $password);
                User::auth($userId);
                header("Location: /account/");
            }

        }

        require_once(ROOT . '/views/account/register.php');
        return true;
    }


    public function actionLogin(){
        $email = false;
        $password = false;
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $errors = false;
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            $userId = User::checkUserData($email, $password);

            if ($userId == false) {

                $errors[] = 'Неправильные данные для входа на сайт';
            } else {

                User::auth($userId);

                header("Location: /account/");
            }
        }

        require_once(ROOT . '/views/account/login.php');
        return true;
    }










    public function actionLogout(){
        session_start();
        unset($_SESSION["user"]);
        $_SESSION=array();
        header("Location: /");
    }

}
