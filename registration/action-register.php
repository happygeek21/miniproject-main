<?php
    session_start();
        
    //database connection

    $dbhost="localhost";
    $username="root";
    $password="";
    $dbname="reg_db";
    //create connection

    $conn = mysqli_connect($dbhost,$username,$password,$dbname);
    if(!$conn)
    {
        die("Connection Failed!".$conn->connect_error);
    }
    /*else
    {
        echo"Connection Success!";
    }*/
   
    //inserting to table
    
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $mail=$_POST['mail'];
    $dob=$_POST['dob'];
    $_SESSION['semail']=$mail;
    $ph=$_POST['phone'];
    $pass=$_POST['passwd'];
    $confirm_password=$_POST['cp'];
    $enc_pass=MD5($pass);
 


     //php validation

    if(empty($fname)){
        $name_error= "Please Enter First Name";
    }
    
    $query = "SELECT * FROM user_info WHERE email = '$mail'";
        $result=mysqli_query($conn,$query);
        if ($result->num_rows > 0) 
        {
            echo '<script>alert("Account Already Exists!")</script>';
            echo '<script>window.location= "indexreg.php"</script>';
        }
            else
        {

            if($pass==$confirm_password)
             {

                $query = "INSERT INTO user_info (firstname, lastname, email, phone, passwd,dob) VALUES ('$fname', '$lname', '$mail', '$ph', '$enc_pass','$dob')";
                $result=mysqli_query($conn,$query);
                if(!$result)
                {
                    echo("Failed To Sent!<br>".mysqli_error($conn));
                }
                else
                {
                        
                    
                    echo '<script>alert("Registration Sucessfull!")</script>';
                    echo'<script> window.location = http://localhost/miniproject-main/login/login.php;</script>';
                }   
            
                 mysqli_close($conn);
                }

       

            else
            {
                 echo '<script>alert("Password Does not match")</script>';
            }

  
    




        }
    
?>
