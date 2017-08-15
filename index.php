<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <span id="done"></span>
   <span id="result"></span>
    <form action="" method="post" id="isertData">
        Name: <input type="text" name="name" id="name">
        Comment: <input type="text" name="comment" id="comment">
       
        <button name="submit"> Insert</button>
    </form>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<!--    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
    <script>
       $(document).ready(function(){
            $('#isertData').submit(function(e){
                e.preventDefault();
                var name = $('#name').val();
                var comment = $('#comment').val();

                if(name != '' || comment !=''){
                    $.ajax({
                        type: "POST",
                        data:{
                            done:1,
                            name: name,
                            comment: comment
                        },
                        url: "commentInsert.php",

                        success: function(responseText){
                            if(responseText==1){
                                $("#done").html("Successfully inserted !");
                            }else {
                                $("#result").html(responseText);

                            }
                        }

                    });
                }else{
                    $("#result").text("Fill up each field !!");
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

