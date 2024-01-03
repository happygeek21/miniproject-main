<?php
session_start();

$email = $_POST['email'];                                   //filter_var($_REQUEST['uname'],FILTER_SANITIZE_STRING);	
$pwd = $_POST['passwd'];
$enc_pwd = md5($pwd);
$con = mysqli_connect("localhost","root","","reg_db");
$query = "select * from db_fetch where email = '$email'";
$res = mysqli_query($con,$query);
$result = mysqli_fetch_array($res);

if($result)
{
	$_SESSION["ticketno"] = $result["ticket"];
	
	
}


?>