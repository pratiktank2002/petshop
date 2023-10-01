@extends('frontend.layouts.main')

@section('main-container')
    <!-- Blog Start -->
    <div class="container py-5">
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
        <div class="row g-5">
            <div class="col-lg-8">
                <!-- Blog Detail Start -->
                <div class="mb-5">
                    <img class="img-fluid w-100 rounded mb-5" src="{{url('frontend/img/new/cat-2.jpg')}}" alt="">
                    <h1 class="text-uppercase mb-4">This is what is pets and what is our website is all about.</h1>
                    <p>Pets are beloved companions that bring joy, comfort, and companionship to their owners. As a pet owner, it's important to provide your furry friend with the best possible care to ensure they live happy and healthy lives. This is where our website comes in - we offer a range of pet-related products and services that cater to the needs of pets and their owners.
                    </p>
                    <p>Our website is an e-commerce platform that offers a variety of pet products, including food, toys, grooming supplies, and more. We also provide several pet care services such as pet boarding, grooming, training, and exercise. Our mission is to provide pet owners with access to high-quality and reliable products and services, all while promoting responsible pet ownership.</p>
                    <p>Overall, our website is a one-stop-shop for all your pet-related needs. From products to services, we have everything you need to ensure your furry friend receives the best possible care. We aim to provide a seamless and convenient user experience for our customers, so they can focus on enjoying the company of their pets.</p>
                </div>
                <!-- Blog Detail End -->

                <!-- Comment List Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">3 Comments</h3>
                    <div class="d-flex mb-4">
                        <img src="{{url('frontend/img/user.jpg')}}" class="img-fluid" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>"I absolutely love this website! It's so easy to navigate and find exactly what I'm looking for. Plus, the selection of pet products and services is amazing. I've recommended this site to all my friends with pets!"</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="{{url('frontend/img/testimonial-1.jpg')}}" class="img-fluid" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">Ribica Furguision</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>"I had been searching for a reliable pet boarding service for weeks, and this website made it so easy to find the perfect one. The booking process was a breeze, and my dog had a great time. Thank you for making pet care so convenient!"</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <img src="{{url('frontend/img/testimonial-2.jpg')}}" class="img-fluid" style="width: 45px; height: 45px;">
                        <div class="ps-3">
                            <h6><a href="">martin Garix</a> <small><i>01 Jan 2045</i></small></h6>
                            <p>
                                "I appreciate the attention to detail on this website. The information about pet grooming and training is so helpful, and the pricing plans are transparent and fair. It's clear that the team behind this site truly cares about the well-being of pets and their owners."</p>
                            <button class="btn btn-sm btn-light">Reply</button>
                        </div>
                    </div>
                </div>
                <!-- Comment List End -->

                <!-- Comment Form Start -->
                <div class="bg-light shadow rounded p-5">
                    
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Leave a comment</h3>
                    <form action="{{ route('Comment')}}" method="POST" >
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6 position-relative">
                                
                                {{-- <input name="name" value="" type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;"> --}}
                               
                                <input name="name" value="" type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                                <i class="bi bi-eye position-absolute toggle-password end-0 top-50 translate-middle-y px-3"></i>
                                {{-- <i class="bi bi-eye-slash position-absolute end-0 top-50 translate-middle-y"></i> --}}
                                  
                            </div>
                            <div class="col-12 col-sm-6">
                                <input name="email" value="" type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input name="profession" value="" type="text" class="form-control bg-white border-0" placeholder="Profession" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea name="comment" value="" class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" value="" type="submit">Leave Your Comment</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Comment Form End -->
            </div>

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Search Form Start -->
                <div class="mb-5">
                    <div class="input-group">
                        <input type="text" class="form-control p-3" placeholder="Keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
                <!-- Search Form End -->

                <!-- Category Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Categories</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="h5 bg-light py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>My Pets</a>
                        <a class="h5 bg-light py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Dogs</a>
                        <a class="h5 bg-light py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Cats</a>
                        <a class="h5 bg-light py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Fish</a>
                        <a class="h5 bg-light py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Birds</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Recent Post</h3>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="{{url('frontend/img/new/dog-3.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">The Golden Retriever
                        </a>
                    </div>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="{{url('frontend/img/new/ricky.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Pet Rickey
                        </a>
                    </div>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="{{url('frontend/img/new/karsten.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Karsten
                        </a>
                    </div>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="{{url('frontend/img/new/dog-1.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Dog's and cat's
                        </a>
                    </div>
                    <div class="d-flex overflow-hidden mb-3">
                        <img class="img-fluid" src="{{url('frontend/img/new/perrot.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="" class="h5 d-flex align-items-center bg-light px-3 mb-0">Perrot 
                        </a>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Image Start -->
                <div class="mb-5">
                    <img src="{{url('frontend/img/new/dog-5.jpg')}}" alt="" class="img-fluid shadow rounded">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <a href="" class="btn btn-primary m-1">PetCare</a>
                        <a href="" class="btn btn-primary m-1">PetProducts</a>
                        <a href="" class="btn btn-primary m-1">PetBoarding</a>
                        <a href="" class="btn btn-primary m-1">PetGrooming</a>
                        <a href="" class="btn btn-primary m-1">PetTraining</a>
                        <a href="" class="btn btn-primary m-1">PetExercise</a>
                        <a href="" class="btn btn-primary m-1">PetFeeding</a>
                        <a href="" class="btn btn-primary m-1">PetTreats</a>
                        <a href="" class="btn btn-primary m-1">PetHealth</a>
                        <a href="" class="btn btn-primary m-1">PetSupplies</a>
                        <a href="" class="btn btn-primary m-1">DogCare</a>
                        <a href="" class="btn btn-primary m-1">CatCare</a>
                    </div>
                </div>
                <!-- Tags End -->

                <!-- Plain Text Start -->
                <div>
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">About Pets</h3>
                    <div class="bg-light shadow text-center" style="padding: 30px;">
                        <p>Pets are beloved animals that bring joy, comfort, and companionship to their owners. They come in all shapes and sizes, from dogs and cats to rabbits, hamsters, and even fish. Pets are more than just animals; they are members of our families and have a special place in our hearts.</p>
                        <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                    </div>
                </div>
                <!-- Plain Text End -->
            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->

@endsection