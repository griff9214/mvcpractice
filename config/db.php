<?php

//$db_login = "root";
//$db_pass = "";
//$dsn = 'mysql:host=localhost;dbname=WpBase';
//
//$db = new PDO($dsn, $db_login, $db_pass);
//
//$res = $db->query("SELECT * FROM `wp_posts` WHERE `post_type` = 'uslugi' AND `ID` = 227");
//
//print_r($res->fetch(PDO::FETCH_ASSOC));

class DB {
    private static $db;

    public function __construct()
    {
        $db_login = "root";
        $db_pass = "";
        $dsn = 'mysql:host=localhost;dbname=WpBase';
        self::$db = new PDO($dsn, $db_login, $db_pass);

    }

    public static function getById(int $id = 227){
//        $res = $this->db->query("SELECT * FROM `wp_posts` WHERE `post_type` = 'uslugi' AND `ID` = {$id}");
        $res = self::$db->prepare("SELECT * FROM `wp_posts` WHERE `ID` = {$id}");
        $res->execute();
        $res->setFetchMode(PDO::FETCH_ASSOC);
        return $res->fetch(PDO::FETCH_ASSOC);
    }
}
$DB = new DB();