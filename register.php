<!DOCTYPE html>
<html>
<head>
    <title>User Registration Form</title>
</head>
<body>
    <h1>User Registration Form</h1>
    <form action="insert.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="birthdate">Birth Date:</label>
        <input type="date" id="birthdate" name="birthdate" required><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br><br>

        <label for="religious">Religious Affiliation:</label>
        <select id="religious" name="religious">
            <option value="hindu">Hindu</option>
            <option value="christian">Christian</option>
            <option value="muslim">Muslim</option>
            <option value="jewish">Jewish</option>
            <option value="buddhist">Buddhist</option>
            <option value="other">Other</option>
        </select><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female" required>
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="other" required>
        <label for="other">Other</label><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
