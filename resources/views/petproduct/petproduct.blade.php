@extends('frontend.layouts.main')

@section('main-container')
    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
                @can('Add-Product')
                    <a href="{{ route('Petproduct_create') }}" class="btn btn-primary text-uppercase py-2 px-4 my-3 ">Add Products</a>
                    <a href="{{ route('pettoys_create') }}" class="btn btn-primary text-uppercase py-2 px-4 my-3 ">Add Toys</a>
                @endcan
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" id="success-alert">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="owl-carousel product-carousel">
                @foreach ($products as $product)
                    <div class="pb-5 ">
                        <div class="product-item position-relative shadow-lg bg-light rounded-top d-flex gradiant-top flex-column text-center">
                            <img class="img-fluid mb-4" src="{{url('')}}/{{ $product->product_image}}" alt="">
                            <hr>
                            <h6 class="text-uppercase">{{$product->product_name}}</h6>
                            <h5 class="text-primary mb-0">₹{{ $product->product_price }}</h5>
                            
                            <hr>
                            <h5 class="text-uppercase text-primary mb-0"> Detail :</h5>
                            <h5 class="text-black mb-0">{{ $product->product_detail }}</h5>
                            <div class="btn-action d-flex justify-content-center">
                                <form action="" method="POST">
                                    @csrf
                                    <a class="btn btn-primary py-2 px-3" title="Add to Cart" href="{{ route('Producttocart' ,$product->id) }}"><i class="bi bi-cart"></i></a>
                                </form>
                                <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-start">
                <div class="col-lg-7">
                    <div class="border-start border-5 border-dark ps-5 mb-5">
                        <h6 class="text-dark text-uppercase">Special Offer</h6>
                        <h1 class="display-5 text-uppercase text-white mb-0">Save 50% on all items your first order</h1>
                    </div>
                    <p class="text-white mb-4">Pets bring love, joy, and companionship to our lives. They are loyal, affectionate, and have a special place in our hearts. Whether you prefer dogs, cats, rabbits, hamsters, or fish, there is a pet out there for everyone.</p>
                    <a href="" class="btn btn-light py-md-3 px-md-5 me-3">Shop Now</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Toys</h6>
                <h1 class="display-5 text-uppercase mb-0">Toys For Your Best Friends</h1>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" id="success-alert">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="owl-carousel product-carousel">
                @foreach ($toys as $product)
                    <div class="pb-5 ">
                        <div class="product-item position-relative shadow-lg bg-light rounded-top d-flex gradiant-top flex-column text-center">
                            <img class="img-fluid mb-4" src="{{url('/images/petToys')}}/{{ $product->toy_image}}" alt="">
                            <hr>
                            <h6 class="text-uppercase">{{$product->toy_name}}</h6>
                            <h5 class="text-primary mb-0">₹{{ $product->toy_price }}</h5>
                            
                            <hr>
                            <h5 class="text-uppercase text-primary mb-0"> Detail :</h5>
                            <h5 class="text-black mb-0">{{ $product->toy_detail }}</h5>
                            <div class="btn-action d-flex justify-content-center">
                                <form action="" method="POST">
                                    @csrf
                                    <a class="btn btn-primary py-2 px-3" title="Add to Cart" href="{{ route('pettoysTocart' ,$product->id) }}"><i class="bi bi-cart"></i></a>
                                </form>
                                <a class="btn btn-primary py-2 px-3" href=""><i class="bi bi-eye"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Products End -->

@endsection
