<?php
session_start();
include('db/config.php');

$rid = $_SESSION['decline_id'];
$query="Delete from request where rid = '$rid'";
if(mysqli_query($conn,$query))
{
    echo "Deletion done";
}

?>