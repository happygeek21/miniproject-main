<?php

    $conn=mysqli_connect('localhost','root','','labexam');

    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error());
    }

    $sql="UPDATE student SET grade='F' where marks>70";

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