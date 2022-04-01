<?php
     $host = "localhost";
    $user = "root";
    $pw = "";
    $db = "freeup";

    $conn = mysqli_connect($host, $user, $pw, $db);
    if(!$conn )
    {
        die("<script> alert (Connection Not Successful!); </script>");
    }
?>

