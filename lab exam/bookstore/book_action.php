<?php


$bno=$_POST['bno'];
$title=$_POST['title'];
$author=$_POST['author'];
$price=$_POST['price'];
$dop=$_POST['dop'];

$conn=mysqli_connect('localhost','root','','library');

if(!$conn)
{
    echo("Connection failed!!".$conn->connect_error());

}

else
{

    $qry="INSERT INTO bookstore(bno,title,author,price,dop) VALUES('$bno','$title','$author','$price','$dop')";
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