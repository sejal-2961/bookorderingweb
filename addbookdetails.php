<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add details</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="addbook.css">
</head>
<body>
    <div class="nav_bar">
    <header>
        <img src="image/logo.png" alt="logo" class="logo">
        <nav>
            <ul class="nav_links">
                <li><a href="index.php">Home</a></li>
                <li><a href="addbookdetails.php">Add Book Details</a></li>
                <li><a href="bookordering.php">Book Ordering</a></li>
                <!-- <li><a href="receiptgeneration.php">Receipt</a></li> -->
                <li><a href="bookinghistory.php">Book History</a></li>
            </ul>
        </nav>
    </header>
    </div>

    <div class="form">
        <main>
        <h1>Add Book Details </h1>
        <table>
        <form action="addbookdetails.php" method="POST">
            <tr>

            <td>
            <label for="title">Title:</label>
            <input type="text"  id="title" name="title" class="input_field"  required></td>
            </tr>
            <tr>
            <td><label for="author">Author:</label>
            <input type="text"  id="author"  name="author" class="input_field"  required></td></tr>
<tr>
            <td><label for="genre">Genre:</label>
            <input type="text"  id="genre"  name="genre" class="input_field"  required></td></tr>
            <tr>
            <td><label for="price">Price:</label>
            <input type="number"  id="price" name="price" class="input_field"  required></td></tr>

<tr>
            <td><input type="submit" value="Add Details" name="add_details" class="btn"></td></tr>
        </form>
        </table>
        </main>
    </div>


    

</body>
</html>


<?php

 if(isset($_POST['add_details'])){
        
        include 'dbconn.php';

        $title = $_POST['title'];
        $author = $_POST['author'];
        $genre = $_POST['genre'];
        $price = $_POST['price'];

        $sql = "INSERT INTO books(title,author,genre,price)
        VALUES('$title','$author','$genre','$price')";

        $result = mysqli_query($conn,$sql);
        
        if($result){
            echo 'details added Successfully';
        }else{
            echo 'Error in the query';
        }
    }
?>
