<?php
include 'dbconfig.php';

$username = $_POST['username'];
$password = $_POST['password'];

$checkQuery = mysqli_query($connect, "SELECT * FROM userdb WHERE username = '$username'");

if (mysqli_num_rows($checkQuery) > 0) {
    echo "Username already exists";
    exit;
}

$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO userdb (username, password) VALUES (?, ?)";
$stmt = mysqli_prepare($connect, $sql);
mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);
$query = mysqli_stmt_execute($stmt);

if ($query) {
    header("location:../login.php?pesan=registered");
    exit;
} else {
    header("location:../login.php?pesan=error");
    exit;
}
?>