<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include 'dbconn.php';

    $query = 'SELECT * FROM books WHERE id='.$_GET['id'];

    foreach($conn->query($query) as $result){
        echo $result['title'] . " ";
        echo $result['author'] . " ";
        echo $result['genre'] . " ";
        echo $result['price'] . " ";
        echo $result['PurchasedOn'] . " ";
    }


    ?>
</body>
</html>