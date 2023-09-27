<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $complaint=$_POST['complaint'];
    $description=$_POST['details'];
    $model=$_POST['model'];
    $email=$_POST['email'];
    echo "$email";
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="reg_db";
    // Create a database connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute an SQL query to insert the data
    $sql = "INSERT INTO db_fetch (brand,complaint,description,model,email)VALUES('$brand','$complaint','$description','$model','$email')";
    $stmt = $conn->prepare($sql);


    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
