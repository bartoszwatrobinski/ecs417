<?php
    session_start();

?>


<?php


    include './addpostserv.php';

?>    


<!DOCTYPE html>
   
    <head>
        <meta charset="utf-8">
        <title>Add Post</title>
        <link rel="stylesheet" href="reset.css" type="text/css"/>
        <link rel="stylesheet" href="addpoststyle.css" type="text/css"/>
        
    </head>
    <body>
        <form id="myForm" method="POST">      
                <legend>Add Blog</legend>
                <input type="text" id="title" name="title" placeholder="Title" required> <br>
                <textarea type="text" id="blogtext" name="blogtext" placeholder="Enter your text here" required></textarea>
                <nav>
                    <input class="button" type="submit" id="post" value="Post" name="post">
                    <input class="button" type="submit" id="clear" value="Clear">
                </nav>
        </form>
    </body>
</html>
<script>
    function ResetValues() {
        document.getElementById("myForm").reset();
    }
</script>

// <script>
var subbutton = document.getElementById('post');
var inputTitle = document.getElementById('title');
var inputBlogtext = document.getElementById('blogtext');

subbutton.addEventListener('click',function(e){
    if(inputBlogtext.value.length > 0){
        
    } 
    else{
        e.preventDefault();
        document.getElementById("blogtext").style.background = "red";
        $error = "Please fill all the details";
    }

}, false);
subbutton.addEventListener('click',function(e){
    if(inputTitle.value.length > 0){
        
    } 
    else{
        e.preventDefault();
        document.getElementById("title").style.background = "red";
        $error = "Please fill all the details";
    }

}, false);
subbutton.addEventListener('click',function(e){
    if(inputBlogtext.value.length > 0 && inputTitle.value.length > 0){
        
    } 
    else{
        e.preventDefault();

    }

}, false);

</script>
<?php
session_destroy();
?>