<?php

    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="phone_db";

    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error);

    }
    
    $brand=['phones'];
    $date=['date'];
    $complaint=['complaint'];
    $description=['details'];
    $qry="INSERT INTO repair_details (brand,date,complaint,description) VALUES ('$brand','$date','$complaint','$description')";
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