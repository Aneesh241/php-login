<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit;
}

$fileName = $_FILES['file']['name'];
$tmpName = $_FILES['file']['tmp_name'];

move_uploaded_file($tmpName, "uploads/" . $fileName);

header("Location: index.php");
?>
