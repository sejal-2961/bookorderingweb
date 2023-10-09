<?php 
// error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_store";


$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die  ('failed to connect'.mysqli_connect_error());
}
// else{
//     echo "successfully connected";
// }

?>