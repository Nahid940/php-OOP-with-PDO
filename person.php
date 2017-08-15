<?php
include('DB.php');
class Person{
    private $name;
    private $age;
    private $table="person";

public function setName($name){
    $this->name=$name;
}
    
public function setAge($age){
    $this->age=$age;
}

     public function insertPerson(){
             $sql="insert into $this->table (name,age) values(:name,:age)";
             
             //access static property of a class eith the class name + (::)sign+  propery DB class+ :: static method myQueryPrepare
             $stmt=DB::myQueryPrepare($sql);
             $stmt->bindParam(':name',$this->name);
             $stmt->bindParam(':age',$this->age);
             
             return $stmt->execute();
         }


}
?>