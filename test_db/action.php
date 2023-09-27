<?php  
 //Database connectivity  
 $con=mysqli_connect('localhost','root','','db_fetch');  
 //Fetch data from database  
 $sql=mysqli_query($con,"select * from db_fetch");  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <title>How to update pending status on button click using JavaScript with PHP and MySql.</title>  
 
 </head>  
 <body>  
 <div class="container">  
      <table border="1">  
           <tr>  
                <th>Sl. No.</th>  
                <th>Username</th>  
                <th>Date Time</th>  
                <th>Status</th>  
                <th>Action</th>  
           </tr>  
           <?php  
           $i=1;  
           if (mysqli_num_rows($sql)>0) {  
                 while ($row=mysqli_fetch_assoc($sql)) { ?>  
                 <tr>  
                      <td><?php echo $i++ ?></td>  
                      <td><?php echo $row['username'] ?></td>  
                      <td><?php echo $row['added_on'] ?></td>  
                      <td>  
                           <?php  
                           if ($row['status']==1) {  
                                echo "Pending";  
                           }if ($row['status']==2) {  
                                echo "Accept";  
                           }if ($row['status']==3) {  
                                echo "Reject";  
                           }  
                           ?>  
                      </td>  
                      <td>  
                           <select onchange="status_update(this.options[this.selectedIndex].value,'<?php echo $row['id'] ?>')">  
                                <option value="">Update Status</option>  
                                <option value="1">Pending</option>  
                                <option value="2">Accept</option>  
                                <option value="3">Reject</option>  
                           </select>  
                      </td>  
                 </tr>       
           <?php      }  
            } ?>  
      </table>  
 </div>  
 </body>  
 </html>  