<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 16/12/2018
 * Time: 01:15
 */

class AdminController extends AdminBase
{
    /**
     * Action для стартовой страницы "Панель администратора"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Подключаем вид
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }

}