@extends('layouts.app')

@section('content')

<div class="grid grid-cols-3 gap-6">

    <!-- LEFT: Scan + Search -->
    <div class="col-span-2 bg-white p-6 rounded-xl shadow">

        <h2 class="text-xl font-bold mb-4">Scan Produk</h2>

        <input id="barcode" 
               type="text" 
               placeholder="Scan barcode di sini..." 
               class="w-full p-3 border rounded mb-4">

        <button onclick="scan()" 
                class="px-4 py-2 bg-blue-600 text-white rounded">
            Scan
        </button>

        <div id="result" class="mt-4 text-gray-600"></div>

    </div>

    <!-- RIGHT: Cart -->
    <div class="bg-white p-6 rounded-xl shadow">

        <livewire:cashier.cart />

    </div>

</div>

<script>
async function scan() {
    const bc = document.getElementById('barcode').value;

    let response = await fetch('/cashier/scan', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ barcode: bc })
    });

    let data = await response.json();

    // ini yang bikin data masuk ke Livewire Cart
    window.dispatchEvent(new CustomEvent('barcode-scanned', { detail: data }));

    document.getElementById('barcode').value = '';
    document.getElementById('barcode').focus();
}

</script>

@endsection
