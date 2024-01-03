<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>ticket Details</title>
    <style>
        .book-details{
            background-color:#f5f5f5;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>Ticket Details</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="book-details p-5 my-4">
            <?php
            include("connect.php");
            $ticket = $_GET['ticket'];
            if ($ticket) {
                $sql = "SELECT * FROM db_fetch WHERE ticket='$ticket'";
                $result = mysqli_query($conn, $sql)or die( mysqli_error($conn));;
                while ($row = mysqli_fetch_array($result)) {
                 ?>
                 <h3>Email:</h3>
                 <p><?php echo $row["email"]; ?></p>
                 <h3>Date:</h3>
                 <p><?php echo $row["added_on"]; ?></p>
                 <h3>Brand:</h3>
                 <p><?php echo $row["brand"]; ?></p>
                 <h3>Model:</h3>
                 <p><?php echo $row["model"]; ?></p>
                 <h3>Ticket:</h3>
                 <p><?php echo $row["ticket"]; ?></p>
                 <h3>Complaint:</h3>
                 <p><?php echo $row["complaint"]; ?></p>
                 <h3>Action:</h3>
                 <p><?php echo $row["action"]; ?></p>
                
                 <?php
                }
            }
            else{
                echo "<h3>No tickets found</h3>";
            }
            ?>
            
        </div>
    </div>
</body>
</html>