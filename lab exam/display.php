<?php

    $conn=mysqli_connect('localhost','root','','labexam');

    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error());
    }

    $sql="SELECT * from student";

    $res=mysqli_query($conn,$sql);

    if(!$res)
    {
        echo("Query Failed".mysqli_error($conn));
    }

    else
    {
        echo'<table border=1>
    
        <tr>
            <th>rollno</th>
            <th>name</th>
            <th>marks</th>
            <th>grade</th>
            
        </tr>
        ';
        
    
        while($row=mysqli_fetch_array($res))
        {
            echo '<tr>';
                echo '<td>'.$row["rollno"].'</td>';
                echo '<td>'.$row["name"].'</td>';
                echo '<td>'.$row["marks"].'</td>';
                echo '<td>'.$row["grade"].'</td>';
                
            
            
            
            echo '</tr>';
        }
        echo'</table>';
    }


?>