<?php
if (isset($_GET['email'])) {
include("connect.php");
$email = $_GET['email'];
$sql = "DELETE FROM user_info WHERE email='$email'";
if(mysqli_query($conn,$sql)){
    session_start();
    $_SESSION["delete"] = "User Record Deleted Successfully!";
    header("Location:index.php");
}else{
    die("Something went wrong");
}
}else{
    echo "Book does not exist";
}
?>