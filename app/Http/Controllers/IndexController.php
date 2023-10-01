<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pet_Product;

class IndexController extends Controller
{
    //
    public function index()
    {
        // $products = 'products';

        $products = Product::all();
        $products = Product::paginate(4);
        $pet_products = Pet_Product::all();
            
        return view('frontend.index', compact('products', 'pet_products'));

        // return view('frontend.index')->with(['products' => $products, 'pet_products' => $pet_products]);
    }

}
