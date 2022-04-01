<?php
 require './db/config.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post_script.php" method="post" enctype="multipart/form-data">
        uid :<input type="text" value="14" name="uid">
        pname:<input type="text" name="pname">
        date:<input type="date" name="date">
        description: <input type="text" name="descp">
        city:<input type="text" name="city">
        category: 
        <select name='cat'>
            <option value="1">Home Appliance</option>
            <option value="2">Books</option>
            <option value="3">Decor/Furniture</option>
            <option value="4">Clothes</option>
        </select>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
        
    </form>
</body>
</html>



