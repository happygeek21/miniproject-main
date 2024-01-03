<?php
include('connect.php');
if (isset($_POST["create"])) {
    
    $ticket = $_POST["ticket"];
    $total_amount =  $_POST["total_amount"];
    $payment_status =$_POST["payment_status"];
   
    
    $sqlInsert = "INSERT INTO bills(ticket , total_amount , payment_status) VALUES ('$ticket','$total_amount', '$payment_status')";
    if(mysqli_query($conn,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "bill Added Successfully!";
        header("Location:index.php");
    }else{
       
        die("Something went wrong");
    }
}
if (isset($_POST["edit"])) {
    $bill_id = mysqli_real_escape_string($conn, $_POST["bill_id"]);
    $ticket = $_POST["ticket"];
    $total_amount = $_POST["total_amount"];
    $payment_status =$_POST["payment_status"];
    
    $sqlUpdate = "UPDATE bills SET ticket = '$ticket', total_amount = '$total_amount', payment_status = '$payment_status' WHERE bill_id = '$bill_id'";

    if(mysqli_query($conn,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "bill Updated Successfully!";
        header("Location:index.php");
    }else{
        
        die( mysqli_error($conn));
    }
}
?>