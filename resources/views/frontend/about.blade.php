@extends('frontend.layouts.main')

@section('main-container')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute shadow w-100 h-100 rounded" src="{{url('frontend/img/new/dog-1.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h6 class="text-primary text-uppercase">About Us</h6>
                        <h1 class="display-5 text-uppercase mb-0">We Keep Your Pets Happy All Time</h1>
                    </div>
                    <h4 class="text-body mb-4">This is all about pet's.</h4>
                    <div class="bg-light shadow p-4">
                        <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                    aria-selected="true">Dog's</button>
                            </li>
                            <li class="nav-item w-50" role="presentation">
                                <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                    aria-selected="false">Cat's</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                                <p class="mb-0">One of the most popular pets is the dog. Dogs are known for their loyalty and affection, and they make great companions. They come in a variety of breeds, from small toy dogs to large working breeds. They are also highly trainable and can be taught a variety of tricks and skills.</p>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <p class="mb-0">Cats are another popular pet. They are known for their independence and grace, and they make great indoor companions. They come in a variety of breeds, from short-haired to long-haired, and they are great at keeping themselves clean and groomed.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


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


    <!-- Team Start -->
    <div class="container-fluid py-5 ">
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
                    <div class="bg-light shadow text-center p-4">
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
                    <div class="bg-light shadow text-center p-4">
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
                    <div class="bg-light shadow text-center p-4">
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
                    <div class="bg-light shadow text-center p-4">
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
                    <div class="bg-light shadow text-center p-4">
                        <h5 class="text-uppercase">Angela Chen</h5>
                        <p class="m-0">Animal Behaviorist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection

