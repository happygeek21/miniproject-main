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
            <h1>Add New Ticket</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            
            
            <div class="form-elemnt my-4">
                <select name="email" id="" class="form-control">
                <option value="" readonly>Select User email:</option> 
                    <?php 
                        include('connect.php');
                         $sqlSelect = "SELECT * FROM user_info";
                         $result = mysqli_query($conn,$sqlSelect);
                        while($data = mysqli_fetch_array($result)){
                     ?>
                    <option value="<?php echo $data['email']; ?>"><?php echo $data['email']; ?></option>
                       <?php }?>
                </select>
            </div>
            
            <div class="form-elemnt my-4">
                <select name="status" id="" class="form-control">
                    <option value="" aria-readonly="">Select ticket status:</option>
                    <option value="1">Pending</option>
                    <option value="2">Accept</option>
                    <option value="3">Reject</option>
                   
                </select>
            </div>
            <div class="form-elemnt my-4">
                <select name="brand" id="" class="form-control">
                    <option value="" aria-readonly="">Select Brand:</option>
                    <option value="Apple">Apple</option>
                    <option value="Samsung">Samsung</option>
                    <option value="Xiaomi">Xiaomi</option>
                    <option value="Oneplus ">Oneplus</option>
                </select>
            </div>
            <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="model" placeholder="Enter Model No">
            </div>
            <div class="form-elemnt my-4">
                <select name="complaint" id="" class="form-control">
                    <option value="" aria-readonly="">Select Complaint:</option>

                    <option value="Dead Device">Dead Dmplaintevice</option>
                    <option value="Speaker">Speaker Dead</option>
                    <option value="Microphone Dead">Microphone Dead</option>
                    <option value="Display Complaint">Display Complaint</option>
                </select>
            </div>
            <div class="form-elemnt my-4">
                <input type="textarea" class="form-control" name="description" placeholder="description:">
            </div>
            <div class="form-element my-4">
                <input type="submit" name="create" value="Add Bill" class="btn btn-primary">
            </div>
        </form>
        
        
    </div>
</body>
</html>