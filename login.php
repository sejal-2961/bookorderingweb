<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $servername = "localhost";
    $serverUsername = "root";
    $userPassword = "";
    $database = "bookstore";
    
    
    $conn = mysqli_connect($servername, $serverUsername, $userPassword, $database);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Validating the user

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM login_data WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)  >0)    
        {
            session_start();
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            


            header("location:login.php");
    }else{
        echo "<script>alert('Username or Password is invalid')</script>";
    }



    }

    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Login</title>
        
        
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        background-image: url('https://cdn.wallpapersafari.com/2/33/eLN2hs.jpg');
        background-size: cover;
        background-repeat:no-repeat;
        }
    .container {
        margin-top:400px;
        max-width: 400px;
        margin: 0 auto;
        background-color:rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px #888888;
        margin-top:75px;
        padding-right:20px;

    }
    #login{
        text-align:center;
        font-size:25px;
    }
    .styled-text {
        color: rgba(255, 255, 255, 0.8); /* Set the text color to white */
        font-size: 75px; /* Set the font size to your desired size */
        text-align: center; /* Center the text horizontally within the container */
    }

    form input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
        padding-right:15px;
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
    #first{
        margin-right:40px;
        padding-right:0px;
    }
    #second{
        margin-right:40px;
        padding-right:0px;
    }

    </style>

    </head>
    <div class styled-text>
    <h1 class=styled-text>Welcome to online book store</h2>
    </div>
    <body>
        <div class="container">
            <h2 id=login>Login</h2>
            <form action="index.php" method="POST">
                <input id="first" type="text" name="username" placeholder="Username" required>
                <input id="second" type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
                <p>Agree to terms and conditions 
                <a href='registrationn.php'>sign-up</a>
                </p>
            </form>
        </div>
    </body>
    </html>