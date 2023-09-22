<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "dbconfig.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["username"] = $username;
        header("Location: dashboard.html"); // Redirect to dashboard page
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Result</title>
</head>
<body>
    <?php if (isset($error)) { echo $error; } ?>
</body>
</html>