<?php
session_start();
$sql = "Select score from users where user_id = 14";
$result = $conn -> query($sql);
$row = $result-> fetch_assoc();
$row['score'] = $row['score'] - 20;
$row['monthly_limit'] = $row['monthly_limit'] + 1;

?>


