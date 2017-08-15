<?php
include ("../person.php");
    if(isset($_POST['done']))
    {
        $person=new Person();
        $name=$_POST['name'];
        $age=$_POST['age'];
        
        $person->setName($name);
        $person->setAge($age);
        
        if($person->insertPerson()){
            echo 1;
        }
    }
?>