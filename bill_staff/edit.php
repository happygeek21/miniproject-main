<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit Book</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Bill</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['bill_id'])) {
                include("connect.php");
                $bill_id = $_GET['bill_id'];
                $sql = "SELECT * FROM bills WHERE bill_id='$bill_id'";
                $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));;
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="bill_id" placeholder="bill_id:" value="<?php echo $row["bill_id"]; ?>"disabled>
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="user_id" placeholder="user_id:" value="<?php echo $row["ticket"]; ?>"disabled>
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="total_amount" placeholder="total_amount:" value="<?php echo $row["total_amount"]; ?>"
            </div>
           
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="payment_status" placeholder="payment_status:" value="<?php echo $row["payment_status"]; ?>"disabled>
            </div>
            
            <input type="hidden" value="<?php echo $bill_id; ?>" name="bill_id">

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