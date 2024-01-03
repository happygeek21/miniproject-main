<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Add New Bill</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Add New Bill</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            
            
            <div class="form-elemnt my-4">
                <select name="ticket" id="" class="form-control">
                <option value="" readonly>Select Ticket:</option> 
                    <?php 
                        include('connect.php');
                         $sqlSelect = "SELECT * FROM db_fetch";
                         $result = mysqli_query($conn,$sqlSelect);
                        while($data = mysqli_fetch_array($result)){
                     ?>
                    <option value="<?php echo $data['ticket']; ?>"><?php echo $data['ticket']; ?></option>
                       <?php }?>
                </select>
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="total_amount" placeholder="Total Amount:">
            </div>
            <div class="form-elemnt my-4">
                <select name="payment_status" id="" class="form-control">
                    <option value="" aria-readonly="">Select payment status:</option>
                    <option value="Paid">Paid</option>
                    <option value="Unpaid">Unpaid</option>
                   
                </select>
            </div>
           
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Bill" class="btn btn-primary">
            </div>
        </form>
        
        
    </div>
</body>
</html>