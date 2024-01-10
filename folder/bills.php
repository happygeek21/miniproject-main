<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="order_display.css">
</head>
<body>
    <div class="" id="preloader"></div>
    <form action="conn.php" method="post">
        <div class="nav_links">
            <div class="logo">
                <a href="miniproject-main/registration/indexreg.php"><img src="logo2.png" alt="#"></a>
            </div>
            <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">About Us</a></li>
              
                <li><a id="button" href="http://localhost/miniproject-main/login/logout.php">Log Out</a></li>
            </ul>
        </div>

        <div class="content">
            <h1>Bill</h1>

            <div class="trackbody">
                <table border="1">
                    <thead>
                        <tr>
                            <th>Date of Request</th>
                            <th>Ticket Number</th>
                            <th>Payment Status</th>
                            <th>Total Amount</th>
                            <th>Pay</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('conn.php');
                        //echo "Your Email ID is $sv";
                        //echo "Welcome $user";

                        $query = "SELECT *
                                  FROM my_view
                                  WHERE status = 2 AND email = '$sv'";

                        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                        if (!$result) {
                            die("Invalid query" . mysqli_error($conn));
                        }

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row["added_on"] . "</td>
                                <td>" . $row["ticket"] . "</td>
                                <td>" . $row["payment_status"] . "</td>
                                <td>" . $row["total_amount"] . "</td>
                                <td>";

                            if ($row["payment_status"] == 'Unpaid') {
                                echo "<a href='http://localhost/miniproject-main/payment/pay.php?ticket=" . $row["ticket"] . "'>Pay Here</a>";
                            } elseif ($row["payment_status"] == 'Paid') {
                                echo "Payment Completed";
                            } else {
                                echo "Evaluation Pending";
                            }

                            echo "</td></tr>";
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
                    <li><a href="home.php"><img class="insta" src="instagram.svg" alt="#"></a></li>
                    <li><a href="home.php"><img class="fb" src="facebook.svg" alt="#"></a></li>
                    <li><a href="home.php"><img class="xlogo" src="xwhite.png" alt="#"></a></li>
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
    <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load", function () {
            loader.style.display = "none";
        });
    </script>
    <script>
        $(window).scroll(function () {
            $(".content").css("opacity", 1 - $(window).scrollTop() / 250);
        });
    </script>
</body>
</html>
