<?php
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username == "admin" && $password == "admin") {
        header("Location: 6d.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Form Login</h2>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username"><br><br>

        <label>Password:</label>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Login">
    </form>
    <p style="color:red;">
        <?php echo htmlspecialchars($error); ?>
    </p>
</body>

</html>