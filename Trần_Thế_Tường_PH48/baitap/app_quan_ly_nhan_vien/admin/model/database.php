<?php
    class Database{
        private static $dm = 'mysql:host=localhost;dbname=quanlynhanvien_db';
        private static $username='root';
        private static $password = '';
        private static $option = array(
                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                 PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
              );
        private static $db;
        public static function getDB(){
            if(!isset(self::$db)){
                try {
                    self::$db = new PDO (
                                self::$dm,
                                self::$username,
                                self::$password,
                                self::$option  
                    );
                } catch (PDOException $e) {
                    $error_message = $e->getMessage();
                    echo $error_message;
                    exit();
                }
            }
            return self::$db;
        }
    }
?>