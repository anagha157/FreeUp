<?php
session_start();
include('db/config.php');
// $user_id = $_SESSION['user_id'];
$sql = "select score,monthly_limit from users where user_id = 19 ";
$result=mysqli_query($conn,$sql) or die(mysqli_error($conn));
$row=mysqli_fetch_array($result);
$score = $row['score'] - 20;
$monthly_limit = $row['monthly_limit'] + 1;
$query="update users set score='$score', monthly_limit='$monthly_limit'where user_id=19";
$resultquery=mysqli_query($conn,$query) or die(mysqli_error($conn));
header('Location:profile.php');

?>


