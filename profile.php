<?php
    session_start();
    $uid = $_SESSION['id'];
    include('db/config.php');
    $query="select * from users where user_id='$uid'";
    $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
    $row=mysqli_fetch_array($result);


    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <script type="text/javascript" src="bootstrap/js/jQuery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Profile</title>

    <script>
        $(document).ready(function(){
            $(button).click(function(){ 
                $(button).prop('disabled', true);
            });
        });
    </script>


    <!-- <script>
    let input = document.querySelector(".input");
    let button = document.querySelector(".button");

    button.disabled = true; //setting button state to disabled

    input.addEventListener("change", stateHandle);

    function stateHandle() {
        if (document.querySelector(".input").value === "") {
            button.disabled = true; //button remains disabled
        } else {
            button.disabled = false; //button is enabled
        }
    }
    </script> -->

</head>

<body>
    <div class="container">
        <center>
            <h1>PROFILE</h1>
        </center>
        <div>
            <a href="post.php" class="btn btn-primary">POST GIVEAWAY</a>
        </div>
        <div class="table">
            <tr>
                Name:
                <?php echo $row['name'];?>
            </tr>
            <br>
            <tr>
                Email:
                <?php echo $row['email'];?>
            </tr>
            <br>
            <tr>
                Contact:
                <?php echo $row['mobile'];?>
            </tr>
            <br>
            <tr>
                Address:
                <?php echo $row['address'];?>
            </tr>
            <br>
            <tr>
                City:
                <?php echo $row['city'];?>
            </tr>
            <br>
            <tr>
                State:
                <?php echo $row['state'];?>
            </tr>
            <br>
            <tr>
                Limit Remaining:
                <?php echo $row['monthly_limit'];?>
                <button>Extend Limit</button>
            </tr>
            <br>
            <tr>
                Score:
                <?php echo $row['score'];?>
            </tr>

        </div>

        
        <div>
            <center>
                <h1>Your Products and Requests</h1>
            </center>
            <?php 
            $_SESSION['status'] = "Accept";
        $sql = "select * from request where pid=(select pid from items where user_id=14); ";
        $resultquery=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        while($row=mysqli_fetch_array($resultquery))
        { ?>
            ProductId : <?php echo $row['pid']; ?>

            UserID: <?php echo $row['user_id']; ?>

            <form action="">
                <input type="submit" value=" <?php echo $_SESSION['status'] ?>" id="accept"><br>
            </form>
            <form action="decline_request.php">
                <input type="submit" value="Decline">
                <br>
                <?php
                $_SESSION['decline_id'] = $row['rid'];
                ?>
            </form>

            <?php
        }
    ?>


        </div>

    </div>

</body>

</html>