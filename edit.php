<?php
require 'koneksi.php';

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])) {
    $id = $_POST['id'];
    
    // Ambil data berdasarkan id yang diberikan
    $sql = "SELECT * FROM pesanans WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row['Nama'];
        $pesanan = $row['Pesanan'];
        $detail_pesanan = $row['Detail_Pesanan'];
        $harga = $row['Harga'];
    } else {
        echo "Data tidak ditemukan.";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    // Process update data here
    $id = $_POST['id'];
    $nama = $_POST['Nama'];
    $pesanan = $_POST['Pesanan'];
    $detail_pesanan = $_POST['Detail_Pesanan'];
    $harga = $_POST['Harga'];

    $update_sql = "UPDATE pesanans SET Nama='$nama', Pesanan='$pesanan', Detail_Pesanan='$detail_pesanan', Harga='$harga' WHERE id=$id";
    $update_query = mysqli_query($conn, $update_sql);
    if ($update_query) {
        echo "<script>alert('Data berhasil diperbarui');</script>";
        echo "<script>window.location='tampilkan_data.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data');</script>";
    }
}
?>

<html>
<head>
    <title>Edit Data</title>
    <!-- Add your CSS styles here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(60, 60, 60);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: grid;
            gap: 10px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #Ffff00;
            color: rgb(60, 60, 60);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #Ffff00;
        }
    </style>
</head>
<body>
<div class="container">
        <h2>Edit Data</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="Nama" value="<?php echo $nama; ?>">
            <label for="pesanan">Pesanan:</label>
            <input type="text" id="pesanan" name="Pesanan" value="<?php echo $pesanan; ?>">
            <label for="detail_pesanan">Detail Pesanan:</label>
            <input type="text" id="detail_pesanan" name="Detail_Pesanan" value="<?php echo $detail_pesanan; ?>">
            <label for="harga">Harga:</label>
            <input type="text" id="harga" name="Harga" value="<?php echo $harga; ?>">
            <input type="submit" name="update" value="Update">
        </form>
    </div>
</body>
</html>
