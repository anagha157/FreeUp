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
                 background-image: url("imgs/giftbg.jpg");
                 background-repeat: no-repeat;
                 background-size: cover; 
                  }
            
            .back{
                background-color: #ebebeb;
            }
            .btn-danger:hover{
                opacity: 1;
                color: black;
            }

            
            body::-webkit-scrollbar {display: none; }
        </style>
    </head>
    <body>
        <br>
        
            <div class="container rightal"> 
               
                <div class="row">
                    <div class="back col-lg-6 col-lg-offset-3">
                        <h1 class="display-1" align="center">SIGN-UP</h1>
                        <form>
                        <div class="form-group">
                            <label>Name : </label> <input type="text" class="form-control" name="name"  required="true">
                        </div>
                        <div class="form-group">
                            <label>Email: </label> <input type="text" class="form-control" name="email" required="true">
                        </div>
                        <div class="form-group">
                            <label>Contact : </label> <input type="int" class="form-control" name="phno" required="true">
                        </div>
                   
                            <div class="form-group">
                            <label>Address(Line1) : </label> <input type="int" class="form-control" name="addr" required="true">
                        </div>
                            <div class="form-group">
                            <label>State : </label> <input type="int" class="form-control" name="state" required="true">
                        </div>
                            <div class="form-group">
                            <label>City : </label> <input type="int" class="form-control" name="city" required="true">
                        </div>
                        <div class="form-group">
                            <label>Password : </label>
                            <input type="password" name="pswd" class="form-control" required="true">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password : </label>
                            <input type="password" name="cpswd" placeholder="Re-Enter password" class="form-control" required="true">
                           
                          
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"><b style="font-size: 20px;">Sign-up</b></button>
                        </div>   
                    </form>
                </div>
            </div>
        </div>
     
        <br>
    </body>
</html>




