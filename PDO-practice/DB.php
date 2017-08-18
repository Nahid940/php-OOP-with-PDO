<?php
include ("config.php");

class DB{
    
    private static $pdo;
    
    public static function connection(){
        if(!isset(self::$pdo)){
            try{
                self::$pdo=new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
                
            }catch(PDOException $exp){
                echo $exp->getMessage();
            }
        }
        return self::$pdo;
    }
    
    public static function myQuery($sql){
        return self::connection()->prepare($sql);
    }   
}

?>