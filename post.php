<?php
 require './db/config.php';
?><!DOCTYPE html>

    <html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jQuery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <br><br>
    <form action="add_product.php" method="post" enctype="multipart/form-data" style="margin-left: 100px">
        
        <label>product name:</label><input type="text" name="pname"><br><br>
        <label>date:</label><input type="date" name="date"><br><br>
        <label>description:</label> <input type="text" name="descp"><br><br>
        <label>city:</label><input type="text" name="city"><br><br>
        <lable>category:</lable> 
        <select name='cat'>
            <option value="1">Home Appliance</option>
            <option value="2">Books</option>
            <option value="3">Decor/Furniture</option>
            <option value="4">Clothes</option>
        </select><br><br>
        <label>Upload Files:</label><input type="file" name="userImage" id="userImage"><br><br>
        <input type="submit" value="Upload Image" name="submit" value=""><br><br>
        
    </form>
</body>
</html>