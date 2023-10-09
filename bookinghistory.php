<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add details</title>
    <link rel="stylesheet" href="homestyle.css">
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

    <div>
            <?php
                include 'dbconn.php';

                $query = "SELECT * FROM books WHERE ordered=True";
                $user_result = mysqli_query($conn,$query);
                
                ?>
                <table border="1" cellpadding="0" cellspacing="0">
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>AUTHOR</th>
                        <th>GENRE</th>
                        <th>PRICE</th>
                        <th>Receipt</th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($user_result) > 0) {
                        
                        $str = '';
                        $id = 1;
                        while($row = mysqli_fetch_assoc($user_result)) {
                            $str .="<tr>
                                        <td>".$id."</td>
                                        <td>".$row['title']."</td>
                                        <td>".$row['author']."</td>
                                        <td>".$row['genre']."</td>
                                        <td>".$row['price']."</td>
                                        <td><a href='receipt.php?id=".$row['id']."'  name='order' style='color: black;'>View</a></td>
                                    </tr>";
                            $id++;
                        }
                        echo $str;
                    } else {
                        echo "0 results";
                    }
            ?>
                </table>
                

        </div>

</body>
</html>