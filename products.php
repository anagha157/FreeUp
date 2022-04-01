<?php
    

    
    if(isset($_SESSION['cid']))
    {

        $sql = "Select * from items where category = '$_SESSION['cid']'  ";

        $result = $conn -> query($sql);


        echo '                        
        <table border="0" width="70%" style="padding:20%;">
            <tr border="2"> 
                <th> Image </th>
                <th> Pid </th>
                <th> Pname </th>
                <th> Date_Bought </th>
                <th> Description </th>
                <th> City </th>
                <th> Category </th>
            </tr>';
    while($row = $result -> fetch_assoc())
    {
        
        echo "
            <tr> 
                <td> ".$row['image']." </td>
                <td>".$row['pid']." </td>
                <td>".$row['pname']." </td>
                <td>".$row['date_bought']." </td>
                <td>".$row['description']." </td>
                <td>".$row['city']." </td>
                <td>".$row['description']." </td>
            </tr>
        ";  
    }
    echo "</table>";
    }

?>