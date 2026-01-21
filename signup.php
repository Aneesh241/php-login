<?php
$conn = mysqli_connect("localhost", "root", "", "php_login");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, password, role)
        VALUES ('$username', '$password', 'user')";

mysqli_query($conn, $sql);

header("Location: login.html");
?>
