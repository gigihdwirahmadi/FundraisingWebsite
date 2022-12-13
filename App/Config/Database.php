<?php
namespace miniframework2\App\Config;
class Database{
    protected static $conn;
    protected static $username = 'root';
    protected static $password = '';
    protected static $hostname = 'localhost';
    protected static $dbname = 'fundraisingprojek';
    public function __construct(){
        Database::setConn();
    }
    public static function setConn(){
        self::$conn = new \PDO(
            "mysql:host=".self::$hostname.";dbname=".
            self::$dbname,
            self::$username,
            self::$password
        );

        self::$conn -> setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getConn(){
        return self::$conn;
    }
}