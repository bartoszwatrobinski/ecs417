<?php


    include './addpostserv.php';
?>    


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Blog - Bartosz Watrobinski</title>
        <link rel="stylesheet" href="reset.css" type="text/css"/>
        <link rel="stylesheet" href="blog_s2.css" type="text/css"/>
        <script src="main.js"></script>
    </head>
    <body>
        <header>
            <h1>Blog</h1>
            <nav>
                <ul>
                    <li><a href="Portfolio5.php">Home</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="addpost.php">Add Post</a></li>
                </ul>
            </nav>
        </header>
        <article>
            <p>Recent posts:</p>
                <div>
                    <?php foreach($query as $q){?>
                        <hr style="height:5px;color:white";>
                        <div class="align-items-center">
                            <div name=singlePost style="width: 18rem; height: 150%; padding: 3%" >
                                <h5 style="font-size:160%;"><?php echo $q['title'];?></h5>
                                <p style="font-size:110%;"><?php echo $q['blogtext'];?></p>
                            </div>
                        </div>    
                        <hr style="height:5px;color:white";>
                <?php    }?>

                </div>

        </article>
        <footer>
            <p><a href="https://www.youtube.com/">YouTube</a> | <a href="https://www.facebook.com/">Facebook</a> | <a href="https://www.instagram.com/">Instagram</a></p>
            <p><i>Copyright</i> &copy; 2021 <i>Bartosz Watrobinski</i></p>
        </footer>
    </body>
</html>    