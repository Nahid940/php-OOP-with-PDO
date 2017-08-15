<?php
include("config.php");
   class DB{
        private static $pdo;
        
       // PDO set up
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
       
       
       // query prepare method
       public static function myQueryPrepare($sql){
           return self::connection()->prepare($sql);
       }
    }
?>