<?php


class Conexao{

    private static $instance;

    private function __construct(){
    }

    public static function  getInstance(){
        if(!isset(self::$instance)){
            self::$instance = new PDO('mysql:host;localhost;dbname=pw2_20191', 'desenv', '123456');
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}