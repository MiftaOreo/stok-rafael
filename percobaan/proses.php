<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$database = "login_user"; 

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $_SESSION['username'] = $username;

    header("Location: dashboard.php");
} else {
    echo "<script>alert('Username atau password salah!'); window.location.href='login.php';</script>";
}

$conn->close();
?>
