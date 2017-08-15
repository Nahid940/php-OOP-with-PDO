<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name="name">
        Comment: <input type="text" name="comment">
        <input type="submit" name="submit" value="Insert">
    </form>
</body>
</html>


<?php
include ("Comment.php");
    if(isset($_POST['submit']))
    {
        $Mycomment=new Comment();
        $name=$_POST['name'];
        $comment=$_POST['comment'];
        
        $Mycomment->setName($name);
        $Mycomment->setComment($comment);
        
        
        if($Mycomment->insertComment()){
            echo "Data inserted";
        }
        
    
    }

?>