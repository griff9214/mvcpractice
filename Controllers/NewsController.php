<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 007 07.07.18
 * Time: 12:22
 */

require_once ROOT."/Models/NewsModel.php";

class NewsController
{
    public function __construct()
    {
        echo "News controller init<br>";
    }

    public function actionViewAll()
    {
        echo "i'm showing all news";
        return true;
    }

    public function actionViewCat($category)
    {
        echo "i'm showing all News in category {$category}";
        return true;
    }

    public function actionViewItem($id = 1)
    {
        echo "i'll show item with id={$id}";
        print_r (NewsModel::getByID(227));
    }

    public function actionViewItemInCat ($category, $id)
    {
        echo "i'll show item with id={$id} in category = {$category}";
        return true;
    }
}