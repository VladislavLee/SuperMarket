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
    'account' => 'cabinet/index',



    'reviews/([0-9]+)'=>'reviews/item/$1',
    'reviews' => 'reviews/list',




    'main' => 'products/list',
);