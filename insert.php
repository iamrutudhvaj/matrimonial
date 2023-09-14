<?php
require("db_connect.php");
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];
    $birthdate = $_POST["birthdate"];
    $city = $_POST["city"];
    $religious = $_POST["religious"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO users (email, password, birthdate, city, religious, gender)
    VALUES ('$email', '$password', '$birthdate', '$city', '$religious', '$gender')";

// Execute the SQL query
if (mysqli_query($conn, $sql)) {
echo "Record inserted successfully!";
header("Location: login.php");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}
?>
