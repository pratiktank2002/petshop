<!-- Topbar Start -->
{{-- <div class="container-fluid border-bottom d-none d-lg-block">
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
</div> --}}

<div class="container-fluid  shadow border-bottom d-none d-lg-block">
    <div class="row mx-auto gx-0 justify-content-around">
        <div class="col-lg-3 text-center shadow-sm py-2 border-0 ">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Our Office</h6>
                    <span>150ft Ring Road, Shital Park, The Spire-2, rajkot.</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-center shadow-sm border-start border-end   py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Email Us</h6>
                    <span>pratik@gmail.com</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-center shadow-sm  border-start border-end py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Call Us</h6>
                    <span>+91 72020 85207</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-center py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-people fs-1 text-primary me-3"></i>
                <div class="text-start">
                    @if (Route::has('login'))
                        @auth
                            <h1>Welcome</h1>
                        @else
                            <a href="{{ route('login') }}" class=" btn btn-primary py-3 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary py-3 ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="container-fluid border d-none d-lg-block py-3">
    <div class="row mx-auto gx-5 justify-content-around align-items-center">
      <div class="col-lg-3 text-center">
        <div class="d-inline-flex align-items-center">
          <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
          <div class="text-start">
            <h6 class="text-uppercase mb-1">Our Office</h6>
            <span>150ft Ring Road, Shital Park, The Spire-2, rajkot.</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 border-start border-end border-3 text-center">
        <div class="d-inline-flex align-items-center">
          <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
          <div class="text-start">
            <h6 class="text-uppercase mb-1">Email Us</h6>
            <span>info@7technosoftsolutions.com</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 text-center">
        <div class="d-inline-flex align-items-center">
          <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
          <div class="text-start">
            <h6 class="text-uppercase mb-1">Call Us</h6>
            <span>+91 72020 85207</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 border-start border-3 text-center">
        <div class="d-inline-flex align-items-center">
          <i class="bi bi-people fs-1 text-primary me-3"></i>
          <div class="text-start">
            @if (Route::has('login'))
              @auth
                <h1>Welcome</h1>
              @else
                <a href="{{ route('login') }}" class="btn btn-primary py-3 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
  
                @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="btn btn-primary py-3 ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
              @endauth
            @endif
          </div>
        </div>
      </div>
    </div>
</div> --}}
  

<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white shadow navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <a href="{{url('/dashboard')}}" class="navbar-brand ms-lg-5">
        <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Zone</h1>
        {{-- <img src="{{ url('frontend/img/petshop-2.png') }}" class="h-50 w-50"  alt="">pet-zone --}}
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{url('/dashboard')}}" class="nav-item nav-link">Home</a>
            <a href="{{url('/about')}}" class="nav-item nav-link">About</a>
            <a href="{{url('/service')}}" class="nav-item nav-link">Service</a>
            <a href="{{url('/petproduct')}}" class="nav-item nav-link">PetProduct</a>
            <a href="{{url('/cart')}}" class="nav-item nav-link ps-1 "><i class="bi bi-cart"></i>Cart</a>
            <a href="{{url('/mypets')}}" class="nav-item nav-link">My Pets</a>
            <div class="nav-item dropdown">
                <a href="{{url('')}}" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{url('/price')}}" class="dropdown-item">Pricing Plan</a>
                    <a href="{{url('/testimonial')}}" class="dropdown-item">Testimonial</a>
                    <a href="{{url('/blog')}}" class="dropdown-item">Blog Grid</a>
                    <a href="{{url('/breads')}}" class="dropdown-item">See breads</a>
                    <a href="{{url('/detail')}}" class="dropdown-item">Blog Detail</a>
                    <a href="{{url('/team')}}" class="dropdown-item">The Team</a>
                    <a href="{{url('/contact')}}" class="dropdown-item">contact</a>
                    {{-- <a href="{{route('logout')}}" class="dropdown-item"> --}}
                        <form method="POST" action="{{ route('logout') }}" class="dropdown-item btn btn-danger" >
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    {{-- </a> --}}
                </div>
            </div>
            <a href="{{url('/profile')}}" class="nav-item nav-link nav-contact bg-primary text-white px-5 ms-lg-5">Profile <i class="bi bi-arrow-right"></i></a>            
        </div>
    </div>
</nav>
<!-- Navbar End -->