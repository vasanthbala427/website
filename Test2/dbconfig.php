<?php
$host = "localhost"; // Your database host
$username = "root@localhost"; // Your database username
$password = ""; // Your database password
$database = "test"; // Your database name

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>