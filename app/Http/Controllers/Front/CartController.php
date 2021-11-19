<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function add($id) {
        $product = Product::findOrFail($id);

        Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->price,
            'weight' => 0,
            'options' => [
                'images' => $product->image
            ],
        ]);


        return back();
    }

    public function index() {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('frontend.shop.cart', compact('carts', 'total', 'subtotal'));
    }

    public function delete($rowId) {
        Cart::remove($rowId);
        
        return back();
    }

    public function update(Request $request) {
        if($request->ajax()) {
        Cart::update($request->rowId, $request->qty);
        }
    }
}
