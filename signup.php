<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $servername = "localhost";
    $serverUsername = "root";
    $userPassword = "";
    $database = "bookstore";

    // Create connection
    $conn = mysqli_connect($servername, $serverUsername, $userPassword, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $username = $_POST['name'];
    $email = $_POST["email"];
    $password = $_POST['password'];
    $password = $_POST['password'];
    
    

    $validationQuery = "SELECT * 
                FROM login_data
                WHERE 'name'='$user name' AND email='$email'";

    $r1 = mysqli_query($conn, $validationQuery);
    
    
    if(mysqli_num_rows($r1)  <= 0)
    {
        $validatename = "SELECT * FROM login_data WHERE name='$name'";
        $r2 = mysqli_query($conn, $validatename);
        if (mysqli_num_rows($r2) <= 0){
            // Creating a new user in the Table
            $query = "INSERT INTO login_data(name,email,password,password)
            VALUES('$name','$email','$password','$password')";

            $result = mysqli_query($conn,$query);
            
            if($result){
                echo 'Registration Successful';
                header("location:login.php");
            }else{
                echo 'Error in the query';
            }
        }else{
            echo "name ".$name." already exists";
        }
    }

    



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
                top-margin:600px;
                max-width: 450px;
                margin: 0 auto;
                background-color: rgba(255, 255, 255, 0.8);

                padding: 20px;
                border-radius: 5px;
                box-shadow: 0px 0px 10px #888888;
                margin-top:75px;
                padding-right:20px;
        }

            h2 {
                text-align: center;
            }

            label {
                font-weight: bold;
            }

            input[type="text"],
            input[type="email"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }

            input[type="submit"] {
                background-color: #007BFF;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 3px;
                cursor: pointer;
            }
            form button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
                }

            input[type="submit"]:hover {
                background-color: #0056b3;
            }
            #first{
            margin-right:40px;
            padding-right:0px;
            }
            #second{
                margin-right:40px;
                padding-right:0px;
    }
            #third{
                        margin-right:40px;
                        padding-right:0px;
            }
            #fourth{
                        margin-right:40px;
                        padding-right:0px;
            }
            #fifth{
                        margin-right:40px;
                        padding-right:0px;
            }
        </style>
    </head>
    <body>
    <div class="container">
        
        <h2>Sing-Up Form</h2>
        <form action="#" method="post">
            <label for="name">Name:</label>
            <input  id="first" type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input id="second" type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input  id="third" type="password" id="password" name="password" required>

            <label for="confirm password">Confirm Password:</label>
            <input  id="fourth" type="password" id="password" name="password" required>

            <button type="submit">sign up</button>
            <p>Agree to terms and conditions 
            <a href='login.php'>login</a>
            </p>
        </form>
    </div>
</body>
</html>