<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 16/12/2018
 * Time: 01:25
 */

class AdminProductController extends AdminBase
{

    public function actionIndex(){

        self::checkAdmin();
        $productsList = Products::getProductsList();

        require_once(ROOT . '/views/admin_product/index.php');
        return true;
    }


    public function actionDelete($id){

        self::checkAdmin();

        if (isset($_POST['submit'])) {
            Products::deleteProductById($id);
            header("Location: /admin/product");
        }

        require_once(ROOT . '/views/admin_product/delete.php');
        return true;
    }



    public function actionCreate(){

        self::checkAdmin();
        $categoriesList = Category::getCategoriesListAdmin();

        if (isset($_POST['submit'])) {

            $options['name'] = $_POST['name'];
            $options['price'] = $_POST['price'];
            $options['count'] = $_POST['count'];
            $options['category_id'] = $_POST['category_id'];
            $options['available'] = $_POST['available'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['products_status'] = $_POST['products_status'];
            $options['preview'] = $_POST['preview'];
            $options['description'] = $_POST['description'];

            $errors = false;

            if (!isset($options['name']) || empty($options['name'])) {
                $errors[] = 'Заполните поля';
            }

            if ($errors == false) {
               $id = Products::createProduct($options);
                if ($id) {
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                    }
                };

                header("Location: /admin/product");
            }
        }

        require_once(ROOT . '/views/admin_product/create.php');
        return true;
    }





    public function actionUpdate($id){
        self::checkAdmin();

        $categoriesList = Category::getCategoriesListAdmin();

        $product = Products::getProductItemById($id);

        if (isset($_POST['submit'])) {

            $options['name'] = $_POST['name'];
            $options['price'] = $_POST['price'];
            $options['count'] = $_POST['count'];
            $options['category_id'] = $_POST['category_id'];
            $options['available'] = $_POST['available'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['products_status'] = $_POST['products_status'];
            $options['preview'] = $_POST['preview'];
            $options['description'] = $_POST['description'];

            if (Products::updateProductById($id, $options)) {


                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {

                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                }
            }

            header("Location: /admin/product");
        }


        require_once(ROOT . '/views/admin_product/update.php');
        return true;
    }


}