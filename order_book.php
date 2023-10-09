<?php

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    include 'dbconn.php';

    $query = "UPDATE books SET ordered = True WHERE id=".$_GET['id'];
    $updateTimeStamp = "UPDATE books SET PurchasedOn = CURRENT_TIMESTAMP WHERE id=".$_GET['id'];

    $result = $conn->query($query);

    if($result){
        $r = $conn->query($updateTimeStamp);
        echo "Here is your receipt";
    }else{
        echo "Something went wrong";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body>
    <h2>Confirm Order ?</h2>
    <form action="order_book.php?id=<?php echo $_GET['id'] ?>"_GET method="POST">
        <button type="submit">Order now !</button>
    </form>
</body>
</html>