<div class="p-4 bg-white shadow rounded">

    <h2 class="text-xl font-bold mb-3">Keranjang</h2>

    <table class="w-full text-sm">
        <thead>
            <tr class="border-b">
                <th class="py-1">Produk</th>
                <th class="py-1">Harga</th>
                <th class="py-1">Qty</th>
                <th class="py-1">Subtotal</th>
                <th class="py-1">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($items as $item)
                <tr class="border-b">
                    <td class="py-1">{{ $item['name'] }}</td>

                    <td class="py-1">Rp{{ number_format($item['price']) }}</td>

                    <td class="py-1">
                        <input type="number"
                               wire:change="updateQty({{ $item['id'] }}, $event.target.value)"
                               value="{{ $item['qty'] }}"
                               class="w-16 border rounded p-1">
                    </td>

                    <td class="py-1">
                        Rp{{ number_format($item['price'] * $item['qty']) }}
                    </td>

                    <td class="py-1">
                        <button wire:click="removeItem({{ $item['id'] }})"
                                class="bg-red-500 text-white px-2 py-1 rounded">
                            Hapus
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-3 text-gray-500">
                        Keranjang kosong
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4 text-right">
        <h3 class="text-lg font-bold">
            Total: Rp{{ number_format($total) }}
        </h3>

        <button wire:click="clearCart"
                class="mt-2 bg-gray-700 text-white px-3 py-2 rounded">
            Kosongkan Keranjang
        </button>
    </div>
</div>
