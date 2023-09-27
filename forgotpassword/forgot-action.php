<?php
session_start();

$mail=$_POST['mail'];
$_SESSION['semail']=$mail;

$con = mysqli_connect("localhost","root","","reg_db");
$query = "select * from user_info where email = '$mail'  ";
$res = mysqli_query($con,$query);
$result = mysqli_fetch_array($res);

if($result)
{
	$_SESSION["user_info"] = $_SESSION["semail"];
	header("location:http://localhost/miniproject-main/forgotpassword/change_form.php");
}
else
{
	
	echo"failed!!!";
	header("location:http://localhost/miniproject-main/forgotpassword/forgot.php");
	
}
?>