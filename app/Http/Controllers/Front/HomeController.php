<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $menProducts = Product::where('gender','nam')->get();
        $womenProducts = Product::where('gender','nu')->get();
        $featureProducts = Product::all();


        return view('frontend.index', compact('menProducts','womenProducts', 'featureProducts'));
    }
}
