<?php
if (isset($_GET['ticket'])) {
include("connect.php");
$ticket = $_GET['ticket'];
$sql = "DELETE FROM db_fetch WHERE ticket='$ticket'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "Ticket Deleted Successfully!";
    header("Location:index.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Book does not exist";
}
?>