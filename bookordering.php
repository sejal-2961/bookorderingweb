

<!-- //include 'dbconn.php';

// $query = "SELECT * FROM bookdetails";

// $result = $conn->query($query);



// if($result->field_count > 0){
//     foreach($result as $r){
//         print_r($r['title']);
//         print_r($r['author']);
//         print_r($r['genre']);
//         print_r($r['price']);
        
//     }
// }



// if(mysqli_affected_rows($result) > 0){

// } -->





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add to cart</title>
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
                <li><a href="receiptgeneration.php">Receipt</a></li>
                <li><a href="bookinghistory.php">Book History</a></li>
            </ul>
        </nav>
    </header>
    </div>


        

    <div class="btn2">
        <a href="receiptgeneration.php">Order Now</a>
    </div>
    </div>
    <div>
            <?php
                include 'dbconn.php';

                $Users_query = "SELECT * FROM bookdetails";
                $user_result = mysqli_query($conn,$Users_query);
                
                ?>
                <table border="1" cellpadding="0" cellspacing="0">
                    <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>AUTHOR</th>
                        <th>GENRE</th>
                        <th>PRICE</th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($user_result) > 0) {
                    
                        
                        $str = '';
                        while($row = mysqli_fetch_assoc($user_result)) {
                            $str .="<tr>
                                        <td>".$row['id']."</td>
                                        <td>".$row['title']."</td>
                                        <td>".$row['author']."</td>
                                        <td>".$row['genre']."</td>
                                        <td>".$row['price']."</td>
                                        <td><a href='edit_user.php?id=".$row['id']."'  class='btn2'>Edit</a></td>
                                        <td><a href='receiptgeneration.php?id=".$row['id']."'  name='order' class='btn2'>Order</a></td>
                                    </tr>";

                                    
                                        

                                        
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







