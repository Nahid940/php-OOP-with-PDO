
<?php
include ("../comment.php");
    if(isset($_POST['done']))
    {
        $Mycomment=new Comment();
        $name=$_POST['name'];
        $comment=$_POST['comment'];
        
        $Mycomment->setName($name);
        $Mycomment->setComment($comment);
        
        
        if($Mycomment->insertComment()){
            echo 1;
        }

    }

?>