<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show($id) {
        $products = Product::findOrFail($id);

        return view('frontend.shop.show', compact('products'));
    }

    public function index() {
        $products = Product::paginate(9);
        return view('frontend.shop.index', compact('products'));
    }
}
