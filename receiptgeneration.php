<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER FORM</title>
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

    <div class="form">
        <main>
        <h1>USER DETAILS </h1>
        <table>
        <form action="receipt.php" method="POST">
            <tr>

            <td>
            <label for=name">Name:</label>
            <input type="text"  id=name" name=name" class="input_field"  required></td>
            </tr>
            <tr>
            <td><label for="email">Email:</label>
            <input type="email"  id="email"  name="email" class="input_field"  required></td></tr>
<tr>
            <td><label for="contact_number">Contact Number:</label>
            <input type="number"  id="contact_number"  name="contact_number" class="input_field"  required></td></tr>
            <tr>
            <td><label for="address">Address:</label>
            <textarea id="address"  name="address" cols="5" rows="5"  class="input_field"  required></textarea> 
        </td>
        </tr>

<tr>
            <td><input type="submit" value="GENERATE" name="generate" class="btn"></td></tr>
        </form>
        </table>
        </main>
    </div>

</body>
</html>