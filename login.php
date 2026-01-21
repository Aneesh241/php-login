<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "php_login");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

if ($user && $password) {
    $_SESSION['username'] = $user['username'];
    header("Location: index.php");
} else {
    echo "Invalid login";
}
?>
