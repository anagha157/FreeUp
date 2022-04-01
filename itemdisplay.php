<html>
    <head>
       <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jQuery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            .thumbnail{
                 width: 250px;
                 height: 430px;
            }
            body{
                 background-color: white;

            }
            
        </style>
    </head>
    <body>
       
        <div class ="container">
            
            <div class="row">
                <?php 
            while(($row = mysqli_fetch_assoc($result))){?>
                <div class=" col-md-4">
                    <div class="thumbnail">
                           <?php echo '<img src="data:image/jpg;base64,'.base64_encode($row['poster']).'"/>';?>
                            <div class="caption">
                                <center> <a href="bookinfo.php?id=<?php echo $row['bookid'];?>" class="btn btn-success btn-lg " role="button">VIEW BOOK</a></center>
                            </div>
                    </div>
                </div>
  
             <?php }?>
            </div>
            
        </div>
    </body>
</html>
