<?php
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "root"; // Replace with your MySQL username
$password =""; // Replace with your MySQL password
$database = "matrimonial"; // Replace with the name of your MySQL database


    // Create a PDO connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    echo "Connected successfully!";

?>