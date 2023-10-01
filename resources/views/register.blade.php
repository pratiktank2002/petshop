<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pet Zone </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{url('frontend/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{url('frontend/css/style.css')}}" rel="stylesheet">  
</head>

<body>

<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h1 class="text-primary text-uppercase">Register</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-7">
                <form action="{{url('/')}}/login" method="post"  >
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <input type="text" name="name" value="{{old('name')}}" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;">
                            <span class="text-denger" >
                                @error('name')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="col-12">
                            <input type="email" name="email" value="" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;">
                            <span class="text-denger" >
                                @error('email')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="col-12">
                            <input type="password" name="password" value="" class="form-control bg-light border-0 px-4" placeholder="Your password" style="height: 55px;">
                            <span class="text-denger" >
                                @error('password')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="col-12">
                            <input type="password" name="password_confirmation" value="" class="form-control bg-light border-0 px-4" placeholder="Your confirm password" style="height: 55px;">
                            <span class="text-denger" >
                                @error('password_confirmation')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="col-12">
                            <button name="" class="btn btn-primary w-100 py-3" type="submit">LOGIN</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-5">
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                            frameborder="0" style="height: 205px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{url('frontend/lib/easing/easing.min.js')}}"></script>
<script src="{{url('frontend/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{url('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{url('frontend/js/main.js')}}"></script>

</body>
</html>
