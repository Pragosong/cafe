<?php
require 'koneksi.php';

// Memeriksa apakah ada data yang dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari form dan menghindari SQL injection
    $Nama = isset($_POST['Nama']) ? htmlspecialchars($_POST['Nama']) : '';
    $Pesanan = isset($_POST['Pesanan']) ? $_POST['Pesanan'] : [];
    $Detail_Pesanan = isset($_POST['Detail_Pesanan']) ? htmlspecialchars($_POST['Detail_Pesanan']) : '';
    $Harga = 0;

    // Menghitung total harga
    foreach ($Pesanan as $item => $quantity) {
        if (intval($quantity) > 0) {
            $price = 0;
            switch ($item) {
                case 'Hot Cappuccino':
                    $price = 15000;
                    break;
                case 'Iced Cappuccino':
                    $price = 18000;
                    break;
                case 'Hot Americano':
                    $price = 9500;
                    break;
                case 'Iced Americano':
                    $price = 12000;
                    break;
                case 'Hot Latte':
                    $price = 12500;
                    break;
                case 'Iced Latte':
                    $price = 13000;
                    break;
                case 'Hot Chocolate':
                    $price = 13000;
                    break;
                case 'Iced Chocolate':
                    $price = 13000;
                    break;
                case 'Hot Machiato':
                    $price = 10000;
                    break;
                case 'Iced Teh':
                    $price = 10000;
                    break;
                // Tambahkan item lain sesuai dengan harga mereka
            }
            $Harga += $price * intval($quantity);
        }
    }

    // Menggabungkan pesanan menjadi string
    $Pesanan_str = implode(', ', array_map(function($item, $quantity) {
        return intval($quantity) > 0 ? "$item x$quantity" : '';
    }, array_keys($Pesanan), $Pesanan));

    // Menghapus elemen kosong dalam string pesanan
    $Pesanan_str = implode(', ', array_filter(explode(', ', $Pesanan_str)));

    // Membuat query untuk menyimpan data pesanan ke database
    $sql = "INSERT INTO pesanans (Nama, Pesanan, Detail_Pesanan, Harga)
    VALUES ('$Nama', '$Pesanan_str', '$Detail_Pesanan', '$Harga')";

    // Menjalankan query dan memeriksa apakah berhasil
    if ($conn->query($sql) === TRUE) {
        // Mengambil data terakhir dari tabel pesanan
        $result = $conn->query("SELECT * FROM pesanans ORDER BY id DESC LIMIT 1");

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "Tidak ada hasil yang ditemukan";
        }

        // Menutup koneksi setelah selesai menggunakan objek $result
        $conn->close();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rincian Pesanan Terakhir</title>
  <link rel="stylesheet" href="css/all.min.css"> <!-- fontawesome -->
  <link rel="stylesheet" href="css/tailwind.css">
  <link rel="stylesheet" href="css/tooplate-antique-cafe.css">
  <style>
    /* Gaya untuk mengatur teks menjadi berada di tengah */
    .center {
      text-align: center;
    }

    /* Gaya untuk membuat latar belakang putih menjadi transparan */
    .transparent-bg {
      background-color: rgba(255, 255, 255, 0.8); /* Atur opasitas putih */
    }
  </style>
</head>
<body class="img js-fullheight" style="background-image: url(hhhh/bg.jpg);">
  <div class="flex justify-center items-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg transparent-bg"> <!-- Tambahkan kelas transparent-bg di sini -->
      <h1 class="text-2xl font-bold mb-6 text-center tm-text-yellow center">Rincian Pesanan Terakhir</h1>
      <table class="min-w-full border-collapse border border-gray-300">
        <tr>
          <td class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow border border-gray-300 px-4 py-2 center">Nama</td>
          <td class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border border-gray-300 px-4 py-2">
            <?php echo isset($row['Nama']) ? htmlspecialchars($row['Nama'], ENT_QUOTES, 'UTF-8') : ''; ?>
          </td>
        </tr>
        <tr>
          <td class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow border border-gray-300 px-4 py-2 center">Pesanan</td>
          <td class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border border-gray-300 px-4 py-2">
            <?php echo isset($row['Pesanan']) ? htmlspecialchars($row['Pesanan'], ENT_QUOTES, 'UTF-8') : ''; ?>
          </td>
        </tr>
        <tr>
          <td class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow border border-gray-300 px-4 py-2 center">Detail Pesanan</td>
          <td class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border border-gray-300 px-4 py-2">
            <?php echo isset($row['Detail_Pesanan']) ? htmlspecialchars($row['Detail_Pesanan'], ENT_QUOTES, 'UTF-8') : ''; ?>
          </td>
        </tr>
        <tr>
          <td class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow border border-gray-300 px-4 py-2 center">Total Harga</td>
          <td class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border border-gray-300 px-4 py-2">
            <?php echo isset($row['Harga']) ? 'Rp. ' . number_format($row['Harga'], 0, ',', '.') : ''; ?>
          </td>
        </tr>
      </table>
    </div>
  </div>
  <p class="w-100 text-center text-black black-bg"><a href="Akhir.html">&mdash; Konfirmasi Pesanan &mdash;</a></p>
</body>
</html>
