<?php
include ('DB.php');
    class Comment{
        
        private $name;
        private $comment;
        private $table ="comment";
        
        //setter method
        public function setName($name){
            $this->name=$name;
        }
        
        //setter method
        public function setComment($comment){
            $this->comment=$comment;
        }
        
        // database table name
       
        
        //insert function
         public function insertComment(){
             $sql="insert into $this->table (name,comment) values(:name,:comment)";
             //access static property of a class eith the class name + (::)sign+  propery DB class+ :: static method myQueryPrepare
             $stmt=DB::myQueryPrepare($sql);
             $stmt->bindParam(':name',$this->name);
             $stmt->bindParam(':comment',$this->comment);
             return $stmt->execute();
         }
    }

?>