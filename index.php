<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Welcome, <?php echo $_SESSION['username']; ?></h2>

<form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit">Upload</button>
</form>

<br>
<a href="list_file.php">View Uploaded Files</a><br>
<a href="logout.php">Logout</a>

</body>
</html>
