<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Pet_toys;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Payment_of_pet_toys;

class PetToysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $toys = Pet_toys::get();
        // dd($toys);
        $user = Auth::user();
        return view('petproduct.petproduct', compact("toys"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        //
        return view('petproduct.petToys');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //---for field validation
        $request->validate([
            'toy_name' => 'required',
            'toy_price' => 'required|integer',
            'toy_detail' => 'required',
            'toy_image' => 'required|image',
        ]);

        //---------save toys to databse 
        // dd($request->all());
        $new_product = new Pet_toys;

        $new_product->toy_name = $request['toy_name'];
        $new_product->toy_price = $request['toy_price'];
        $new_product->toy_detail = $request['toy_detail'];
        // $new_product->toy_image = $request['toy_image'];
        if ($toy_image = $request->file('toy_image')) {
            $destinationPath = 'images/petToys';
            $profileImage = date('YmdHis') . "." . $toy_image->getClientOriginalExtension();
            $toy_image->move($destinationPath, $profileImage);
            $new_product['toy_image'] = "$profileImage";
        }
        $new_product->save();

        return redirect()->route('petproduct')->with('success', 'new Toy has been added successfully!' );

    }

    //-------==== to add toys to cart 
    public function toysTocart(Request $request,string $id)
    {
        //
        // $product = Pet_Product::get();
        // dd($product);
        $product = Pet_toys::find($id);

        $new_cart_item = new Cart;

        $new_cart_item->Product_id = $product->id;
        $new_cart_item->session_id = session()->getId();
        $new_cart_item->user_id = auth()->user()->id;
        $new_cart_item->product_name = $product->toy_name;
        $new_cart_item->product_price = $product->toy_price;
        $new_cart_item->product_image = $product->toy_image;
        $new_cart_item->product_detail = $product->toy_detail;

        // dd($new_cart_item);
        $new_cart_item->save();
        
        return redirect('toytocart');
        // $carts = cart::where('session_id', session()->getId())->get();
        // session()->put('carts', $carts);
        // return view('frontend.cart', compact('product','new_cart_item','carts'))->with('i');
    }

    public function buyingToy(Request $request)
    {
        $product = Pet_toys::find($request->product);
        // dd($product);
        
        $pet_product = new Payment_of_pet_toys();

        $pet_product->Product_id = $product->id;
        $pet_product->user_id = Auth::user()->id;
        $pet_product->Product_name = $product->toy_name;
        $pet_product->Total_paid_price = $request->input('total_price');
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
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
