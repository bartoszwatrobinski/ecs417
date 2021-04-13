
<?php
$mysqli = new mysqli("localhost","my_user","my_password","my_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>

<!DOCTYPE html>


    <head>
        <meta charset="utf-8">
        <title>My Portfolio - Bartosz Watrobinski</title>
        <link rel="stylesheet" href="reset.css" type="text/css"/>
        <link rel="stylesheet" href="project1_s2.css" type="text/css"/>
        <script src="main.js"></script>
    </head>
    <body>
        <header>
            <hgroup>
                <h1>Bartosz Watrobinski</h1>
                <h2>My Portfolio Website</h2>
            </hgroup>   
            <nav id="navigation" role = "navigation">
                <ul>
                    <li><a href="Portfolio4.php#s1">About Me</a></li>
                    <li><a href="Portfolio4.php#s2">Education and Qualifications</a></li>
                    <li><a href="Portfolio4.php#s4">Experience</a></li>
                    <li><a href="Portfolio4.php#s3">Skills and Achievements</a></li>
                    <li><a href="Portfolio4.php#s5">Projects</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <input class="button" type="submit" id="login" value="Login">
                </ul>
            </nav>
            </header> 
            <article id=aboutme1>
                <section id="s1">
                    <div  class="boxed" >
                        <h3>About me</h3>
                        <p id="about">My name is Bartosz Watrobinski, I study Computer Science at Queen Mary University of London. I’m interested in AI and how companies use machine learning in marketing. In my free time I play the piano, watch movies and play with my dog. I really like travelling and learning about different cultures. My ambition is to master programming skills and become a professional.</p>
                    </div>
                    <figure>
                        <img src=imagebw2.jpg alt="Bartosz Watrobinski" title="Bartosz Watrobinski" width="300">
                        <figcaption><i>Bartosz Watrobinski</i></figcaption>
                    </figure>
                </section>
            </article>
            <aside>
                <p>You are not logged in</p>
            </aside>
            <section id="s2">
                <h4>Education and Qualifications</h4> <br>
                <p>Queen Mary University of London, UK</p>
                <p>Computer Science</p>
            </section>
            <section id="s3">
                <h4>Skills</h4> <br>
                <p>Java</p>
                <p>HTML</p>
                <p>CSS</p>
                <p>PHP</p>
                <p>JIRA</p>
                <p>SoapUI</p>
            </section>
            <section id="s4"> 
                <h4>Experience</h4> <br>
                <p>Data analysis experience aquired during the internship at insurance company.</p>
                <p>Programming practice at numerous school contests.</p>
            </section>
            <section id="s5">
                <h4>Projects</h4> <br>
                <p>Program that simulates investor buying and selling shares created in Java</p>
                <p>Adventure game created in Java</p> <br>
            </section>
            <footer>
                <p><a href="https://www.youtube.com/">YouTube</a> | <a href="https://www.facebook.com/">Facebook</a> | <a href="https://www.instagram.com/">Instagram</a></p>
                <p><i>Copyright</i> &copy; 2021 <i>Bartosz Watrobinski</i></p>
            </footer>
    </body>
</html>    