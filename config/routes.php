<?php
/**
 * Created by PhpStorm.
 * User: vlad
 * Date: 27/11/2018
 * Time: 21:05
 */

return array(
    'reviews/([0-9]+)'=>'reviews/item/$1',
    'category/([0-9]+)'=> 'products/category/$1',
    'products/([0-9]+)'=>'products/product/$1',



    'products'=>'products/list',
    'reviews' => 'reviews/list',
    'main' => 'index/main',
);