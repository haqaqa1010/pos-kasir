<?php

namespace App\Livewire\Cashier;

use Livewire\Component;
use App\Models\Product;

class Cart extends Component
{
    public $items = [];
    public $total = 0;

    protected $listeners = [
        'barcode-scanned' => 'addByScan'
    ];


    public function mount()
    {
        $this->calculateTotal();
    }

    public function addByScan($data)
    {
        if (!isset($data['product'])) return;

        $p = $data['product'];
        $id = $p['id'];

        if (!isset($this->items[$id])) {
            $this->items[$id] = [
                'id' => $id,
                'name' => $p['name'],
                'price' => $p['price'],
                'qty' => 1,
            ];
        } else {
            $this->items[$id]['qty']++;
        }

        $this->calculateTotal();
    }


    public function updateQty($productId, $qty)
    {
        if ($qty < 1) $qty = 1;

        $this->items[$productId]['qty'] = $qty;

        $this->calculateTotal();
    }

    public function removeItem($productId)
    {
        unset($this->items[$productId]);
        $this->calculateTotal();
    }

    public function clearCart()
    {
        $this->items = [];
        $this->total = 0;
    }

    private function calculateTotal()
    {
        $this->total = 0;

        foreach ($this->items as $item) {
            $this->total += ($item['price'] * $item['qty']);
        }
    }

    public function render()
    {
        return view('livewire.cashier.cart');
    }
}
