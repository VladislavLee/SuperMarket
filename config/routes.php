<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 27/11/2018
 * Time: 21:05
 */

return array(
    'category/([0-9]+)'=> 'products/category/$1',
    'category/([0-9]+)/page-([0-9]+)'=> 'products/category/$1/$2',
    'products/([0-9]+)' =>'products/product/$1',
    'products'=>'products/list',


    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout'=> 'user/logout',
    'account/edit' => 'cabinet/edit',
    'account' => 'cabinet/index',




    'reviews/([0-9]+)'=>'reviews/item/$1',
    'reviews' => 'reviews/list',



    // Управление товарами:
    'admin/product/create' => 'adminProduct/create',
    'admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'admin/product' => 'adminProduct/index',
    // Управление категориями:
    'admin/category/create' => 'adminCategory/create',
    'admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'admin/category' => 'adminCategory/index',
    // Управление заказами:
    'admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'admin/order' => 'adminOrder/index',




    // Админпанель:
    'admin' => 'admin/index',



    'cart/delete/([0-9]+)' => 'cart/delete/$1',
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart/checkout' => 'cart/checkout',
    'cart/clear' => 'cart/clear',
    'cart'=> 'cart/index',



    'main' => 'index/main',
    ''=>'index/main'
);