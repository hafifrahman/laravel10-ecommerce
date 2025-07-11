<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::instance('cart')->content();

        return view('cart', [
            'cartItems' => $cartItems,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|min:1',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::find($request->id);
        $price = $product->sale_price ? $product->sale_price : $product->regular_price;
        Cart::instance('cart')
            ->add($product->id, $product->name, $request->quantity, $price)
            ->associate('App\Models\Product');

        return response()->json([
            'status' => true,
            'message' => 'Barang berhasil di tambahkan ke keranjang.',
        ]);
    }

    public function update(Request $request, $rowId)
    {
        Cart::instance('cart')->update($rowId, $request->qty);

        return response()->json([
            'success' => true,
        ]);
    }

    public function destroy($id)
    {
        Cart::instance('cart')->remove($id);

        return response()->json([
            'status' => true,
            'message' => 'Barang berhasil di hapus dari keranjang.',
            'count' => Cart::instance('cart')->content()->count(),
        ]);
    }
}
