<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
</head>
<body>
    <h1>STORE BOOK DETAILS</h1>
    <form action="book_action.php" method="post">
        <label for="">Book No</label>
        <input type="number" name="bno"><br>
        <label for="">Title</label>
        <input type="text" name="title"><br>
        <label for="">Author</label>
        <input type="text" name="author"><br>
        <label for="">Price</label>
        <input type="number" name="price" id=""><br>
        <label for="">Date Of Purchase</label>
        <input type="date" name="dop" id=""><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>