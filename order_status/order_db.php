<?php  
//Database connectivity  
 $con=mysqli_connect('localhost','root','','reg_db');  
 $sql=mysqli_query($con,"select * from my_view");  
 //Get Update id and status  
 if (isset($_GET['id']) && isset($_GET['status'])) {  
     
      $id=$_GET['id'];
      $status=$_GET['status'];  
      $action=$_GET['action'];
      echo"$status";
      
      $qry="UPDATE db_fetch SET status=$status where id=$id";
      mysqli_query($con,$qry);  
      header("location:http://localhost/miniproject-main/order_status/order_db.php");  
      die("FAILED!!!!");  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <title>How to update pending status on button click using JavaScript with PHP and MySql.</title>  
     <link rel="stylesheet" href="table2.css">
      
 </head>  
 <body>  
    
     <div class="container">  
      <table border="1">  
           <tr>  
                <th>Sl. No.</th>  
                <th>Ticket No.</th>  
                <th>E-Mail</th>  
                <th>Date Time</th>
                <th>Complaint</th>  
                <th>Status</th>  
                <th>Action</th>  
                <th>Bill Amount</th>  
           </tr>  
           <?php  
           $i=1;  
           if (mysqli_num_rows($sql)>0) {  
                 while ($row=mysqli_fetch_assoc($sql)) { ?>  
                 <tr>  
                      <td><?php echo $i++ ?></td>  
                      <td><?php echo $row['ticket'] ?></td> 
                      <td><?php echo $row['email'] ?></td> 
                      <td><?php echo $row['added_on'] ?></td>    
                      <td><?php echo $row['complaint'] ?></td>   
                         
                      
                     
                      <td>  
                           <?php  
                           if ($row['status']==1) {  
                                echo "Pending"; 
                               
                           }if ($row['status']==2) {  
                                echo "Accept";  
                                
                           }if ($row['status']==3) {  
                                echo "Reject";  
                           }if($row['status']==4){
                              echo "Order Received";
                           }if($row['status']==5){
                                   echo "Out For Pickup";
                           }if($row['status']==6){
                              echo "In-Transit";
                         }if($row['status']==7){
                              echo "Arrived At Shop";   
                         }
                           ?>  
                      </td>  
                      <td>  
                           <select onchange="status_update(this.options[this.selectedIndex].value,'<?php echo $row['id'] ?>')">  
                                <option value="">Update Status</option>  
                                <option value="1">Pending</option>  
                                <option value="2">Accept</option>  
                                <option value="3">Reject</option>  
                                <option value="4">Order Received</option>  
                                <option value="5">Out For Pickup</option>  
                                <option value="6">In-Transit</option>  
                                <option value="7">Arrived at Shop</option> 
                           </select>  
                      </td>  
                      <td><?php echo $row['total_amount'] ?></td>
                 </tr>       
           <?php      }  
            } ?>  
      </table>  
 </div>  
 <script type="text/javascript">  
      function status_update(value,id){  
           //alert(id);  
           let url = "http://localhost/miniproject-main/order_status/order_db.php";  
           window.location.href= url+"?id="+id+"&status="+value;  
      }  
 </script>  
 </body>  
 </html>  