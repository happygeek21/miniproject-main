<?php
    
    $conn=mysqli_connect('localhost','root','');

    if(!$conn)
    {
        die("Connection Failed".$conn->connect_error());   
    }    
        
    $sql="CREATE DATABASE labexam";
    $res=mysqli_query($conn,$sql);

    if(!$res)
    {
        echo("Query Failed!!".mysqli_error($conn));
    }

    else
    {
        echo("Query Affected!!");
    }


    








?>