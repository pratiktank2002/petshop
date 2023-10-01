@extends('frontend.layouts.main')

@section('main-container')

    <!-- Pricing Plan Start -->
    <div class="container-fluid py-5">
        <div class="container">
            @if ($message = Session::get('success'))
                <div class="alert alert-success" id="success-alert">
                    <p>{{ $message }}</p>
                </div>
                <script>
                    $(document).ready(function(){
                        // Hide the success message after 2 seconds
                        setTimeout(function() {
                            $("#success-alert").fadeOut("slow");
                        }, 1000 );
                    });
                </script>
            @endif
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Pricing Plan</h6>
                <h1 class="display-5 text-uppercase mb-0">Competitive Pricing For Pet Services</h1>
            </div>
            <div class="row g-5">
                @foreach($plans as $plan)
                    <div class="col-lg-4">
                        <div class="bg-light shadow text-center pt-5 mt-lg-5">
                            <h2 class="text-uppercase">{{ $plan->plan_name }}</h2>
                            <h6 class="text-body mb-5">{{ $plan->slug }}</h6>
                            <div class="text-center bg-primary p-4 mb-2">
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top"
                                        style="font-size: 22px; line-height: 45px;">₹</small>{{ $plan->price }}<small
                                        class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                        Mo</small>
                                </h1>
                            </div>
                            <div class="text-center p-4">
                                <div class="d-flex flex-column">
                                    @php
                                        $items = explode(',', $plan->description); // split the description into an array of items
                                    @endphp
                                    @foreach ($items as $index => $item)
                                        <div class="d-flex align-items-center justify-content-between mb-1">
                                            <div style="display: block;"> {{ $index + 1 }}. {{ $item }} </div>
                                            <i class="bi bi-check2 fs-4 text-primary"></i>
                                        </div>
                                    @endforeach
                                </div>
                                <a href="{{route('plans.show', $plan->slug)}}" id="byuplan" class="btn btn-primary text-uppercase py-2 px-4 my-3">Buy Plan</a>
                                <a href="{{route('service')}}" class="btn btn-primary text-uppercase py-2 px-4 my-3">See All Services</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4">
                        <div class="bg-light text-center pt-5">
                            <h2 class="text-uppercase">PREMIUM </h2>
                            <h6 class="text-body mb-5">The Best Choice</h6>
                            <div class="text-center bg-dark p-4 mb-2">
                                <h1 class="display-4 text-white mb-0">
                                    <small class="align-top"
                                        style="font-size: 22px; line-height: 45px;">$</small>100<small
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
                                <a href="{{route('plans.show', $plan->slug)}}" class="btn btn-primary text-uppercase py-2 px-4 my-3">Buy Plan</a>
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
                                        style="font-size: 22px; line-height: 45px;">$</small>150<small
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
                                <a href="{{route('plans.show', $plan->slug)}}" class="btn btn-primary text-uppercase py-2 px-4 my-3">Buy Plan</a>
                            </div>
                        </div>
                    </div> --}}
                @endforeach
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->


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
