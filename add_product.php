<?php

    include('./db/config.php');

    
        $pname = $_POST['pname'];
        $date_bought = date('Y-m-d', strtotime($_POST['date']));
        $description = $_POST['descp'];
        $city = $_POST['city'];
        $category = $_POST['cat'];
        $uid = $_POST['uid'];
        $img = $_FILES['fileToUpload'];
        
        $filename = $_FILES['fileToUpload']["name"];
        $tempname = $_FILES["fileToUpload"]["tmp_name"];  
        
          
        $folder = "image/".$filename;
        

        $sql = "INSERT INTO items(user_id, pname, date_bought, description, city, category, image) VALUES ('$uid',$pname', '$date_bought', '$description', '$city', '$category','$filename');";
                
        if($conn->query($sql))
            
        {
                      
        // Now let's move the uploaded image into the folder: image
            if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
            
            }else{
            $msg = "Failed to upload image";
            }
            echo "Insertion Successful";
        }
        else
        {
            echo "Something Went Wrong";
        }
    
?>