<?php


$name=$_POST['name'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$faname=$_POST['faname'];
$phone=$_POST['phone'];

$conn=mysqli_connect('localhost','root','','student');

if(!$conn)
{
    echo("Connection failed!!".$conn->connect_error());

}

else
{

    $qry="INSERT INTO student_record(name,dob,address,f_name,phone) VALUES('$name','$dob','$address','$faname',$phone)";
    $result=mysqli_query($conn,$qry);

    if(!$result)
    {
        echo("Query Failed!!".mysqli_error($conn));
    }

    else
    {
        echo("Query Affected - Record Inserted Successfully!");
    }


}






?>