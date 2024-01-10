<?php
session_start();

$mail=$_POST['mail'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$_SESSION['semail']=$mail;

$con = mysqli_connect("localhost","root","","reg_db");
$query = "SELECT * FROM user_info WHERE email = '$mail' AND phone = $phone AND dob = '$dob'";
$res = mysqli_query($con,$query);
$result = mysqli_fetch_array($res);

if($result)
{
	if(($_SESSION["user_info"] = $_SESSION["semail"]) && ($phone=$result["phone"]))
	{

	
	header("location:http://localhost/miniproject-main/forgotpassword/change_form.php");
	}
}
else
{
	
	
	echo '<script>alert("Please Check The Email/Password Entered!")</script>';
	echo'<script> window.location = forgot.php;</script>';
	
}
?>