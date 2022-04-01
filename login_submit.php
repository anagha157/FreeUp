<?php
    session_start();
    include('db/config.php');
   
    
    if(isset($_POST['email']) && isset($_POST['pw']))
    {

        $email = $_POST['email'];
        $password = md5($_POST['pw']);

        
       
    
        $q1 = "SELECT * from users where email = '$email' and password = '$password'";
        $result = $conn -> query($q1);
        $row = $result -> fetch_assoc();
        $name = $row['name'];
        $num_of_rows = mysqli_num_rows($result);
        
        
        if($num_of_rows == 1)
        {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;

            
        }
        else{
            echo "Enter Correct Credentials";
        }
    }


    
?>