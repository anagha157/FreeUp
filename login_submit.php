<?php
    
    require './db/config.php';

    

        $email = $_POST['email'];
        $password = md5($_POST['pswd']);

        $email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
        
        if(!preg_match($email_regex , $email)){
        $error = "<div class='alert text-danger bg-danger'>Incorrect email</div>";
        header("location:login_submit.php?m2=".$error);
        }
    
       
    
        $q1 = "SELECT * from users where email = '$email' and password = '$password'";
        $result = $conn -> query($q1);
        $row = $result -> fetch_assoc();
        $name = $row['name'];
        $num_of_rows = mysqli_num_rows($result);
        
        
        if($num_of_rows == 1)
        {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;
            header("location:index.php");

            
        }
        else{
            $error = "<div class='alert text-danger bg-danger'></div>";
            header("location:login_submit.php?m2=".$error);
        }
    


    
?>