<?php

class dbgen
{
    const HOST="localhost";
    const NAME="lesson";
    const USER="root";
    const PASS="";
    private $con;
    private static $instance;

    private function __construct()
    {
        try{
            $this->con=new PDO("mysql:host=".self::HOST.";dbname=".self::NAME,self::USER,self::PASS);
            $this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (Exception $e){
            echo "custom error is => ".$e->getMessage();
        }
    }

    public static function instance()
    {
        if(!self::$instance){
            self::$instance=new dbgen();
        }
        return self::$instance;
    }

    public function connection()
    {
        return $this->con;
    }
}