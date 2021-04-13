<?php
    session_start();
?>    
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="reset.css" type="text/css"/>
        <link rel="stylesheet" href="loginstyle2.css" type="text/css"/>
         
    </head>
    <body>
        <form action="#" method="POST">
                <h1>Login</h1>
                <div id="Info1">
                    <div class = "form_input">
                        <input type="email" id="email" name="email" placeholder="Email"> <br>
                    </div>
                    <div class = "form_input">      
                        <input type="password" pattern=".{6,15}" id="password" name="password" placeholder="Password (between 6 and 15 characters)">
                    </div>
                    <input class="button" type="submit" id="login" value="Login">
                </div>
        </form>
        <?php
    include './loginserv.php';

?>
    </body>    
</html>    
