<?php
    session_start();

    $pid = $_SESSION['pid'];
    $buyer_id = $_SESSION['buyer_id'];  

    $sql = "INSERT into request(pid, buyer_id, status) values($pid, $buyer_id, 1)";
?>