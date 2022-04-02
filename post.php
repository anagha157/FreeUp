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
    <br><br>
    <form action="add_product
        uid :<input type="text" value="19" name="uid"><br><br>
        pname:<input type="text" name="pname"><br><br>
        date:<input type="date" name="date"><br><br>
        description: <input type="text" name="descp"><br><br>
        city:<input type="text" name="city"><br><br>
        category: 
        <select name='cat'>
            <option value="1">Home Appliance</option>
            <option value="2">Books</option>
            <option value="3">Decor/Furniture</option>
            <option value="4">Clothes</option>
        </select><br><br>
        <input type="file" name="userImage" id="userImage"><br><br>
        <input type="submit" value="Upload Image" name="submit" value=""><br><br>
        
    </form>
</body>
</html>