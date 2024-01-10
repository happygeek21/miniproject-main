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
            <h1>Edit User</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['email'])) {
                include("connect.php");
                $email=$_GET["email"];
                $sql = "SELECT * FROM user_info WHERE email='$email'";
                $result = mysqli_query($conn,$sql)or die( mysqli_error($conn));;
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname" value="<?php echo $row["firstname"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname" value="<?php echo $row["lastname"]; ?>">
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="email" placeholder="Enter E-Mail" value="<?php echo $row["email"]; ?>">
            </div>
           
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="<?php echo $row["phone"]; ?>">
            </div>
           
            
            

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