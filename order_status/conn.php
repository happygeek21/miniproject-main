<?php

    $conn=mysqli_connect('localhost','root','','reg_db');
    
    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error());
    }
    


?>