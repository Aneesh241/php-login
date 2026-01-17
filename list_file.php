<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit;
}

$files = scandir("uploads");
?>

<!DOCTYPE html>
<html>
<body>

<h2>Uploaded Files</h2>

<ul>
<?php
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        echo "<li>$file 
        <a href='delete_file.php?name=$file'>Delete</a>
        </li>";
    }
}
?>
</ul>

<a href="index.php">Back</a>

</body>
</html>
