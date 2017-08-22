<?php
include ('DB.php');
SESSION_START();
class user{
    private $name;
    private $age;
    private $address;
    private $sessionName="";
    private $table="user";
    
    public function setName($name){
        return $this->name=$name;
    }
    
    public function setAge($age){
        return $this->age=$age;
    }
    
    public function setAddress($address){
        return $this->address=$address;
    }
    
    
    public function insertUser(){
        $sql="insert into user (name,age,address) values(:name,:age,:address)";
        $stmt=DB::myQuery($sql);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':age', $this->age);
        $stmt->bindValue(':address',$this->address);
        return $stmt->execute();
    }
    
    public function SelectUser(){
        $sql="Select * from user";
        //$stmt=prepare($sql);
         $stmt=DB::myQuery($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
 
    
    //Object iteration
//    public function iterationInner(){
//        foreach($this as $key =>$value){
//            echo "<pre>";
//            echo "$key=>$value";
//            echo "</pre>";
//        }
//        
//    }
    
}
?>