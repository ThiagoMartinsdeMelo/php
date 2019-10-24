<?php

class Conn 
{

    public static $host = 'localhost';
    public static $user = 'root';
    public static $pass = '';
    public static $dnname = 'celk';
    private static $connect = null;

    private static function Conectar()
    {
        try {
            if (self::$connect == null) {
                self::$connect = new PDO('mysql:host='.self::$host.';dbname='.self::$dnname, self::$user, self::$pass);
            }
        } catch (Exception $e) {
            echo 'Mensagem: '.$e->getMessage();
            die;
        }
        return self::$connect;
    }

    public function getConn()
    {
        return self::Conectar();
    }

}