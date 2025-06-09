<?php
require 'koneksi.php';

// Periksa apakah $_POST["username"] dan $_POST["password"] telah didefinisikan
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query_sql = "SELECT * FROM daftar WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query_sql);

    if (mysqli_num_rows($result) > 0) {
        header("Location: index.html");
        exit; // Pastikan untuk keluar setelah header redirect
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!'); window.location='loginiser.html';</script>";
    }
} else {
    // Tampilkan pesan jika username atau password tidak tersedia
    echo "<center><h1>Email atau Password tidak tersedia. Silakan masukkan Email dan Password.</h1>
    <button><strong><a href='index.html'>Login</a></strong></button></center>";
}
?>

