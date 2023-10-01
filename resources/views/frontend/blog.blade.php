@extends('frontend.layouts.main')

@section('main-container')
    <!-- Blog Start -->
    <div class="container py-5">
        <div class="row g-5">
            <!-- Blog list Start -->
            <div  class="col-lg-8">
                <div class="blog-item mb-5">
                    <div class="row g-0 bg-light shadow overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid img-zoom rounded h-100" src="{{url('frontend/img/new/jamie.jpg')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Pets</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h5 class="text-uppercase mb-3">This is jamie.</h5>
                                <p>One of the most popular pets is the dog. Dogs are known for their loyalty and affection, and they make great companions.</p>
                                <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item mb-5">
                    <div class="row g-0 bg-light shadow overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid img-zoom h-100" src="{{url('frontend/img/new/dog-3.jpg')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Pets</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h5 class="text-uppercase mb-3">The Golden Retriever</h5>
                                <p>The Golden Retriever is another popular breed known for its friendly and affectionate nature. Goldens are great with kids and make excellent therapy dogs due to their calm and gentle demeanor.</p>
                                <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item mb-5">
                    <div class="row g-0 bg-light shadow overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid img-zoom h-100" src="{{url('frontend/img/new/dog-1.jpg')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Pets</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h5 class="text-uppercase mb-3">Dog's and cat's</h5>
                                <p>Pets are beloved animals that bring joy, comfort, and companionship to their owners.they are members of our families and have a special place in our hearts.
                                </p>
                                <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item mb-5">
                    <div class="row g-0 bg-light shadow overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid img-zoom h-100" src="{{url('frontend/img/new/ricky.jpg')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Pets</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h5 class="text-uppercase mb-3">Pet Rickey</h5>
                                <p>Mice are another popular small pet. They are intelligent, social, and make great companions for people who have a lot of love to give. They are easy to care for and require minimal space, making them ideal for apartment living.</p>
                                <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item mb-5">
                    <div class="row g-0 bg-light shadow overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid img-zoom h-100 w-100" src="{{url('frontend/img/new/karsten.jpg')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Pets</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h5 class="text-uppercase mb-3">Karsten</h5>
                                <p>One of the most popular pets is the dog.from small toy dogs to large working breeds. They are also highly trainable and can be taught a variety of tricks and skills.</p>
                                <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-item mb-5">
                    <div class="row g-0 bg-light shadow overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid img-zoom h-100" src="{{url('frontend/img/blog-2.jpg')}}" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Pets</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h5 class="text-uppercase mb-3">Dog's</h5>
                                <p>Dogs are known for their loyalty and affection, and they make great companions. They come in a variety of breeds, from small toy dogs to large working breeds. They are also highly trainable and can be taught a variety of tricks and skills.</p>
                                <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <nav aria-label="Page navigation">
                      <ul class="pagination pagination-lg m-0">
                        <li class="page-item disabled">
                          <a class="page-link rounded-0" href="#" aria-label="Previous">
                            <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                          </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link rounded-0" href="#" aria-label="Next">
                            <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <div id="blogSearchContainer" >
                    <!-- Search Form Start -->
                    <div class="mb-5">
                        <div class="input-group">
                            <input type="search" id="blogSearch" name="search" class="form-control p-3" placeholder="Search Category...">
                            <button id="serachBTN" class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->

                    <!-- Category Start -->
                    <div  class="mb-5">
                        <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Categories</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="h5 bg-light shadow py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>My Pets</a>
                            <a class="h5 bg-light shadow py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Dogs</a>
                            <a class="h5 bg-light shadow py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Cats</a>
                            <a class="h5 bg-light shadow py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Fish</a>
                            <a class="h5 bg-light shadow py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Birds</a>
                        </div>
                    </div>
                    <!-- Category End -->

                    <!-- Recent Post Start -->
                    <div class="mb-5">
                        <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Recent Post</h3>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid" src="{{url('frontend/img/new/dog-3.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 d-flex align-items-center bg-light shadow px-3 mb-0">The Golden Retriever
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid" src="{{url('frontend/img/new/ricky.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 d-flex align-items-center bg-light shadow px-3 mb-0">Pet Rickey
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid" src="{{url('frontend/img/new/karsten.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 d-flex align-items-center bg-light shadow px-3 mb-0">Karsten
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid" src="{{url('frontend/img/new/dog-1.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 d-flex align-items-center bg-light shadow px-3 mb-0">Dog's and cat's
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid" src="{{url('frontend/img/new/perrot.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 d-flex align-items-center bg-light shadow px-3 mb-0">Perrot 
                            </a>
                        </div>
                    </div>
                    <!-- Recent Post End -->
                </div>
                <!-- Image Start -->
                <div class="mb-5">
                    <img src="{{url('frontend/img/new/jamie.jpg')}}" alt="" class="img-fluid rounded">
                </div>
                <!-- Image End -->

                <!-- Tags Start -->
                <div class="mb-5">
                    <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Tag Cloud</h3>
                    <div id="pet-tags" class="d-flex flex-wrap m-n1">
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