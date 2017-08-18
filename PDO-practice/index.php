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
 
</div>
</body>
</html>
