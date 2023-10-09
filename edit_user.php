<?php

$user_id = $_GET['id'];
include 'dbconn.php';

$sql = "SELECT * FROM bookdetails WHERE id=".$user_id;
$result = mysqli_query($conn, $sql);

$final_result = mysqli_fetch_assoc($result);


if(isset($_POST['update'])){

  $update_title = $_POST['title'];
  $update_author = $_POST['author'];
  $update_genre = $_POST['genre'];
  $update_price = $_POST['price'];

  $update_sql = "UPDATE bookdetails
                SET title='$update_title',
                  author='$update_author',
                    genre='$update_genre',
                    price=$update_price
                  WHERE id=$user_id";

    $update_result = mysqli_query($conn, $update_sql);

    if($update_result){
      echo 'Data updated Successfully';
     header('location:bookordering.php');
    }else{
      echo 'Error in update';
    }
}
?>


<html>
    <head>
        <title>Edit User</title>

    </head>
    <body>
          <div>
          <form action="edit_user.php?id=<?php echo $user_id;?>" method="post">
                <label>Title:</label>
                <input type="text" name="title"  
                  value="<?php echo $final_result['title'];
                  ?>"/>
                <br/>
                <label>Author:</label>
                <input type="text" name="author" 
                value="<?php echo $final_result['author'];
                  ?>"/>
                  
                <br/>
                <label>genre:</label>
                <input type="text" name="genre" 
                value="<?php echo $final_result['genre'];
                  ?>"/>
                  
                <br/>
                <label>Price:</label>
                <input type="number" name="price" 
                value="<?php echo $final_result['price'];
                  ?>"/>
                  
                
                <br/>
                <input type="submit" name="update" Value="Update"/>
                <input type="reset" Value="Reset"/>
            </form>
          </div>
    </body>
  </html>