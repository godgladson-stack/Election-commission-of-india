<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === 'admin' && $password === 'password123') {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="ta">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>