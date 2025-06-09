<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antique Bakery Cafe HTML Template by Tooplate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600&family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css"> <!-- fontawesome -->
    <link rel="stylesheet" href="css/tailwind.css">
    <link rel="stylesheet" href="css/tooplate-antique-cafe.css">
</head>
<style>
       
        input[type="number"] {
            width: 50px; 
            padding: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
    </style>
<body>
    <form action="order.php" method="post" enctype="multipart/form-data">
        <div class="text-center">
            <div class="inline-block">
                <a href="#menu" class="flex justify-center items-center bg-black bg-opacity-70 py-6 px-8 rounded-lg font-semibold tm-text-2xl tm-text-gold hover:text-gray-200 transition">
                    <i class="fas fa-coffee mr-3"></i>
                    <span>Pilih Pesanan Anda</span>
                </a>
            </div>
        </div>
        <div class="ml-3 sm:ml-6">
            <div class="flex flex-col lg:flex-row justify-around items-center">
                <div class="flex-1 m-5 rounded-xl px-4 py-6 sm:px-8 sm:py-10 tm-bg-brown tm-item-container">
                    <label for="Nama" class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Nama:</label>
                    <input type="text" id="Nama" name="Nama" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>

                    <label for="Pesanan" class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Pilih pesanan anda:</label>
                    <div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="Hot_Cappuccino" class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Cappuccino </label>
                                <input type="number" name="Pesanan[Hot Cappuccino]" id="Hot_Cappuccino" value="0" min="0" data-price="20000" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="Iced_Cappuccino" class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Cappuccino</label>
                                <input type="number" name="Pesanan[Iced Cappuccino]" id="Iced_Cappuccino" value="0" min="0" data-price="22000" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="Hot_Americano" class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Americano </label>
                                <input type="number" name="Pesanan[Hot Americano]" id="Hot_Americano" value="0" min="0" data-price="12500" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="Iced_Americano" class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Americano </label>
                                <input type="number" name="Pesanan[Iced Americano]" id="Iced_Americano" value="0" min="0" data-price="16000" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="Hot_Latte" class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Latte </label>
                                <input type="number" name="Pesanan[Hot Latte]" id="Hot_Latte" value="0" min="0" data-price="16000" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="Iced_Latte" class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Latte</label>
                                <input type="number" name="Pesanan[Iced Latte]" id="Iced_Latte" value="0" min="0" data-price="15000" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="Hot_Chocolate" class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Chocolate </label>
                                <input type="number" name="Pesanan[Hot Chocolate]" id="Hot_Chocolate" value="0" min="0" data-price="14000" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="Iced_Chocolate" class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Chocolate </label>
                                <input type="number" name="Pesanan[Iced Chocolate]" id="Iced_Chocolate" value="0" min="0" data-price="17000" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="Hot_Machiato" class="text-lg sm:text-xl mb-2 sm:mb3 tm-text-yellow">Hot Machiato </label>
                                <input type="number" name="Pesanan[Hot Machiato]" id="Hot_Machiato" value="0" min="0" data-price="14000" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            <div>
                                <label for="Iced_Teh" class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Teh</label>
                                <input type="number" name="Pesanan[Iced Teh]" id="Iced_Teh" value="0" min="0" data-price="13000" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                        </div>
                    </div>

                    <label for="Detail_Pesanan" class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Request Pesanan:</label>
                    <input type="text" id="Detail_Pesanan" name="Detail_Pesanan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" required>

                   <div id="totalHarga" class="text-lg sm:text-xl tm-text-yellow">Harga: Rp. 0</div>

                    <button type="button" onclick="hitungPesanan()" class="bg-white tm-text-brown py-1 px-2 text-1xl font-medium inline-block rounded-md mb-3">Hitung Pesanan</button>
                    
                </div>
            </div>
            <div class="flex flex-col lg:flex-row justify-around items-center">
                <button type="submit" class="bg-white tm-text-brown py-6 px-12 text-4xl font-medium inline-block rounded-md">Submit</button>
            </div>
        </div>
    </form>

    <div class="flex flex-col lg:flex-row justify-around items-center">
        <div class="flex-1 m-5 rounded-xl px-4 py-6 sm:px-8 sm:py-10 tm-bg-brown tm-item-container">
            <div class="flex items-start mb-6 tm-menu-item">
                <img src="img/menu-item-1.jpg" alt="Image" class="rounded-md">
                <div class="ml-3 sm:ml-6">
                    <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Cappuccino</h3>
                    <div class="text-white text-md sm:text-lg font-light mb-1">15.000</div>
                    
                </div>
            </div>
            <div class="flex items-start mb-6 tm-menu-item">
                <img src="img/menu-item-2.jpg" alt="Image" class="rounded-md">
                <div class="ml-3 sm:ml-6">
                    <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Americano</h3>
                    <div class="text-white text-md sm:text-lg font-light mb-1">Rp9.500</div>
                    
                </div>
            </div>
            <div class="flex items-start mb-6 tm-menu-item">
                <img src="img/menu-item-3.jpg" alt="Image" class="rounded-md">
                <div class="ml-3 sm:ml-6">
                    <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Latte</h3>
                    <div class="text-white text-md sm:text-lg font-light mb-1">Rp12.500</div>
                    
                </div>
            </div>
            <div class="flex items-start mb-6 tm-menu-item">
                <img src="img/menu-item-4.jpg" alt="Image" class="rounded-md">
                <div class="ml-3 sm:ml-6">
                    <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Hot Chocolate</h3>
                    <div class="text-white text-md sm:text-lg font-light mb-1">Rp.12.000</div>
                    
                </div>
            </div>
            <div class="flex items-start mb-6 tm-menu-item">
                <img src="img/A3.jpg" alt="Image" class="rounded-md">
                <div class="ml-3 sm:ml-6">
                    <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow"><a href="filosofi1 copy 3.html">Hot Machiato</a></h3>
                    <div class="text-white text-md sm:text-lg font-light mb-1">Rp.10.000</div>
                  
                </div>
            </div>
        </div>
        <div class="flex-1 m-5 rounded-xl px-4 py-6 sm:px-8 sm:py-10 tm-bg-brown tm-item-container">
            <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                <div class="text-right mr-6">
                    <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Cappuccino</h3>
                    <div class="text-white text-md sm:text-lg font-light mb-1">Rp.18.000</div>
                   
                </div>
                <img src="img/menu-item-5.jpg" alt="Image" class="rounded-md">
            </div>
            <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                <div class="text-right mr-6">
                    <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Americano</h3>
                    <div class="text-white text-md sm:text-lg font-light mb-1">Rp.12.000</div>
                   
                </div>
                <img src="img/menu-item-6.jpg" alt="Image" class="rounded-md">
            </div>
            <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                <div class="text-right mr-6">
                    <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Latte</h3>
                    <div class="text-white text-md sm:text-lg font-light mb-1">Rp.13.000</div>
               
                </div>
                <img src="img/menu-item-7.jpg" alt="Image" class="rounded-md">
            </div>
            <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                <div class="text-right mr-6">
                    <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Chocolate</h3>
                    <div class="text-white text-md sm:text-lg font-light mb-1"> Rp.13.000</div>
                   
                </div>
                <img src="img/menu-item-8.jpg" alt="Image" class="rounded-md">
            </div>
            <div class="flex items-start justify-end mb-6 tm-menu-item-2">
                <div class="text-right mr-6">
                    <h3 class="text-lg sm:text-xl mb-2 sm:mb-3 tm-text-yellow">Iced Tea</h3>
                    <div class="text-white text-md sm:text-lg font-light mb-1">Rp.10.000</div>
          
                </div>
                <img src="img/A3.jpg" alt="Image" class="rounded-md">
            </div>
        </div>
    </div>

    <script>
        function hitungPesanan() {
            const inputs = document.querySelectorAll('input[type="number"]');
            let total = 0;
            inputs.forEach((input) => {
                const quantity = parseInt(input.value);
                const price = parseInt(input.getAttribute('data-price'));
                total += quantity * price;
            });
            document.getElementById('totalHarga').innerText = 'Total Harga : Rp. ' + total.toLocaleString('id-ID');
        }
    </script>
</body>

</html>
