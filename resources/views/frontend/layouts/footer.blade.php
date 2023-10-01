   <!-- Footer Start -->
<div class="container-fluid bg-light mt-5 py-5 bgsvg">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Get In Touch</h5>
                <p class="mb-4">Get in touch with us today to 
                    learn more about our pet products and services. 
                    Contact us via phone, email. We're always happy to hear from fellow pet lovers!</p>
                <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>150ft Ring Road, Shital Park, The Spire-2, rajkot.</p>
                <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@7technosoftsolutions.com</p>
                <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="{{url('/dashboard')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-body mb-2" href="{{url('/about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-body mb-2" href="{{url('/service')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                    <a class="text-body mb-2" href="{{url('/team')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                    <a class="text-body mb-2" href="{{url('/blog')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                    <a class="text-body mb-2" href="{{url('/cart')}}"><i class="bi bi-arrow-right text-primary me-2"></i>cart</a>
                    <a class="text-body" href="{{url('/contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div>
            {{-- quick links --}}
            <div class="col-lg-3 col-md-6">
                <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Quick Links</h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="{{url('/dashboard')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                    <a class="text-body mb-2" href="{{url('/about')}}"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                    <a class="text-body mb-2" href="{{url('/service')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                    <a class="text-body mb-2" href="{{url('/team')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Meet The Team</a>
                    <a class="text-body mb-2" href="{{url('blog')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                    <a class="text-body mb-2" href="{{url('/cart')}}"><i class="bi bi-arrow-right text-primary me-2"></i>cart</a>
                    <a class="text-body" href="{{url('/contact')}}"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                @if ($message = Session::get('success'))
                <div class="alert alert-success" id="success-alert">
                    <p>{{ $message }}</p>
                </div>
              @endif
                <h5 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Newsletter</h5>
                <form action="{{route('newsletter')}}" method="POST" >
                    @csrf
                    <div class="input-group">
                        <input type="email" name="email" class="form-control p-3" value="" placeholder="Your Email">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
                <h6 class="text-uppercase mt-4 mb-3">Follow Us</h6>
                <div class="d-flex">
                    <a class="btn btn-outline-primary btn-square me-2" href="{{ env('TWITTER_URL') }}"><i class="bi bi-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-2" href="{{ env('FACEBOOK_URL') }}"><i class="bi bi-facebook"></i></a>
                    <a class="btn btn-outline-primary btn-square me-2" href="{{ env('LINKDIN_URL') }}"><i class="bi bi-linkedin"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="{{ env('INSTAGRAM_URL') }}"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <div class="col-12 text-center text-body">
                <a class="text-body" href="">Terms & Conditions</a>
                <span class="mx-1">|</span>
                <a class="text-body" href="">Privacy Policy</a>
                <span class="mx-1">|</span>
                <a class="text-body" href="">Customer Support</a>
                <span class="mx-1">|</span>
                <a class="text-body" href="">Payments</a>
                <span class="mx-1">|</span>
                <a class="text-body" href="">Help</a>
                <span class="mx-1">|</span>
                <a class="text-body" href="">FAQs</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white-50 py-4">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-md-0">&copy; <a class="text-white" href="{{route('dashboard')}}">PET-SHOP</a>. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{url('frontend/lib/easing/easing.min.js')}}"></script>
<script src="{{url('frontend/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{url('frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{url('frontend/js/main.js')}}"></script>
