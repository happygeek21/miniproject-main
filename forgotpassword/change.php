<?php
session_start();
$pass=$_POST['passwd'];
$cpass=$_POST['cpasswd'];
$enc_pass=md5($pass);


$con = mysqli_connect("localhost","root","","reg_db");

if(!$con)
{
    die("Conection Failed!".$con->connect_error());
}

else
{
   
        echo("Connection is success password matched!");
        $query = "UPDATE user_info SET passwd='$enc_pass' WHERE email='$_SESSION[semail]' ";
        $result = mysqli_query($con,$query);



        if(!$result)
        {
	        echo("Failed To Sent!<br>".mysqli_error($con));
        }
        else
        {
	
	        echo("Password Updated!");
	
	
        }
    }
    


?>