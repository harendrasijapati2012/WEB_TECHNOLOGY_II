<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Register Here</h2>
    <form action="process.php" method="POST">
        Email: <input type="email" name="email" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        Retype Password: <input type="password" name="retype_password" required><br><br>
        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>
