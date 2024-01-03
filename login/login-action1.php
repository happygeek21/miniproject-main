<?php
session_start();

$email = $_POST['email'];                                   //filter_var($_REQUEST['uname'],FILTER_SANITIZE_STRING);	
$pwd = $_POST['passwd'];
$enc_pwd = md5($pwd);
$con = mysqli_connect("localhost","root","","reg_db");
$query = "select * from user_info where email = '$email' AND passwd = '$enc_pwd'";
$res = mysqli_query($con,$query);
$result = mysqli_fetch_array($res);

	
if(isset($_SESSION['email']))
	if($result)
	{
		if($email=="admin@gmail.com")
		{
			header("location:http://localhost/miniproject-main/homepage/admin-home.php");
		}
		elseif($email=="staff@gmail.com")
		{
			header("location:http://localhost/miniproject-main/homepage/staff-home.php");
		}
		else
		{
			header("location:http://localhost/miniproject-main/folder/user-homepage.php");
		}
		
	}
	else
	{
		header("location:login.php");
		
	}
else
{
	if($email==$result["email"] && $pwd==$enc_pwd["passwd"])
	{
		$_SESSION['email']=$result["email"];
	}
	else
	{
		echo"<script>alert('username or password is inccorect!')</script>";
	}
}
?>