<?php
    session_start();
    include('db/config.php');
    $rid = $_SESSION['rid'];
    // $query="select * from request where rid = 7";
    // $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
    // $row=mysqli_fetch_array($result);
    //$row['status'] = $row['status'] + 1;
    //echo $row['status'];    
    $sql="update request set status=1 where rid='$rid'";
    $resultsql=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    //$rowsql=mysqli_fetch_array($resultsql);
    // if($rowsql['status'] != 0)
    // {
        // header('Location : profile.php');
    // }
     
?>