<?php
    $conn = mysqli_connect("localhost", "root", "", "database1");

    if(!$conn){
        echo "<h3>Not able to connect with Database</h3>";
    }

    $sql = "SELECT * FROM post";
    $query = mysqli_query($conn, $sql);

    if(isset($_POST["post"])){


    $title = $_POST["title"];
    $blogtext = $_POST["blogtext"];

        $sql = "INSERT INTO post(title, blogtext) VALUES ('$title', '$blogtext')";
        mysqli_query($conn, $sql);

        header("Location: blog.php?info=added");
        exit();
    }
?>