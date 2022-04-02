<?php
    include('db/config.php');
    
        
        
        /*if(isset($_POST['submit']))
        {
        $fp = fopen($_FILES['fileToUpload']['tmp_name'], 'r');
        $filename = $_FILES['fileToUpload']['name'];
        $content = fread($fp, filesize($_FILES['fileToUpload']['tmp_name']));
// Insert into blob
      
        echo 'DONE';
        }*/

        
                
        
        if (count($_FILES) > 0) {
            if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
        
            $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
            $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
            
            $pname = $_POST['pname'];
            $date_bought = date('Y-m-d', strtotime($_POST['date']));
            $description = $_POST['descp'];
            $city = $_POST['city'];
            $category = $_POST['cat'];
            $uid = $_SESSION['id'];
        
            $sql = "INSERT INTO items(user_id, pname, date_bought, description, city, category,image)VALUES('$uid','$pname','$date_bought','$description','$city','$category','{$imgData}');";
            $current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
            if (isset($current_id)) {
                header("Location: profile.php");
            }
        }
    }
    
?>