<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit;
}

$file = $_GET['name'];
unlink("uploads/" . $file);

header("Location: list_file.php");
?>
