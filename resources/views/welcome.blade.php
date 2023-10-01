@extends('frontend.layouts.authlayouts')

@section('main-container')
<!-- Topbar Start -->
<div class="container-fluid border-bottom d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-4 text-center py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Our Office</h6>
                    <span>150ft Ring Road, Shital Park, The Spire-2, rajkot.</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center border-start border-end py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Email Us</h6>
                    <span>info@7technosoftsolutions.com</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Call Us</h6>
                    <span>+91 72020 85207</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <a href="{{url('/')}}" class="navbar-brand ms-lg-5">
        <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Zone</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
<!-- Navbar End -->

<div class="container pt-5">
    <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                    <h1>
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Go to website</a>
                    </h1>
                    @else
                        <a href="{{ route('login') }}" class=" btn btn-primary py-3 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary py-3 ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
    <div class="row g-5">

        <!-- Hero Start -->
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-start">
                    <div class="col-lg-8 text-center text-lg-start">
                        <h1 class="display-1 text-uppercase text-dark mb-lg-4">Pet Zone</h1>
                        <h1 class="text-uppercase text-white mb-lg-4">Make Your Pets Happy</h1>
                        <p class="fs-4 text-white mb-lg-4">Pets are beloved animals that bring joy, comfort, and companionship to their owners. They come in all shapes and sizes, from dogs and cats to rabbits, hamsters, and even fish. Pets are more than just animals; they are members of our families and have a special place in our hearts.</p>
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

        <!-- Offer Start -->
        <div class="container-fluid bg-offer my-1 py-5 px-0">
            <div class="container py-1">
                <div class="row gx-5 justify-content-start">
                    <div class="col-lg-7">
                        <div class="border-start border-5 border-dark ps-5 mb-5">
                            <h6 class="text-dark text-uppercase">Special Offer</h6>
                            <h1 class="display-5 text-uppercase text-white mb-0">Save 50% on all items your first order</h1>
                        </div>
                        <p class="text-white mb-4">our website offers everything you need to keep your pets healthy, happy.From premium pet food to stylish accessories, and well-cared for. With fast and convenient delivery options and excellent customer service, shopping for your pets has never been easier.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offer End -->

        <div class=" py-1 mb-2 ">
            <div class="bg-light mb-5 p-5">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Our Office</h6>
                        <span>150ft Ring Road, Shital Park, The Spire-2, rajkot.</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Email Us</h6>
                        <span>info@7technosoftsolutions.com</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                    <div class="text-start">
                        <h6 class="text-uppercase mb-1">Call Us</h6>
                        <span>+91 72020 85207</span>
                    </div>
                </div>
                <div>
                    <iframe class="position-relative w-100"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.0052091852494!2d70.76521841446703!3d22.315642747978085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959c90177ae0def%3A0x881869fc97691bad!2s7Technosoft%20Solutions!5e0!3m2!1sen!2sin!4v1678089444346!5m2!1sen!2sin"
                        frameborder="0" 
                        style="height: 205px; border:0;" 
                        allowfullscreen="" 
                        aria-hidden="false"
                        tabindex="0">
                    </iframe>

                </div>
            </div>
        </div>
    </div>
</div>

</div>
<!-- Contact End -->


@endsection
