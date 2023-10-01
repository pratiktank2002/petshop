@extends('frontend.layouts.main')

@section('main-container')

    <!-- Testimonial Start -->
    <div class="container-fluid bg-testimonial py-5">
        <div class="container py-5">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel bg-light p-5">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid img-zoom mx-auto" src="{{url('frontend/img/testimonial-1.jpg')}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p>Pets can help reduce stress and anxiety. Spending time with a pet can increase levels of oxytocin, a hormone that promotes feelings of happiness and relaxation.Pets can provide companionship and a sense of purpose. For people who live alone or have limited social interaction, having a pet can provide a source of companionship and help reduce feelings of loneliness and isolation.</p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">dakota Jhonsan</h5>
                            <p><span>Doctor</span></p>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid img-zoom mx-auto" src="{{url('frontend/img/testimonial-2.jpg')}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p>According to the American Heart Association, owning a pet can lower your risk of heart disease. Studies have shown that pet owners have lower blood pressure and cholesterol levels, which can reduce the risk of heart attack and stroke.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">chirs hemsworth</h5>
                            <p><span>Actor</span></p>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-4">
                                <img class="img-fluid img-zoom mx-auto" src="{{url('frontend/img/testimonial-3.jpg')}}" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                    <i class="bi bi-chat-square-quote text-primary"></i>
                                </div>
                            </div>
                            <p>I recently discovered this amazing Ecommerce petshop website and it has completely changed the way I shop for my furry friends. With a wide selection of high-quality pet products and easy-to-navigate website, I no longer have to spend hours searching for the right items. The checkout process was a breeze and my orders arrived promptly. I highly recommend this website to all pet owners who want the best for their furry companions.
                            </p>
                            <hr class="w-25 mx-auto">
                            <h5 class="text-uppercase">Ema Watson</h5>
                            <span><h6 class="text-dark" >House Wife</h6></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

@endsection