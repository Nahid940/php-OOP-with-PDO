<?php
include ('user.php');
$user=new user();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <style>
        .form-control{
            border-color:darkgreen;
            
        }
    </style>
</head>
<body>
    
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h1>Data insert</h1>
      
    <form method="post" action="insertUser.php">
          <div class="form-group">
            <label for="name">Name :</label>
            <input type="text" class="form-control" id="name" name="name">
          </div>
          <div class="form-group">
            <label for="age">Age :</label>
            <input type="text" class="form-control" id="age" name="age">
          </div>
          
          <div class="form-group">
            <label for="address">Address :</label>
            <input type="text" class="form-control" id="address" name="address">
          </div>
          <button  type ="submit" class="btn btn-success" name="submit">Submit</button>
    </form>
    </div>
  </div>
  
  <div class="row">
      <div class="table-responsive">
          <table class="table">
              <tr>
                  <th>Sl </th>
                  <th>Name </th>
                  <th>Age </th>
                  <th>Address </th>
                  <th>Action</th>
              </tr>
              <?php 
              $i=0;
              foreach($user->SelectUser() as $key => $value){
                  $i++;
    
?>
         <tr>
             <td><?php echo $i?></td>
             <td><?php echo $value['name']?></td>
             <td><?php echo $value['age']?></td>
             <td><?php echo $value['address']?></td>
             <td>
                 <form action="">
                     <input type="submit" value="Edit" name="submit" class="btn btn-info"> |
                     <input type="submit" value="Update" name="submit" class="btn btn-danger"> 

                 </form>
             </td>
         </tr>
         <?php }?>
          </table>
      </div>
  </div>
 
</div>
</body>
</html>
