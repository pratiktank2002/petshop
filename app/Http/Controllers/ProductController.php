<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\owner_detail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Payment;
use Razorpay\Api\Api;

use function Pest\Laravel\get;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd(Product::with('owners')->get());

        // we get that user only who has owner id
        // dd(Product::has('owners')->get());

        $products = 'products';
        $products = Product::all();

        return view('crud.mypets', compact('products') )
            ->with('i');
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        
        // $request->validate([
        //     'pet_name' => 'required',
        //     'age' => 'required',
        //     'price' => 'required',
        //     'category' => 'required',
        //     'Short_Description' => 'required',
        //     'detail' => 'required',
        //     'Other_Information' => 'required',
        //     'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
        //     'owner_name' => 'required',
        //     'email' => 'required|email',
        //     'phone_number' => 'required',
        //     'address_1' => 'required',
        //     'address_2' => 'required',
        //     'pincode' => 'required',
        //     'state' => 'required',
        //     'city' => 'required',
        //     'country' => 'required',
        // ]);

        //$input = $request->all();

        $pet = new Product;
        $pet->pet_name = $request['pet_name'];
        $pet->user_id = Auth::user()->id;
        $pet->age = $request['age'];
        $pet->price = $request['price'];
        $pet->category = $request['category'];
        $pet->Short_Description = $request['Short_Description'];
        $pet->Other_Information = $request['Other_Information'];
        $pet->detail = $request['detail'];
        $pet->other_images = $request['other_images'];

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $pet['image'] = "$profileImage";
        }
        $pet->save();
        // Product::create($input);

   
        $ownerdetail = new owner_detail;
        $ownerdetail->owner_name = $request['owner_name'];
        $ownerdetail->email = $request['email'];
        $ownerdetail->phone_number = $request['phone_number'];
        $ownerdetail->address_1 = $request['address_1'];
        $ownerdetail->address_2 = $request['address_2'];
        $ownerdetail->pincode = $request['pincode'];
        $ownerdetail->state = $request['state'];
        $ownerdetail->city = $request['city'];
        $ownerdetail->country = $request['country'];
        $ownerdetail->save();
      
        return redirect()->route('index')
                        ->with('success','Product created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // to show the product
        // $products = Product::all();
        // return view('crud.show')->with('products', $products);
        // dd($product->load('users'));


        // if (Auth::check()) {
        //     $product = Product::where('user_id', Auth::user()->id)->get();
        // } else {
        //     $product = $product->load('users');
        // }
        
        $product = $product->load('users');
        $user = Auth::user();
        return view('crud.show', compact('product','user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        return view('crud.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //this is for updating 
        
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'detail' => 'required',
            'category' => 'required',
        ]);

    
        // $product = Product::find(2);
        $product->pet_name = $request['name'];
        $product->age = $request['age'];
        $product->detail = $request['detail'];
        $product->category = $request['category'];


        if ($image = $request->file('image')) {
            # code...
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $product['image'] = "$profileImage";
        }else{
            unset($product['image']);
        }

        $product->save();
        

        return redirect()->route('index')
            ->with('success', 'Pets detail Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //delete that id product
        $product->delete();

        return redirect()->route('index')
            ->with('success', 'Pets deleted successfully');

    }

    public function tocart(Request $request, string $id)
    {
        $product = Product::find($id);

        $product->pet_name;
        $product->id;
        $product->price;
        $product->image;
        $product->detail;
        // dd($product);

        $new_pet_item = new Cart;
    
        $new_pet_item->pet_id = $product->id;
        $new_pet_item->session_id = session()->getId();
        $new_pet_item->user_id = auth()->user()->id;
        $new_pet_item->pet_data = json_encode([
            'pet_name' => $product->pet_name,
            'pet_price' => $product->price,
            'pet_image' => $product->image,
            'pet_detail' => $product->detail,
        ]);
        // dd($new_cart_item);
        $new_pet_item->save();
        $pet_to_cart = cart::where('session_id', session()->getId())->get();

        return redirect('pettocart');
        
        // return view('frontend.cart', compact('product','new_pet_item','pet_to_cart'));
    }

    public function petbuy(Request $request,string $id)
    {
        $pet = Product::find($id);
        // dd($pet);
        
        $api = new Api(env('RAZORPAY_KEY'),env('RAZORPAY_SECRET'));

        $razorpayOrder = $api->order->create([
            'amount' => $request->input('total_price') , // Amount in paisa
            'currency' => 'INR',
            'receipt' => 'order_rcptid_11',
            'payment_capture' => 1,
        ]);
        $order_id = $razorpayOrder->id;

        //store the detail of new user 
        $user_pay = new Payment();

        $user_pay->name = $pet->pet_name;
        $user_pay->user_id = auth()->user()->id;
        $user_pay->amount = $request->input('total_price');
        $user_pay->payment_id = $razorpayOrder->id;
        $user_pay->razorpay_id =$request->input('razorpay_payment_id');
        $user_pay->payment_done = true;
        // dd($user_pay);
        $user_pay->save();

        // return view("frontend.success");
        // Delete the product from the cart with the same user id
        $user_id = auth()->user()->id;

        $products = Cart::where('user_id', $user_id)->get();
        
        foreach ($products as $product) {
            $product->delete();
        }

        return redirect()->route('index')->with('success', 'pet purchased successfully.');

    }

    public function destroypet(string $id)
    {
        //delete that id product
        $pet = Cart::find($id);
        // dd($pet);
        $pet->delete();
        return redirect()->back()
            ->with('success', 'Pet is removed from cart');

    }

    public function getProducts($page)
    {
        $products = Product::paginate(10, ['*'], 'page', $page);

        return view('frontend.products', compact('products'))->render();
    }

}
