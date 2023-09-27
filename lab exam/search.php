<?php
    
    
    $rollno=$_POST['rollno'];
    $name=$_POST['name'];
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $conn=mysqli_connect('localhost','root','','labexam');

    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error());
    }

    $sql="SELECT * from student WHERE rollno=$rollno AND name='$name'";

    $res=mysqli_query($conn,$sql);

    if(!$res)
    {
        echo("Query Failed".mysqli_error($conn));

    }



    else
    {
        if ($res->num_rows > 0) {
            echo "Login successful. Record found!";
        echo'<table border=1>

        <tr>
            <th>rollno</th>
            <th>name</th>
            <th>marks</th>
            <th>grade</th>

        </tr>'
        ;


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
          // Record found, print success message

        }
        else {
            // Record not found, print error message
            echo "Login failed. Record not found.";
        }
    }


?>