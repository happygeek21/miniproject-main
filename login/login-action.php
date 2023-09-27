<?php
session_start();

$email = $_POST['email'];                                   //filter_var($_REQUEST['uname'],FILTER_SANITIZE_STRING);	
$pwd = $_POST['passwd'];
$enc_pwd = md5($pwd);
$con = mysqli_connect("localhost","root","","reg_db");
$query = "select * from user_info where email = '$email' AND passwd = '$enc_pwd'";
$res = mysqli_query($con,$query);
$result = mysqli_fetch_array($res);

if($result)
{
	$_SESSION["email_info"] = $result["email"];
	$_SESSION["firstname"] = $result["firstname"];
	if($email=="admin@gmail.com")
	{
		header("location:http://localhost/miniproject-main/order_status/order_db.php");
	}
	else
	{
		header("location:http://localhost/miniproject-main/homepage/user-home.php");
	}
	
}
else
{
	header("location:login.php");
	
}

?>