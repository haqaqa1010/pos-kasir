<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
        }
        
        .cart-item {
            transition: all 0.3s ease;
        }
        
        .cart-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }
        
        .quantity-btn {
            transition: all 0.2s ease;
        }
        
        .quantity-btn:hover {
            background-color: #e2e8f0;
        }
        
        .empty-cart {
            animation: fadeIn 0.5s ease-in-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .cart-animation {
            animation: slideIn 0.5s ease-out;
        }
        
        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Keranjang Belanja</h1>
                <p class="text-gray-600 mt-2">Lihat dan kelola produk dalam keranjang Anda</p>
            </div>
            <div class="flex items-center space-x-4">
                <button class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded-lg flex items-center space-x-2 hover:bg-gray-50 transition-colors">
                    <i class="fas fa-arrow-left"></i>
                    <span>Lanjut Belanja</span>
                </button>
                <div class="relative">
                    <i class="fas fa-shopping-cart text-2xl text-indigo-600"></i>
                    <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                </div>
            </div>
        </div>
        
        <!-- Cart Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Cart Items -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                    <!-- Cart Header -->
                    <div class="bg-indigo-50 p-4 border-b">
                        <div class="flex justify-between items-center">
                            <h2 class="text-lg font-semibold text-indigo-700">Produk dalam Keranjang</h2>
                            <span class="text-sm text-indigo-600 bg-indigo-100 px-3 py-1 rounded-full">3 item</span>
                        </div>
                    </div>
                    
                    <!-- Cart Items List -->
                    <div class="divide-y">
                        <!-- Item 1 -->
                        <div class="p-4 cart-item cart-animation">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                         alt="Salad Buah Segar" 
                                         class="w-20 h-20 object-cover rounded-lg">
                                </div>
                                <div class="flex-grow">
                                    <h3 class="font-medium text-gray-800">Salad Buah Segar</h3>
                                    <p class="text-sm text-gray-500 mt-1">Campuran buah segar dengan yogurt</p>
                                    <div class="flex items-center mt-2">
                                        <span class="text-indigo-600 font-semibold">Rp 25.000</span>
                                        <span class="text-xs text-gray-500 line-through ml-2">Rp 30.000</span>
                                        <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded ml-3">Diskon 17%</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-3">
                                    <!-- Quantity Controls -->
                                    <div class="flex items-center border border-gray-300 rounded-lg">
                                        <button class="quantity-btn px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-l-lg">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <input type="number" value="1" class="w-12 text-center border-0 focus:ring-0">
                                        <button class="quantity-btn px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-r-lg">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <!-- Subtotal & Actions -->
                                    <div class="text-right">
                                        <p class="font-semibold text-gray-800">Rp 25.000</p>
                                        <div class="flex space-x-2 mt-2">
                                            <button class="text-indigo-600 hover:text-indigo-800 text-sm">
                                                <i class="far fa-heart"></i>
                                            </button>
                                            <button class="text-red-500 hover:text-red-700 text-sm">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 2 -->
                        <div class="p-4 cart-item cart-animation" style="animation-delay: 0.1s">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                         alt="Pizza Margherita" 
                                         class="w-20 h-20 object-cover rounded-lg">
                                </div>
                                <div class="flex-grow">
                                    <h3 class="font-medium text-gray-800">Pizza Margherita</h3>
                                    <p class="text-sm text-gray-500 mt-1">Dengan tomat, mozzarella, dan basil</p>
                                    <div class="flex items-center mt-2">
                                        <span class="text-indigo-600 font-semibold">Rp 75.000</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-3">
                                    <!-- Quantity Controls -->
                                    <div class="flex items-center border border-gray-300 rounded-lg">
                                        <button class="quantity-btn px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-l-lg">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <input type="number" value="2" class="w-12 text-center border-0 focus:ring-0">
                                        <button class="quantity-btn px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-r-lg">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <!-- Subtotal & Actions -->
                                    <div class="text-right">
                                        <p class="font-semibold text-gray-800">Rp 150.000</p>
                                        <div class="flex space-x-2 mt-2">
                                            <button class="text-indigo-600 hover:text-indigo-800 text-sm">
                                                <i class="far fa-heart"></i>
                                            </button>
                                            <button class="text-red-500 hover:text-red-700 text-sm">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Item 3 -->
                        <div class="p-4 cart-item cart-animation" style="animation-delay: 0.2s">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <img src="https://images.unsplash.com/photo-1559715745-e1b33a271c8f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=400&q=80" 
                                         alt="Sushi Roll" 
                                         class="w-20 h-20 object-cover rounded-lg">
                                </div>
                                <div class="flex-grow">
                                    <h3 class="font-medium text-gray-800">Sushi Roll</h3>
                                    <p class="text-sm text-gray-500 mt-1">8 potong sushi dengan berbagai isian</p>
                                    <div class="flex items-center mt-2">
                                        <span class="text-indigo-600 font-semibold">Rp 65.000</span>
                                        <span class="text-xs text-gray-500 line-through ml-2">Rp 80.000</span>
                                        <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded ml-3">Diskon 19%</span>
                                    </div>
                                </div>
                                <div class="flex flex-col items-end space-y-3">
                                    <!-- Quantity Controls -->
                                    <div class="flex items-center border border-gray-300 rounded-lg">
                                        <button class="quantity-btn px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-l-lg">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <input type="number" value="1" class="w-12 text-center border-0 focus:ring-0">
                                        <button class="quantity-btn px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-r-lg">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <!-- Subtotal & Actions -->
                                    <div class="text-right">
                                        <p class="font-semibold text-gray-800">Rp 65.000</p>
                                        <div class="flex space-x-2 mt-2">
                                            <button class="text-indigo-600 hover:text-indigo-800 text-sm">
                                                <i class="far fa-heart"></i>
                                            </button>
                                            <button class="text-red-500 hover:text-red-700 text-sm">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Empty Cart State -->
                    <!--
                    <div class="p-8 text-center empty-cart">
                        <div class="mx-auto w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-shopping-cart text-3xl text-gray-400"></i>
                        </div>
                        <h3 class="text-xl font-medium text-gray-700 mb-2">Keranjang Kosong</h3>
                        <p class="text-gray-500 mb-6">Belum ada produk yang ditambahkan ke keranjang</p>
                        <button class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                            Mulai Belanja
                        </button>
                    </div>
                    -->
                </div>
                
                <!-- Promo Code -->
                <div class="bg-white rounded-xl shadow-sm p-6 mt-6">
                    <h3 class="font-semibold text-gray-800 mb-4">Gunakan Kode Promo</h3>
                    <div class="flex space-x-3">
                        <input type="text" placeholder="Masukkan kode promo" class="flex-grow border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent">
                        <button class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition-colors">Terapkan</button>
                    </div>
                    <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div class="border border-dashed border-green-500 rounded-lg p-3 flex items-center">
                            <div class="bg-green-100 text-green-800 p-2 rounded-lg mr-3">
                                <i class="fas fa-tag"></i>
                            </div>
                            <div>
                                <p class="font-medium text-green-800">DISKON20</p>
                                <p class="text-xs text-green-600">Dapatkan diskon 20% untuk pembelian di atas Rp 150.000</p>
                            </div>
                        </div>
                        <div class="border border-dashed border-blue-500 rounded-lg p-3 flex items-center">
                            <div class="bg-blue-100 text-blue-800 p-2 rounded-lg mr-3">
                                <i class="fas fa-shipping-fast"></i>
                            </div>
                            <div>
                                <p class="font-medium text-blue-800">GRATISONGKIR</p>
                                <p class="text-xs text-blue-600">Gratis ongkir untuk pembelian pertama</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm p-6 sticky top-6">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4">Ringkasan Pesanan</h3>
                    
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal (3 item)</span>
                            <span class="font-medium">Rp 240.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Diskon</span>
                            <span class="font-medium text-green-600">- Rp 20.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Biaya Pengiriman</span>
                            <span class="font-medium">Rp 15.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600">Pajak</span>
                            <span class="font-medium">Rp 12.000</span>
                        </div>
                        <div class="border-t pt-3 mt-3">
                            <div class="flex justify-between text-lg font-bold">
                                <span>Total</span>
                                <span>Rp 247.000</span>
                            </div>
                        </div>
                    </div>
                    
                    <button class="w-full bg-indigo-600 text-white py-3 rounded-lg font-semibold hover:bg-indigo-700 transition-colors mb-4">
                        Lanjut ke Pembayaran
                    </button>
                    
                    <button class="w-full border border-gray-300 text-gray-700 py-3 rounded-lg font-medium hover:bg-gray-50 transition-colors flex items-center justify-center">
                        <i class="fas fa-trash-alt mr-2"></i>
                        Kosongkan Keranjang
                    </button>
                    
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <h4 class="font-medium text-gray-700 mb-3">Metode Pembayaran</h4>
                        <div class="grid grid-cols-4 gap-2">
                            <div class="border border-gray-300 rounded-lg p-2 flex items-center justify-center">
                                <i class="fab fa-cc-visa text-2xl text-blue-600"></i>
                            </div>
                            <div class="border border-gray-300 rounded-lg p-2 flex items-center justify-center">
                                <i class="fab fa-cc-mastercard text-2xl text-red-600"></i>
                            </div>
                            <div class="border border-gray-300 rounded-lg p-2 flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-2xl text-green-600"></i>
                            </div>
                            <div class="border border-gray-300 rounded-lg p-2 flex items-center justify-center">
                                <i class="fas fa-wallet text-2xl text-purple-600"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Security Badge -->
                <div class="bg-white rounded-xl shadow-sm p-6 mt-6">
                    <div class="flex items-center space-x-3">
                        <div class="bg-green-100 text-green-800 p-2 rounded-lg">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">Transaksi Aman</h4>
                            <p class="text-xs text-gray-600 mt-1">Data Anda dilindungi dengan enkripsi SSL</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple JavaScript for quantity controls
        document.querySelectorAll('.quantity-btn').forEach(button => {
            button.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                let value = parseInt(input.value);
                
                if (this.querySelector('.fa-minus')) {
                    if (value > 1) {
                        input.value = value - 1;
                    }
                } else if (this.querySelector('.fa-plus')) {
                    input.value = value + 1;
                }
                
                // Trigger change event for Livewire if needed
                // input.dispatchEvent(new Event('change', { bubbles: true }));
            });
        });
    </script>
</body>
</html>
