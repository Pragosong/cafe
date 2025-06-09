<?php
require 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];
$query_sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $query_sql);
if (mysqli_num_rows($result) > 0) {
    header("Location: tampilkan_data.php");
} else {
    echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!'); window.location='loginadmin.html';</script>";
  
}
?>
