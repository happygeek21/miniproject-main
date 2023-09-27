<?php

    $conn=mysqli_connect('localhost','root','','labexam');

    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error());
    }

    $sql="DELETE FROM student where marks<40";

    $res=mysqli_query($conn,$sql);

    if(!$res)
    {
        echo("Query Failed".mysqli_error($conn));
    }

    else
    {
        echo("Query Affected!!");
    }


?>