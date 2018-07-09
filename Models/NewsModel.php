<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 009 09.07.18
 * Time: 16:56
 */
class NewsModel
{
    public static function getByID(int $id = 227)
    {
        return DB::getById($id);
    }
}