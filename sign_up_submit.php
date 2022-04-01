<?php

    include('db/config.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = md5($_POST['pwd']);
    $cpwd = md5($_POST['cpwd']);
    $mobile = $_POST['pno'];
    $addr = $_POST['addr'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    
    $email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
    $contact_regex = "/^[789][0-9]{9}$/";
    
    
    $select_query = "SELECT * from users WHERE email = '$email'";
    $select_query_result = mysqli_query($conn , $select_query) or die(mysqli_error($conn));
    $select_rows = mysqli_num_rows($select_query_result);
    if($select_rows!=0){
        $error = "<div class='alert text-danger bg-danger'>Email Already Exists</div>";
        header('location:demo_sign_up.html?m1='.$error);
    }else if(!preg_match($email_regex, $email)){
        $error = "<div class='alert text-danger bg-danger'>Incorrect Email Id</div>";
        header('location:demo_sign_up.html?m1='.$error);
    }else if(!preg_match($contact_regex , $mobile )){
        $error = "<div class='alert text-danger bg-danger'>Incorrect Contact Number</div>";
        header('location:demo_sign_up.html?m2='.$error);
    }else if($pwd != $cpwd){
        $error = "<div class='alert text-danger bg-danger'>Incorrect password re-entered: Enter same password in both the feilds</div>";
        header('location:demo_sign_up.html?m3='.$error);
    }
    
    else{
        $sql = "INSERT INTO users (name, email, password, mobile, address, city, state, monthly_limit, score) VALUES ('$name', '$email', '$pwd', '$mobile', '$addr', '$city', '$state', 4, 10)";
        $inser_query_result = mysqli_query($conn , $sql) or die(mysqli_error($conn));
        $user_id = mysqli_insert_id($conn);
        $_SESSION['id'] = $user_id;
        $_SESSION['email'] = $email;
        header('location:index.php');
        
    }


?>