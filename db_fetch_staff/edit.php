<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Ticket</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Ticket</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['ticket'])) {
                include("connect.php");
                $ticket = $_GET['ticket'];
                $sql = "SELECT * FROM db_fetch WHERE ticket='$ticket'";
                $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));;
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="email" placeholder="Enter Email" value="<?php echo $row["email"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="status" placeholder="Change Status" value="<?php echo $row["status"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="brand" placeholder="Brand" value="<?php echo $row["brand"]; ?>">
            </div>
           
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="model" placeholder="Enter Model" value="<?php echo $row["model"]; ?>">
            </div>

            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="complaint" placeholder="Edit Complaint" value="<?php echo $row["complaint"]; ?>">
            </div>

            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="description" placeholder="Edit Description" value="<?php echo $row["description"]; ?>">
            </div>
            
            <input type="hidden" value="<?php echo $ticket; ?>" name="ticket">

            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit bills" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Bill Does Not Exist</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>