<?php
require("db_connect.php");
// Start a session to access user data
session_start();

// Check if the user is logged in
if (!isset($_SESSION["email"])) {
    header("Location: login.php"); // Redirect to the login page if not logged in
    exit();
}

// Fetch all user data from the database

$email = $_SESSION["email"];

$sql = "SELECT city, religious FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$userCity = $row["city"];
$userReligious = $row["religious"];

// Fetch users who match the same city and religious affiliation
$sql = "SELECT * FROM users WHERE city = '$userCity' AND religious = '$userReligious' AND email != '$email'";

$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    <p><a href="logout.php">Logout</a></p> <!-- Add a logout link -->

    <h2>User Data</h2>
    <table border="1">
        <tr>
            <th>Email</th>
            <th>Gender</th>
            <th>Birth Date</th>
            <th>City</th>
            <th>Religious</th>
            <!-- Add more table headers for other user data columns -->
        </tr>
        <?php
        // Display user data in a table
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "<td>" . $row["birthdate"] . "</td>";
            echo "<td>" . $row["city"] . "</td>";
            echo "<td>" . $row["religious"] . "</td>";
            // Add more table cells for other user data columns
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
