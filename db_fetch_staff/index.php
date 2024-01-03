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
            <h1>Ticket List</h1>
            <div>
                <a href="create.php" class="btn btn-primary">Add New Ticket</a>
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
                <th>Id</th>
                <th>Email</th>
                <th>Added_on</th>
                <th>Status</th>
                <th>Brand</th>
                <th>model</th>
                <th>Ticket</th>
                <th>Complaint</th>
                <th>Description</th>
                <th>Action</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
        
        <?php
        include('connect.php');
        $sqlSelect = "SELECT * FROM db_fetch";
        $result = mysqli_query($conn,$sqlSelect);
        while($data = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['added_on']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td><?php echo $data['brand']; ?></td>
                <td><?php echo $data['model']; ?></td>
                <td><?php echo $data['ticket']; ?></td>
                <td><?php echo $data['complaint']; ?></td>
                <td><?php echo $data['description']; ?></td>
                <td><?php echo $data['action']; ?></td>

                
                <td>
                    <a href="view.php?ticket=<?php echo $data['ticket']; ?>" class="btn btn-info">Read More</a>
                   
                    
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