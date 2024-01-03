<?php
if (isset($_GET['bill_id'])) {
include("connect.php");
$bill_id = $_GET['bill_id'];
$sql = "DELETE FROM bills WHERE bill_id='$bill_id'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Bill Record Deleted Successfully!";
    header("Location:index.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Book does not exist";
}
?>