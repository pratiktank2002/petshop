@extends('frontend.layouts.main')

@section('main-container')
    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase">Contact Us</h6>
                <h1 class="display-5 text-uppercase mb-0">Please Feel Free To Contact Us</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-7 bg-light shadow ">
                    <form action="{{route('contactus')}}" method="post"  >
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 mt-5">
                                @if(Route::has('login'))
                                    @auth                                     
                                    <input type="text" name="name" value="{{old('name',auth()->user()->name)}}" class="form-control bg-white border-0 px-4" placeholder="Your Name" style="height: 55px;">
                                    
                                @else
                                    <input type="text" name="name" value="" class="form-control bg-white border-0 px-4" placeholder="Your Name" style="height: 55px;">
                                    @endauth
                                @endif
                            </div>
                            <span class="text-danger">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </span>

                            <div class="col-12">
                                @if(Route::has('login'))
                                    @auth 
                                    <input type="email" name="email" value="{{auth()->user()->email}}" class="form-control bg-white border-0 px-4" placeholder="Your Email" style="height: 55px;">
                                    
                                @else
                                    <input type="email" name="email" value="" class="form-control bg-white border-0 px-4" placeholder="Your Email" style="height: 55px;">
                                    @endauth
                                @endif
                            </div>
                            <span class="text-danger">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </span>
                            <div class="col-12">
                                <input type="text" name="subject" value="{{old('subject')}}" class="form-control bg-white border-0 px-4" placeholder="Subject" style="height: 55px;">
                            </div>
                            <span class="text-danger">
                                @error('subject')
                                    {{$message}}
                                @enderror
                            </span>
                            <div class="col-12">
                                <textarea name="message" value="" class="form-control bg-white border-0 px-4 py-3" rows="8" placeholder="Message"></textarea>
                            </div>
                            <span class="text-danger">
                                @error('message')
                                    {{$message}}
                                @enderror
                            </span>
                            <div class="col-12">
                                <button name="" class="btn btn-primary mb-3 w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="bg-light box shadow mb-5 p-5">
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
                        <hr class="shadow-lg" >
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