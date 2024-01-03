<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Corrected the links to Bootstrap and jQuery -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="pay.css">
</head>
<body>
    <form action="actionpay.php" method="post">
        <div class="container p-0">
            <div class="card px-4">
                <p class="h8 py-3">Payment Details</p>
                <div class="row gx-3">
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Person Name</p>
                            <input class="form-control mb-3" type="text" placeholder="Name" value="Barry Allen">
                        </div>
                    </div>
                    <div class="col-12">
                        <div a="d-flex flex-column">
                            <p class="text mb-1">Card Number</p>
                            <input class="form-control mb-3" type="text" placeholder="1234 5678 435678">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Expiry</p>
                            <input class="form-control mb-3" type="text" placeholder="MM/YYYY">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">CVV/CVC</p>
                            <input class="form-control mb-3 pt-2" type="password" placeholder="***">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-column">
                            <p class="text mb-1">Pay Here</p>
                            <?php
                            if (isset($_GET['ticket'])) {
                                $ticket = $_GET['ticket'];
                                echo "<input type='hidden' value='$ticket' name='ticket'>";
                            }
                            ?>
                            <input type="submit" value="Pay" class="btn btn-primary mb-3">
                            <?php
                            if (isset($_GET['ticket'])) {
                                $ticket = $_GET['ticket'];
                                include('conn.php');
                                echo "Pay Here";

                                $query = "SELECT *
                                          FROM my_view
                                          WHERE ticket='$ticket' AND email='$sv'";

                                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                                if (!$result) {
                                    die("Invalid query" . mysqli_error($conn));
                                }

                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                        <td>" . $row["total_amount"] . "</td>
                                    </tr>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
