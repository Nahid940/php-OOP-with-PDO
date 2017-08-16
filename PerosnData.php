<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
     
     
      <span id="done"></span>
    <form action="" method="post" id="insertPerson">
        Name: <input type="text" name="Personname" id="Personname">
        Age: <input type="text" name="age" id="age" max="100">
        <button name="submit"> Insert</button>
    </form>
      
      
       <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
       <script>
           
        $(document).ready(function(){
   
           $('#insertPerson').submit(function(e){
                e.preventDefault();
                var name = $('#Personname').val();
                var age = $('#age').val();
          

                if(name != '' && age !=''){
                    $.ajax({
                        type: "POST",
                        data:{
                            done:1,
                            name: name,
                            age: age
                        },
                        
                        url: "insertPerson.php",
                        
                        success: function(responseText){
                            if(responseText==1){
                                $("#done").html("Successfully inserted !");
                                // $(".warning-box").css("background-color","green");
                                
                            }else {
                                $("#result").html(responseText);
                            }
                        }

                    });
                }else{
                    $("#result").text("Fill up each field !!");
                    $(".warning-box").css("background-color","red");
                    setTimeout(function(){
                        $('#result').fadeOut();
//                            location.reload();
                        window.location = document.URL;
                    },1000);
                }

                return false;
            });
           
           
           
        });
    </script>
</body>
</html>