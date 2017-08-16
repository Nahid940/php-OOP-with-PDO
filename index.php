<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .warning-box{
            height: 20px;
            width:200px;
            color: #fff
        }
    </style>
</head>
<body>
  <div class="warning-box">
   <span id="result"></span>
  </div>
  
   <span id="done"></span>
 
    <form action="" method="post" id="insertData">
        Name: <input type="text" name="name" id="name">
        Comment: <input type="text" name="comment" id="comment">
       
        <button name="submit"> Insert</button>
    </form>

    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<!--    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
    <script>
       $(document).ready(function(){
            $('#insertData').submit(function(e){
                e.preventDefault();
                var name = $('#name').val();
                var comment = $('#comment').val();

                if(name != '' && comment !=''){
                    $.ajax({
                        type: "POST",
                        data:{
                            done:1,
                            name: name,
                            comment: comment,
                        },
//                        url: "insertFile/commentInsert.php",
                        url: "commentInsert.php",

                        success: function(responseText){
                            if(responseText==1){
                                $("#done").html("Successfully inserted !");
                                 $("#done").css("background-color","green");
                                
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

