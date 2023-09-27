<?php

    $conn=mysqli_connect('localhost','root','','labexam');

    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error());
    }

    $sql="CREATE TABLE student(rollno int,name varchar(20),marks varchar(3),grade char)";

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