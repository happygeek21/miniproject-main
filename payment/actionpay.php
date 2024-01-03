<?php

                    include('conn.php');

                   

                    $ticket = $_POST['ticket'];
                   
                    

                     $qry="UPDATE bills SET payment_status='Paid' where ticket=$ticket ";
                     
                    $result=mysqli_query($conn,$qry);
                    if(!$result)
                    {
                        die("Invalid query".mysqli_error($conn));
                    }
                    else{
                        header("location:http://localhost/miniproject-main/folder/bills.php");  
                    }
    
                     


                
            
           
?>