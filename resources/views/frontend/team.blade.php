@extends('frontend.layouts.main')

@section('main-container')
    <!-- Team Start -->
    <div class="container-fluid py-5">
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

@endsection