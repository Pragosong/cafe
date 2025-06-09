<?php
require 'koneksi.php';

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Koneksi Gagal : " . mysqli_connect_error());
}
// Fungsi hapus data
if (isset($_POST['hapus'])) {
    $id = $_POST['hapus'];
    $hapus_sql = "DELETE FROM pesanans WHERE id=$id";
    $hapus_query = mysqli_query($conn, $hapus_sql);
    if ($hapus_query) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        echo "<script>window.location='tampilkan_data.php';</script>"; // Ganti nama_file_ini.php dengan nama file Anda
    } else {
        echo "<script>alert('Gagal menghapus data');</script>";
    }
}

// Fungsi update data
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['Nama'];
    $pesanan = $_POST['Pesanan'];
    $detail_pesanan = $_POST['Detail_Pesanan'];
    $harga = $_POST['Harga'];

    $update_sql = "UPDATE pesanans SET Nama='$nama', Pesanan='$pesanan', Detail_Pesanan='$detail_pesanan', Harga='$harga' WHERE id=$id";
    $update_query = mysqli_query($conn, $update_sql);
    if ($update_query) {
        echo "<script>alert('Data berhasil diperbarui');</script>";
        echo "<script>window.location='tampilkan_.php';</script>"; // Ganti nama_file_ini.php dengan nama file Anda
    } else {
        echo "<script>alert('Gagal memperbarui data');</script>";
    }
}

else {
    echo "";
}
$sql = 'SELECT * FROM pesanans';
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
    <title>Menampilkan Data MySQL Ke Dalam Tabel HTML</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f8f8f8;
            font-weight: bold;
            color: #555;
            text-transform: uppercase;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #ddd;
        }

        caption {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Data Cafe</h1>
    <table class="data-table">
        <caption class="title"></caption>
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Pesanan</th>
                <th>Detail_Pesanan</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Periksa apakah ada baris yang dikembalikan oleh query
            if (mysqli_num_rows($query) > 0) {
                // Loop melalui setiap baris hasil query
                while ($row = mysqli_fetch_assoc($query)) {
                    // Tampilkan data dalam baris tabel HTML
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["Nama"] . "</td>";
                    echo "<td>" . $row["Pesanan"] . "</td>";
                    echo "<td>" . $row["Detail_Pesanan"] . "</td>";
                    echo "<td>" . $row["Harga"] . "</td>";
					echo "<td>";
                    echo "<form method='post' style='display:inline-block;'>";
                    echo "<input type='hidden' name='hapus' value='" . $row["id"] . "'>";
                    echo "<button type='submit'>Hapus</button>";
                    echo "</form>";
                    echo "<form method='post' action='edit.php'>";
                    echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
                    echo "<button type='submit' name='edit'>Edit</button>";
                    echo "</form>";

                    echo "</td>";
                    // Tambahkan kolom lain jika diperlukan
                    echo "</tr>";
                }
            } else {
                // Tampilkan pesan jika tidak ada data yang ditemukan
                echo "<tr><td colspan='3'>Tidak ada data yang ditemukan</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
