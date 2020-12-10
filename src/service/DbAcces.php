<?php

class DbAcces
{
    
    private $handle;
    private static $instance = null;

    public function __construct()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbName = "MoviesLand";

        try {

            $this->handle = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $password,
        array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 

        } catch (PDOException $e) {

            die('Could not Connect : ' . $e->getMessage());
        }
    }

    public static function getInstance() 
    {

        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getHandle()
    {
        return $this->handle;
    }
}