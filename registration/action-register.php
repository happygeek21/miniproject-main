<?php
    session_start();
        
    //database connection

    $dbhost="localhost";
    $username="root";
    $password="";
    $dbname="reg_db";
    //create connection

    $conn = mysqli_connect($dbhost,$username,$password,$dbname);
    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error);
    }
    else
    {
        echo"Connection Success!";
    }
    //inserting to table
    
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $mail=$_POST['mail'];
    $_SESSION['semail']=$mail;
    $ph=$_POST['phone'];
    $pass=$_POST['passwd'];
    $enc_pass=MD5($pass);
    
    $query = "INSERT INTO user_info (firstname, lastname, email, phone, passwd) VALUES ('$fname', '$lname', '$mail', '$ph', '$enc_pass')";
    $result=mysqli_query($conn,$query);
    if(!$result)
    {
        echo("Failed To Sent!<br>".mysqli_error($conn));
    }
    else
    {
        echo("Query Affected");
    }   

    mysqli_close($conn);
    
?>
