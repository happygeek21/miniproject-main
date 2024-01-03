<?php
    session_start();
    $sv=$_SESSION["email_info"];
    $user=$_SESSION["firstname"];
   
    $conn=mysqli_connect('localhost','root','','reg_db');
    
    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error());
    }
    


?>