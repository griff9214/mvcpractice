<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 007 07.07.18
 * Time: 12:22
 */

class ProductsController
{
    public function __construct()
    {
        echo "Products controller init";
    }

    public function actionViewAll()
    {
        echo "i'm showing all Products";
        return true;
    }
    public function actionViewCat($category)
    {
        echo "i'm showing all Products in category {$category}";
        return true;
    }

    public function actionViewItem($id = 1)
    {
        echo "i'll show product with id={$id}";
        return true;
    }
}