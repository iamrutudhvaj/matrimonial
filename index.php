<?php require("db_connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrimonial</title>
</head>
<body>
<h1>Button Click Events</h1>
    
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["login"])) {
            // Code to execute when Button 1 is clicked
            echo "Login Clicked!";
        } elseif (isset($_POST["register"])) {
            // Code to execute when Button 2 is clicked
            echo "Register Clicked!";
            header("Location: register.php");
        }
    }
    ?>
    
    <form method="post" action="">
        <input type="submit" name="login" value="Login">
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>