<?php
include('connect.php');
if (isset($_POST["create"])) {
    
    $user_id = $_POST["user_id"];
    $total_amount =  $_POST["total_amount"];
    $payment_status =$_POST["payment_status"];
   
    
    $sqlInsert = "INSERT INTO db_fetch(email , status , brand, ticket,complaint,description,action) VALUES ('$user_id','$total_amount', '$payment_status')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "bill Added Successfully!";
        header("Location:index.php");
    }else{
       
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
  
    $email = $_POST["email"];
    $status = $_POST["status"];
    $brand =$_POST["brand"];
    $ticket=$_POST["ticket"];
    $complaint=$_POST["complaint"];
    $description=$_POST["description"];
    $sqlUpdate = "UPDATE db_fetch SET email= '$email', status = '$status', brand='$brand',ticket='$ticket',complaint='$complaint',description='$description' WHERE ticket = '$ticket'";

    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "bill Updated Successfully!";
        header("Location:index.php");
    }else{
        
        die( mysqli_error($conn));
    }
}
?>