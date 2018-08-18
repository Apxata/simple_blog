<?php

    class DB {

    private static $connect;

    public static function get_connect() {
        if(!isset(static::$connect)){
            static::$connect =  new PDO(DB_HOST_AND_NAME, DB_USER, DB_PASS);
            //  static::$connect =  new PDO('mysql:host=localhost;dbname=blog', DB_USER, DB_PASS);
        }
        return static::$connect;
    }

    // public static function fetch_all($sql) {
    //     $sth = static::$connect->query($sql);
    //     While ($row = $res->fetch()) {
    //         $rows[] = $row;
    //     }
    //     $res->free();
    //     return $row;
    // }
}