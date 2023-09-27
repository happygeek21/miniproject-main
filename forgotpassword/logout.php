<?php    
     // always this has to be the first line
	session_unset();
    session_destroy();    

    header("location:http://localhost/miniproject-main/login/login.php");
?>