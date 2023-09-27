<?php
    session_start();
    $complaint=$_POST['complaint'];
    $description=$_POST['details'];
    $model=$_POST['model'];
    $email=$_POST['email'];
    $brand=$_POST['phones'];
    $tnum = rand(100,100000);
    
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="reg_db";
    
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error);
    }
    $qry="INSERT INTO db_fetch (brand,complaint,description,model,email,ticket)VALUES('$brand','$complaint','$description','$model','$email','$tnum')";
    $result=mysqli_query($conn,$qry);
    if(!$result)
    {
        echo("Failed To Send!!".mysqli_error($conn));
    }
    else
    {
        echo("Query Affected");
    }
    
    
    mysqli_close($conn);
    
?>