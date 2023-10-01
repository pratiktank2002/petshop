<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiterouteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\frontend\ProductController ;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\ProductController as pets;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PetProductsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController as ControllersProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PetToysController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//-------------- first page to open 
Route::get('/', [IndexController::class, 'index']);


//--------------- for register the user
// Route::get('/register', function () {
//     return view('register');
// });
//---------------------------------------------------

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [IndexController::class, 'index'])->name('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('frontend.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

//--------------------- for profile view and setting 
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//-----------------------------------------

require __DIR__.'/auth.php';
Route::get('/admin/dashboard', 'AdminController@dashboard')->middleware('isAdmin');


//---------------------------- webpage routes

Route::view('/about', 'frontend.about')->name('about');
Route::view('/service', 'frontend.service')->name('service');
Route::view('/contact', 'frontend.contact');
// Route::view('/cart', 'frontend.cart');

//--------------------------- webpage routes ends


//-----------------------------dropdown links routes
Route::view('/team', 'frontend.team');
Route::view('/testimonial', 'frontend.testimonial');
Route::view('/blog', 'frontend.blog');
Route::view('/detail', 'frontend.detail');
Route::view('/breads', 'frontend.breads' );

//---------------------------------For contact us routes

Route::middleware('auth')->group(function () {

    Route::post('/contactus', [ContactUsController::class, 'connect'])->name('contactus');
    Route::post('/Comment', [ContactUsController::class, 'Comment'])->name('Comment');
    Route::post('/newsletter', [ContactUsController::class, 'newsletter'])->name('newsletter');
});
//----------------------------------------------------------------


//-------------------------All carrts Routes
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::get('/pettocart', [CartController::class, 'pettocart'])->name('pettocart');
    Route::get('/toytocart', [CartController::class, 'toytocart'])->name('toytocart');
});
//--------google routes

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

//------- Facebook login

Route::get('login/facebook', [LoginController::class, 'redirectToFacebook'])->name('login-facebook');
Route::get('login/facebook/callback', [LoginController::class, 'handleFacebookCallback']);

// Route::get('/invoice', function (){
//     $pdf = App::make('dompdf.wrapper');
//     $pdf->loadHTML('<h1>Test</h1>');
//     return $pdf->stream();
// })->name('downlodpdf');

Route::get('/back', function () {
    return back();
});


// to add admin rights ,just add -> 'admin' //
// ------------------------ mypets Crud routes
Route::middleware(['auth',])->group(function () {
    Route::get('/mypets', [pets::class, 'index'])->name('index');
    Route::get('/create', [pets::class, 'create'])->name('create');
    Route::post('store/', [pets::class, 'store'])->name('store');
    Route::get('show/{product}',[pets::class, 'show'])->name('show');
    Route::get('edit/{product}',[pets::class, 'edit'])->name('edit');
    Route::put('edit/{product}',[pets::class, 'update'])->name('update');
    Route::delete('/{product}',[pets::class, 'destroy'])->name('destroy');
    Route::get('/AddToCart/{product}',[pets::class,'tocart'])->name('tocart');
    Route::post('/buyingpet/{product}',[pets::class,'petbuy'])->name('petbuy');
    Route::delete('/deletepet/{product}',[pets::class, 'destroypet'])->name('destroypet');
    Route::get('/products/page/{page}', [pets::class, 'getProducts'])->name('products.page');
});


// ----------------------------------priceplan routes

Route::middleware("auth")->group(function () {
    Route::get('/price', [PlanController::class, 'index'])->name('price');
    Route::get('/plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::post('/subscription', [PlanController::class, 'subscription'])->name('subscription.create');
    Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');
});

// ---------------------------------------- petproducts and cart's

Route::middleware(['auth'])->group(function () {
    Route::get('/petproduct', [PetProductsController::class, 'index'])->name('petproduct');
    Route::get('petproduct/create', [PetProductsController::class, 'create'])->name('Petproduct_create');
    Route::post('petproduct/store/', [PetProductsController::class, 'store'])->name('Petproduct_store');
    Route::get('product/{product}',[PetProductsController::class, 'Addtocart'])->name('Producttocart');
    Route::delete('/petproduct/{product}',[PetProductsController::class, 'destroyx'])->name('destroyproduct');
    Route::post('/buying', [PetProductsController::class, 'buying'])->name('buyingProduct');
   // Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');
});

// ====================================== Pettoys routes
Route::middleware(['auth'])->group(function () {
    Route::get('pettoys/create', [PetToysController::class, 'create' ])->name('pettoys_create');
    Route::post('pettoys/store/', [PetToysController::class, 'store' ])->name('pettoys_store');
    Route::get('pettoys/{product}',[PetToysController::class, 'toysTocart'])->name('pettoysTocart');
    Route::post('pettoys/buying', [PetToysController::class, 'buyingToy'])->name('buyingToy');

});
