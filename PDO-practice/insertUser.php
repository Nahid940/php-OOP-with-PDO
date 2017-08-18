
<?php
include ("user.php");
    if(isset($_POST['submit'])){
      $name=$_POST['name'];
       $age=$_POST['age'];
      $address=$_POST['address'];
        
        $user=new user();
        
        $user->setName($name);
        $user->setAge($age);
        $user->setAddress($address);
        

        if($user->insertUser()){
            echo "Data inserted";
        }else{
            echo "no";
        }
        
     
  
        //$user->iterationInner();
        
//        $q=mysqli_connect("localhost","root","","userdata");
//        
//        $query="insert into user (name,age,address) values('$name','$age','$address')";
//        mysqli_query($q,$query);
    }

?>
