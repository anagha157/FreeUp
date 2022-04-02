 <html>
    <head>
        <meta charset="UTF-8">
        <title> Sign-up</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jQuery.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
            body{
                
                 background-repeat: no-repeat;
                 background-size: cover; 
                   background:
                linear-gradient(rgba(0, 0, 0, 0.5),
                    rgba(0, 0, 0, 0.2)), url("imgs/giftbg.jpg");
            
                 
                  }
               
            .back{
                background-color: #ebebeb;
                float:right;
                 border-radius: 90px;
                 border: 5px solid transparent;
                 padding: 20px; 
                width: 600px;
                height: 850px;
                background-color: black;
                color: white;
               
               
            }
            .btn-danger:hover{
                opacity: 1;
                color: black;
            }
            
            img{
                height:100px;
                width:100px;
            
            }
            label{
                color: white;
            }     
             body::-webkit-scrollbar {display: none; }
        </style>
    </head>
    <body>
        <br>
        
            <div class="container"> 
               
                <div class="row">
                    <div class="back col-lg-6 col-lg-offset-3">
                        <h1 class="display-1" align="center">SIGN-UP<img src="imgs/logo.png"></h1>
                       <!-- <h1 class="display-2"align="center"></h1>-->
                        
                        
                        <form action="sign_up_submit.php" method="post">
                        <div class="form-group">
                            <label>Name : </label> <input type="text" class="form-control" name="name"  required="true">
                        </div>
                        <div class="form-group">
                            <label>Email: </label> <input type="text" class="form-control" name="email" required="true">
                            <?php
                                if(isset($_GET['m1'])){
                                    echo $_GET['m1'];
                                }
                            ?>
                        </div>
                            
                            
                        <div class="form-group">
                            <label>Contact : </label> <input type="text" class="form-control" name="pno" required="true">
                            <?php
                                if(isset($_GET['m2'])){
                                    echo $_GET['m2'];
                                }
                            ?>
                        </div>
                   
                            <div class="form-group">
                            <label>Address(Line1) : </label> <input type="text" class="form-control" name="addr" required="true">
                        </div>
                            <div class="form-group">
                            <label>State : </label> <input type="text" class="form-control" name="state" required="true">
                        </div>
                            <div class="form-group">
                            <label>City : </label> <input type="text" class="form-control" name="city" required="true">
                        </div>
                        <div class="form-group">
                            <label>Password : </label>
                            <input type="password" name="pswd" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password : </label>
                            <input type="password" name="cpswd" placeholder="Re-Enter password" class="form-control" required="true">
                           <?php
                                if(isset($_GET['m3'])){
                                    echo $_GET['m3'];
                                }
                            ?>
                          
                        </div>
                        <div class="form-group">
                            <center> <button type="submit" class="btn btn-primary"><b style="font-size: 20px;">Sign-up</b></button></center>
                        </div>   
                    </form>
                </div>
            </div>
        </div>
     
        <br>
    </body>
</html>




