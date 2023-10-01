<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    //=====this is for petproduct add to cart
    public function cart()
    {
        $carts = Cart::with('product')->where('session_id', session()->getId())->get();
        // dd($carts);

        return view('cart.cart', compact('carts'))->with('i');
    }

    //==========this is for pet add to cart
    public function pettocart()
    {
        $new_pet_item = Cart::with('pet')->where('session_id', session()->getId())->get();
        // dd($new_pet_item);
        return view('cart.pet_cart', compact('new_pet_item'))->with('i');
    }

    //===========this is for add toy to cart
    public function toytocart()
    {
        $toys = Cart::with('toys')->where('session_id', session()->getId())->get();
        // dd($toys);
        return view('cart.toys_cart', compact('toys'))->with('i');
    }
}
