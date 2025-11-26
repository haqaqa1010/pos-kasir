<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CashierController extends Controller
{
    public function index()
    {
        return view('cashier.index');
    }

    public function scanBarcode(Request $request)
    {
        $barcode = $request->barcode;

        $product = Product::where('barcode', $barcode)->first();

        if (!$product) {
            return response()->json([
                'error' => 'Produk tidak ditemukan'
            ]);
        }

        return response()->json([
            'product' => [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price_sell
            ]
        ]);
    }


    public function addItem(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'qty' => 'required|integer|min:1',
        ]);

        // Tambah item ke session cart
        $cart = session()->get('cart', []);

        if (isset($cart[$request->product_id])) {
            $cart[$request->product_id]['qty'] += $request->qty;
        } else {
            $product = Product::find($request->product_id);

            $cart[$request->product_id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'qty' => $request->qty,
                'subtotal' => $product->price * $request->qty
            ];
        }

        session()->put('cart', $cart);

        return response()->json(['cart' => $cart]);
    }

    public function updateQty(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'qty' => 'required|integer|min:1'
        ]);

        $cart = session()->get('cart', []);

        if (isset($cart[$request->product_id])) {
            $cart[$request->product_id]['qty'] = $request->qty;
            $cart[$request->product_id]['subtotal'] = $cart[$request->product_id]['price'] * $request->qty;
        }

        session()->put('cart', $cart);

        return response()->json(['cart' => $cart]);
    }

    public function removeItem(Request $request)
    {
        $cart = session()->get('cart', []);
        unset($cart[$request->product_id]);
        session()->put('cart', $cart);

        return response()->json(['cart' => $cart]);
    }
}
