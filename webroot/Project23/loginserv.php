<?php
	require_once("config.php");
	$rows="";
    if(isset($_POST['email'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        $sql=mysqli_query($conn,"SELECT * FROM customer WHERE email='$email' AND password='$password'");
        $rows = mysqli_num_rows($sql);
    }

    // $query=mysqli_query($link,"SELECT * FROM customer WHERE email='$email' AND password='$password'");
    
     

    if($rows===1){
        header('Location: ./addpost.php');
        exit();
    }
    else{
        echo "The password is incorrect";
        exit();
    }
    mysqli_close($conn);

?>
