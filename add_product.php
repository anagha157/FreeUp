<?php
    session_start();
    include('config.php');

    if(isset($_SESSION['email']))
    {
        $pname = $_GET['pname'];
        $date_bought = $_GET['date'];
        $description = $_GET['description'];
        $city = $_GET['city'];
        $category = $_GET['category'];
        $img = $_GET['image'];

        $sql = "INSERT into items(pname, date_bought, description, city, category, image) values('$pname', '$date_bought', '$description', '$city', '$category', '$img');";
        
        if($conn->query($sql))
        {
            echo "Insertion Successful";
        }
        else
        {
            echo "Something Went Wrong";
        }
    }


    else{
        echo "Kindly Login to Continue.";
    }
?>