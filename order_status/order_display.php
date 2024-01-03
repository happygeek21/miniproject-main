






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="order_display.css">
    
</head>
<body>

    <div class="" id="preloade"></div>

    <form action="" method="post">
        
    
        
    
        <div class="nav_links">
            <div class="logo">
                <a href="miniproject-main\registration\indexreg.php"><img src="logo2.png"  alt="#"></a>
                
            </div>
            
            <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
                <li><a id="button" href="http://localhost/miniproject-main/registration/indexreg.php">Sign Up</a></li>
                <li><a id="button" href="http://localhost/miniproject-main/login/logout.php">Log Out</a></li>
            
            </ul>
        </div>

        <div class="content">
            <h1>Track Your Order</h1>

            <div class="trackbody">
                <table border=1>
                <th>
                    <tr>
                        <td>Date of Request</td>
                        <td>Product</td>
                        <td>Model Number</td>
                        <td>Ticket Number</td>
                        <td>Status</td>
                        <td>Ticket Type</td>
                        
                    </tr>
                </th>
                <tbody>
                    <?php

                        include('conn.php');

                        $qry1="UPDATE db_fetch
                        SET action = CASE
                            WHEN status = '1' THEN 'Pending'
                            WHEN status = '2' THEN 'Accept'
                            WHEN status = '3' THEN 'Reject'
                            WHEN status = '4' THEN 'Order Received'
                            WHEN status = '5' THEN 'Out For Pickup'
                            WHEN status = '6' THEN 'In-Transit'
                            WHEN status = '7' THEN 'Arrived At Shop'
                            ELSE action -- If no condition is met, keep the existing value in column1
                        END";
                         $result1=mysqli_query($conn,$qry1);
                         if(!$result1)
                         {
                             die("Invalid query".$conn->connect_error());
                         }
 
                        
                        $query="SELECT * FROM db_fetch ";
                        $result=mysqli_query($conn,$query);
                        if(!$result)
                        {
                            die("Invalid query".$conn->connect_error());
                        }

        
                         


                    while($row= $result->fetch_assoc())
                    {
                        
                        


                    
                        echo "<tr>

                        <td>".$row["added_on"]."</td>
                        <td>".$row["brand"]."</td>
                        <td>".$row["model"]."</td>
                        <td>".$row["ticket"]."</td>
                        <td>".$row["action"]."</td>
                       
                        
                       

                    </tr>";
                    }
                    ?>
                
                </tbody> 
                    

                    






                    
                
                
                
                </table>
            </div>
        
        
        
        
        
        
        
        
        </div>

    </form>
    

    <footer>
        <div class="footer-content">
            <h3>The Phone Repair Shop</h3>
        
            <div class="para">
                <p>Welcome To Phone Repair Shop, We Provide Best Service Possible to Our Customers.</p>
            </div>
            <div class="footer-imgs">
                <ul>
                    <li><a href="home.php"><img class="insta" src="instagram.svg"  alt="#"></a></li>
                    <li><a href="home.php"><img class="fb" src="facebook.svg"  alt="#"></a></li>
                    <li><a href="home.php"><img class="xlogo" src="xwhite.png"  alt="#"></a></li>
            
                </ul> 
                
                
                
            </div>
            <div class="footer-imgs2">
                <div class="contact-phone">
                   
                    <p>+91 9567297230</p>
                </div>
                
            </div>
            <div class="copyright">
                <p>Copyright &copy; The Phone Repair Shop Designed By Hemanth & Arjun</p> 
            </div>
    
        </div>
    </footer>
    <script> var loader=document.getElementById("preloader");
        window.addEventListener("load",function(){
        loader.style.display="none";})</script>
    <script>
       
        $(window).scroll(function(){
            $(".content").css("opacity", 1- $(window).scrollTop() / 250);

        });
    </script>
</body>
</html>
