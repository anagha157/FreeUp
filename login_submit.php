<?php

    session_start();
    
    include('db/config.php');

        $email = $_POST['email'];
        $password = md5($_POST['pswd']);
        
        

        $email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
        
        if(!preg_match($email_regex , $email)){
        $error = "<div class='alert text-danger'>Incorrect email</div>";
        header("location:demo_login.php?m2=".$error);
        }
             
        $select_query = "SELECT * FROM users WHERE email ='$email' AND password = '$password' ";
        
        $result = mysqli_query($conn , $select_query) or die(mysqli_error($conn));
        $rows_fetched = mysqli_num_rows($result);
        
        if($rows_fetched!=0)
        {
        
            header("location:index.php");
        }
        else{
            $error = "<div class='alert text-danger'>Invalid Credentials</div>";
            header("location:demo_login.html?m1=".$error);
        }
    
            $_SESSION['email'] = $email


    
?>