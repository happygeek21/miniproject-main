<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Book List</title>
    <style>
        table  td, table th{
        vertical-align:middle;
        text-align:right;
        padding:20px!important;
        }
    </style>
</head>
<body>
    <div class="container my-4">
        <header class="d-flex justify-content-between my-4">
            <h1>bill List</h1>
            <div>
                <a href="create.php" class="btn btn-primary">Add New bill</a>
            </div>
        </header>
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["create"];
            ?>
        </div>
        <?php
        unset($_SESSION["create"]);
        }
        ?>
         <?php
        if (isset($_SESSION["update"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["update"];
            ?>
        </div>
        <?php
        unset($_SESSION["update"]);
        }
        ?>
        <?php
        if (isset($_SESSION["delete"])) {
        ?>
        <div class="alert alert-success">
            <?php 
            echo $_SESSION["delete"];
            ?>
        </div>
        <?php
        unset($_SESSION["delete"]);
        }
        ?>
        
        <table class="table table-bordered">
        <thead>
            <tr>
                <th>bill_id</th>
                <th>Ticket</th>
                <th>total_amount</th>
                <th>payment_status</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
        include('connect.php');
        $sqlSelect = "SELECT * FROM bills";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $data['bill_id']; ?></td>
                <td><?php echo $data['ticket']; ?></td>
                <td><?php echo $data['total_amount']; ?></td>
                <td><?php echo $data['payment_status']; ?></td>
                <td><?php echo $data['created_at']; ?></td>
                <td><?php echo $data['updated_at']; ?></td>
                
                <td>
                    <a href="view.php?bill_id=<?php echo $data['bill_id']; ?>" class="btn btn-info">Read More</a>
                    <a href="edit.php?bill_id=<?php echo $data['bill_id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="delete.php?bill_id=<?php echo $data['bill_id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
        </table>
    </div>
</body>
</html>