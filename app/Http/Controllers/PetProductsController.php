<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Pet_Product;
use Razorpay\Api\Api;
use App\Models\Payment_of_petproduct;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Pet_toys;

class PetProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Pet_Product::get();
        $toys = Pet_toys::get();
        $user = Auth::user();
        return view('petproduct.petproduct', compact("products",'toys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        //
        return view('petproduct.petproduct_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|integer',
            'product_detail' => 'required',
            'product_image' => 'required|image',
        ]);

        // dd($request->all());
        $new_product = new Pet_Product;

        $new_product->product_name = $request['product_name'];
        $new_product->product_price = $request['product_price'];
        $new_product->product_detail = $request['product_detail'];
        $new_product->product_image = $request['product_image'];
        // if ($product_image = $request->file('product_image')) {
        //     $destinationPath = 'images/';
        //     $profileImage = date('YmdHis') . "." . $product_image->getClientOriginalExtension();
        //     $product_image->move($destinationPath, $profileImage);
        //     $new_product['product_image'] = "$profileImage";
        // }
        $new_product->save();

        return redirect()->view('petproduct.petproduct')->with('success', 'new product has been added successfully!' );

    }

    /**
     * Display the specified resource.
     */
    public function Addtocart(Request $request,string $id)
    {
        //
        // $product = Pet_Product::get();
        // dd($product);
        $product = Pet_Product::find($id);

        $new_cart_item = new Cart;

        $new_cart_item->Product_id = $product->id;
        $new_cart_item->session_id = session()->getId();
        $new_cart_item->user_id = auth()->user()->id;
        $new_cart_item->product_name = $product->product_name;
        $new_cart_item->product_price = $product->product_price;
        $new_cart_item->product_image = $product->product_image;
        $new_cart_item->product_detail = $product->product_detail;
 
        $new_cart_item->save();

        return redirect('cart');
        // $carts = cart::where('session_id', session()->getId())->get();
        // session()->put('carts', $carts);
        // return view('frontend.cart', compact('product','new_cart_item','carts'))->with('i');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    public function buying(Request $request)
    {
        
        $product = Pet_Product::find($request->product);
        // dd($request->all());

        $api = new Api(env('RAZORPAY_KEY'),env('RAZORPAY_SECRET'));

        $razorpayOrder = $api->order->create([
            'amount' => $request->input('total_price'), // Amount in paisa
            'currency' => 'INR',
            'receipt' => 'order_rcptid_11',
            'payment_capture' => 1,
        ]);

        $pet_product = new Payment_of_petproduct();

        $pet_product->Product_id = $product->id;
        $pet_product->user_id = Auth::user()->id;
        $pet_product->Product_name = $product->product_name;
        $pet_product->Total_paid_price = $request->input('total_price');
        $pet_product->Order_id = $razorpayOrder->id;
        $pet_product->Razorpay_Payment_id = $request->input('razorpay_payment_id');
        $pet_product->payment_done = true;
        // dd($pet_product);
        $pet_product->save();

       // Delete the product from the cart with the same user id
       $user_id = auth()->user()->id;

       $products = Cart::where('user_id', $user_id)->get();
       
       foreach ($products as $product) {
           $product->delete();
       }

        return redirect()->route('petproduct')->with('success', 'product Purched successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyx(string $id)
    {
        //
        $product = Cart::find($id);
        // dd($product);
        $product->delete();
        return redirect('cart')->with('success', 'product is removed from cart');

        // return redirect()->back()->with('success', 'product is removed from cart');

    }
}
