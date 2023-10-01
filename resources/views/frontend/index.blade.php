@extends('frontend.layouts.main')

@section('main-container')
    <!-- Navbar End -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success" id="success-alert">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div >
            <p>{{ $message }}</p>
        </div>
    @endif
    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h1 class="display-1 text-uppercase text-dark mb-lg-4">Pet Zone</h1>
                    <p><h1 class="text-uppercase text-white mb-lg-4">Make Your Pets Happy</h1></p>
                    <p class="fs-4 text-dark mb-lg-4">Pets are beloved animals that bring joy, comfort, and companionship to their owners. They come in all shapes and sizes, from dogs and cats to rabbits, hamsters, and even fish. Pets are more than just animals; they are members of our families and have a special place in our hearts.</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="{{url('/detail')}}" class="btn btn-outline-light border-2 py-md-3 px-md-5 me-5">Read More</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Tn3lZE0rRBs" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- About Start -->
    <div  class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded" src="{{url('frontend/img/new/dogs.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5 text-uppercase mb-0">We Keep Your Pets Happy All Time</h1>
                    </div>
                    <h4 class="text-body mb-4">we are dedicated to providing the best possible products and services to ensure that your pets are healthy, happy, and well-cared for. </h4>
                    <div class="bg-light shadow p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Our Mission</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Our Vission</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0">We believe that pets are more than just animals - they are family members who bring joy, companionship, and unconditional love to our lives. That's why we are dedicated to providing the best possible products and services to ensure that your pets are healthy, happy, and well-cared for.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">our vission is to help pet owners provide the best possible care for their furry friends. We believe that a happy and healthy pet leads to a happier and healthier life, and we are committed to helping pet owners achieve that goal.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

    {{-- <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Services</h6>
                <h1 class="display-5 text-uppercase mb-0">Pets to sell</h1>
            </div>
            <div class="row g-5">
                @foreach ($products as $product )
                    
                    <div class="col-md-6">
                        <div class="service-item bg-light d-flex p-4">
                            <img class="rounded img-fluid w-50" src="/images/{{ $product->image }}" width="400px">
                            <div class="mx-auto">
                                <h5 class="text-uppercase mb-3">Name : {{ $product->pet_name }}</h5>
                                <hr>
        
                                <p> <h6>Owner :</h6> {!! $product->owners->owner_name !!} </p>
                                <p> <h6>Detail :</h6> {!! $product->detail !!}</p>
                                <hr>
                                <a class="text-primary text-uppercase" href="{{ route('show' ,$product->id) }}">My Pets<i class="bi bi-chevron-right"></i></a>

                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>
    <!-- Services End --> --}}

    <!--main service Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h1 class="display-5 text-uppercase mb-0">Pet's To Sell</h1>
            </div>
            <hr>

            <div class="text mx-auto mt-3 mb-3">

                <div class="input-group mx-auto shadow-sm input-group-sm mb-3 ">

                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm">Search Pet's :</span>
                    </div>
                    <input type="text" id="petsearch" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    
                </div>
                
                <div class="row justify-content-between shadow-sm mx-auto bg-light  mt-3 pt-1">
                    {{-- <span>CATEGORIES :</span> --}}
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Categories</h3>
                    <div class="col-md-3">
                      <span class=" input-group-text fa-stack fa-lg">
                        <input type="checkbox" name="dog" id="dog">
                      </span>
                      <p class="text-center text-dark text-uppercase mt-2 mb-3">Dog</p>
                    </div>
                    <div class="col-md-3">
                      <span class=" input-group-text fa-stack fa-lg">
                        <input type="checkbox" name="cat" id="cat">
                      </span>
                      <p class="text-center text-dark text-uppercase mt-2 mb-3">Cat</p>
                    </div>
                    <div class="col-md-3">
                      <span class=" input-group-text fa-stack fa-lg">
                        <input type="checkbox" name="birds" id="birds">
                      </span>
                      <p class="text-center text-dark text-uppercase mt-2 mb-3">Birds</p>
                    </div>
                    <div class="col-md-3">
                        <span class=" input-group-text fa-stack fa-lg">
                          <input type="checkbox" name="fish" id="fish">
                        </span>
                        <p class="text-center text-dark text-uppercase mt-2 mb-3">Fish</p>
                    </div>
                    <div class="col-md-3">
                        <span class=" input-group-text fa-stack fa-lg">
                          <input type="checkbox" name="turtle" id="turtle">
                        </span>
                        <p class="text-center text-dark text-uppercase mt-2 mb-3">Turtle</p>
                    </div>
                </div>
                                                   
            </div>

            <div class="row g-5">
                <hr>

                @foreach ($products as $product )
                    {{-- <div id="product-list" class="col-lg-6" > --}}
                        <div class="blog-item col-lg-6">
                            <div class="row g-0 shadow bg-light overflow-hidden">
                                <div class="col-12 col-sm-5 h-100">
                                    <img class="img-fluid h-100" src="/images/{{ $product->image }}" style="height: 200px; object-fit: cover;">
                                </div>
                                <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                    <div class="p-3">
                                        <div class="mt-1">
                                            <h5 id="petname" class="text-uppercase mb-1">Name : {{ $product->pet_name }}</h5>
                                        </div>
                                        <hr>
                                        <p> <h6>Owner :</h6> {!! $product->users->name !!} </p>
                                        <input type="hidden"  name="category" value="{{ $product->category }}" >
                                        <p><h5>Detail :</h5>  {!! $product->detail !!}</p>
                                        <h5 id="petcategory" >{{ $product->category }}</h5>
                                        <hr>
                                        <a class="text-primary text-uppercase" href="{{route('show' ,$product->id)}}">full Datail<i class="bi bi-chevron-right"></i></a>
                                        <a class="text-primary text-uppercase cart" title="Add to cart" href="{{ route('tocart' ,$product->id) }}"><i class="bi bi-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- </div> --}}
                @endforeach  

                {{ $products->withQueryString()->links('pagination::bootstrap-5'); }}

                {{-- <div class="col-12">
                    <nav aria-label="Page navigation">
                      <ul class="pagination pagination-lg m-0">
                        <li class="page-item disabled">
                          <a class="page-link rounded-0" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                          </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link rounded-0" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div> --}}
            </div>

        </div>
    </div>
    <!--main service End -->

    <!--Pet Products Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Products</h6>
                <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
            </div>
            <div class="owl-carousel product-carousel">
                @foreach ($pet_products as $product)
                    <div class="pb-5">
                        <div class="product-item position-relative shadow bg-light d-flex gradiant-top flex-column text-center">
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
                                    <a class="btn btn-primary py-2 px-3" href="{{ route('Producttocart' ,$product->id) }}"><i class="bi bi-cart"></i></a>
                                </form>
                                <a class="btn btn-primary py-2 px-3" href="{{ route('petproduct') }}"><i class="bi bi-eye"></i></a>
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
                    <a href="{{route('petproduct')}}" class="btn btn-light py-md-3 px-md-5 me-3">Shop Now</a>
                    <a href="{{route('about')}}" class="btn btn-outline-light py-md-3 px-md-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Pricing Plan</h6>
                <h1 class="display-5 text-uppercase mb-0">Competitive Pricing For Pet Services</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">Basic</h2>
                        <h6 class="text-body mb-5">The basic Choice</h6>
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">₹</small>500<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET BOARDING</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET GROOMING</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET EXERCISE</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET FEEDING</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET TRAINING</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET TREATMENT</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <a href="{{url('/price')}}" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5">
                        <h2 class="text-uppercase">PREMIUM </h2>
                        <h6 class="text-body mb-5">The Best Choice</h6>
                        <div class="text-center bg-dark p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">₹</small>900<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET BOARDING</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET GROOMING</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET EXERCISE</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET FEEDING</span>
                                <i class="bi bi-check2 fs-4 text-danger"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET TRAINING</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET TREATMENT</span>
                                <i class="bi bi-x fs-4 text-danger"></i>
                            </div>
                            <a href="{{url('/price')}}" class="btn btn-primary btn-outline-dark text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-light text-center pt-5 mt-lg-5">
                        <h2 class="text-uppercase">LUXURY </h2>
                        <h6 class="text-body mb-5">The Luxury Choice</h6>
                        <div class="text-center bg-primary p-4 mb-2">
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top"
                                    style="font-size: 22px; line-height: 45px;">₹</small>1500<small
                                    class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                    Mo</small>
                            </h1>
                        </div>
                        <div class="text-center p-4">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET BOARDING</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET GROOMING</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET EXERCISE</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET FEEDING</span>
                                <i class="bi bi-check2 fs-4 text-primary"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET TRAINING</span>
                                <i class="bi bi-check2 fs-4 text-danger"></i>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span>PET TREATMENT</span>
                                <i class="bi bi-check2 fs-4 text-danger"></i>
                            </div>
                            <a href="{{url('/price')}}" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 right-side-pole">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Team Members</h6>
                <h1 class="display-5 text-uppercase mb-0">Qualified Pets Care Professionals</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding-right: 25px;">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{url('frontend/img/team-1.jpg')}}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="{{ env('TWITTER_URL') }}"><i class="bi bi-twitter"></i></a>

                                <a class="btn btn-light btn-square mx-1" href="{{ env('FACEBOOK_URL') }}"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="{{ env('LINKDIN_URL') }}"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Melissa Perez</h5>
                        <p class="m-0">Certified Veterinary Technician</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{url('frontend/img/team-2.jpg')}}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="{{ env('TWITTER_URL') }}"><i class="bi bi-twitter"></i></a>

                                <a class="btn btn-light btn-square mx-1" href="{{ env('FACEBOOK_URL') }}"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="{{ env('LINKDIN_URL') }}"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Rachel Wong</h5>
                        <p class="m-0">Professional Dog Trainer</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{url('frontend/img/team-3.jpg')}}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="{{ env('TWITTER_URL') }}"><i class="bi bi-twitter"></i></a>

                                <a class="btn btn-light btn-square mx-1" href="{{ env('FACEBOOK_URL') }}"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="{{ env('LINKDIN_URL') }}"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Emily Kim</h5>
                        <p class="m-0">Certified Pet Groomer</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{url('frontend/img/team-4.jpg')}}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="{{ env('TWITTER_URL') }}"><i class="bi bi-twitter"></i></a>

                                <a class="btn btn-light btn-square mx-1" href="{{ env('FACEBOOK_URL') }}"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="{{ env('LINKDIN_URL') }}"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Sarah Lee</h5>
                        <p class="m-0">Licensed Veterinary Assistant</p>
                    </div>
                </div>
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{url('frontend/img/team-5.jpg')}}" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square mx-1" href="{{ env('TWITTER_URL') }}"><i class="bi bi-twitter"></i></a>

                                <a class="btn btn-light btn-square mx-1" href="{{ env('FACEBOOK_URL') }}"><i class="bi bi-facebook"></i></a>
                                <a class="btn btn-light btn-square mx-1" href="{{ env('LINKDIN_URL') }}"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="text-uppercase">Angela Chen</h5>
                        <p class="m-0">Animal Behaviorist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5" style="margin: 45px 0;">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel bg-light p-5">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="{{url('frontend/img/testimonial-1.jpg')}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p>Pets can help reduce stress and anxiety. Spending time with a pet can increase levels of oxytocin, a hormone that promotes feelings of happiness and relaxation.Pets can provide companionship and a sense of purpose. For people who live alone or have limited social interaction, having a pet can provide a source of companionship and help reduce feelings of loneliness and isolation.</p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">dakota Jhonsan</h5>
                            <span><p >Doctor</p></span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="{{url('frontend/img/testimonial-2.jpg')}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p>According to the American Heart Association, owning a pet can lower your risk of heart disease. Studies have shown that pet owners have lower blood pressure and cholesterol levels, which can reduce the risk of heart attack and stroke.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">chirs hemsworth</h5>
                            <span><p >Actor</p></span>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid mx-auto" src="{{url('frontend/img/testimonial-3.jpg')}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p>I recently discovered this amazing Ecommerce petshop website and it has completely changed the way I shop for my furry friends. With a wide selection of high-quality pet products and easy-to-navigate website, I no longer have to spend hours searching for the right items. The checkout process was a breeze and my orders arrived promptly. I highly recommend this website to all pet owners who want the best for their furry companions.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">Ema Watson</h5>
                            <span><p >House Wife</p></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Latest Blog</h6>
                <h1 class="display-5 text-uppercase mb-0">Latest Articles From Our Blog Post</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100" src="{{url('frontend/img/new/jamie.jpg')}}" style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Pets</small>
                                        <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h5 class="text-uppercase mb-3">This is jamie.</h5>
                                    <p>One of the most popular pets is the dog. Dogs are known for their loyalty and affection, and they make great companions.</p>
                                    <a class="text-primary text-uppercase" href="{{url('/detail')}}">Read More<i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="row g-0 bg-light overflow-hidden">
                            <div class="col-12 col-sm-5 h-100">
                                <img class="img-fluid h-100" src="{{url('frontend/img/new/ricky.jpg')}}" style="object-fit: cover;">
                            </div>
                            <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Pets</small>
                                        <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                    </div>
                                    <h5 class="text-uppercase mb-3">This is ricky.</h5>
                                    <p>Mice are another popular small pet. They are intelligent, social, and make great companions for people who have a lot of love to give. They are easy to care for and require minimal space.</p>
                                    <a class="text-primary text-uppercase" href="{{url('/detail')}}">Read More<i class="bi bi-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    

    <!-- Footer Start -->

@endsection

