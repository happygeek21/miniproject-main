<?php
include('connect.php');
if (isset($_POST["create"])) {
    
    $email = $_POST["email"];
    $firstname =  $_POST["firstname"];
    $lastname =$_POST["lastname"];
    $phone=$_POST["phone"];
   
    
    $sqlInsert = "INSERT INTO user_info(firstname,lastname,email,phone) VALUES ('$firstname','$lastname', '$email','$phone')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "User Added Successfully!";
        header("Location:index.php");
    }else{
       
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email =$_POST["email"];
    $phone=$_POST["phone"];
    
    $sqlUpdate = "UPDATE user_info SET email = '$email', firstname = '$firstname', lastname = '$lastname' WHERE email = '$email'";

    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "User Updated Successfully!";
        header("Location:index.php");
    }else{
        
        die( mysqli_error($conn));
    }
}
?>