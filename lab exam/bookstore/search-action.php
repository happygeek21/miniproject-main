<?php


$title=$_POST['search'];

$conn=mysqli_connect('localhost','root','','library');

if(!$conn)
{
    echo("Connection failed!!".$conn->connect_error());

}

else
{

    $qry="SELECT * FROM bookstore where title = '$title'";
    $result=mysqli_query($conn,$qry);

    if(!$result)
    {
        echo("Query Failed!!".mysqli_error($conn));
    }

    else
    {
        echo'<table border=1 cellpadding=4 cellspacing=4>

        <tr>
            <th>bno</th>
            <th>title</th>
            <th>author</th>
            <th>price</th>
            <th>dop</th>

        </tr>';

        while($row=mysqli_fetch_array($result))
        {
            echo'<tr>';
                echo '<td>'.$row["bno"].'</td>';
                echo '<td>'.$row["title"].'</td>';
                echo '<td>'.$row["author"].'</td>';
                echo '<td>'.$row["price"].'</td>';
                echo '<td>'.$row["dop"].'</td>';
            echo '</tr>';
        }
    }


}






?>