@extends('frontend.layouts.main')

@section('main-container')

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
          <div class="row gx-5">
              <div class="col-lg-13">
                  <div class="border-start border-bottom border-5 border-primary ps-5 mb-5">
                      <h1 class="text-primary text-uppercase">learn About breeds</h1>
                      {{-- <h1 class="display-5 text-uppercase mb-0">We Keep Your Pets Happy All Time</h1> --}}
                  </div>
                
                  <div class="bg-white shadow p-4">
                      <ul class="nav nav-pills border-primary border-bottom justify-content-between mb-3" id="pills-tab" role="tablist">
                          <li class="nav-item w-50" role="presentation">
                              <button class="nav-link btn btn-dark text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                  data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                  aria-selected="true">Dog's bread</button>
                          </li>
                          <li class="nav-item w-50" role="presentation">
                              <button class="nav-link btn btn-dark text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                  data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                  aria-selected="false">Cat's bread</button>
                          </li>
                      </ul>
                      <div class="tab-content" id="pills-tabContent">
                          <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                              <div class="blog-item mb-5 border border-primary ">
                                  <div class="row g-0 bg-light shadow overflow-hidden">
                                      <div class="col-12 col-sm-5 h-100">
                                          <img class="img-fluid img-zoom rounded h-100" src="{{url('frontend/img/new/jamie.jpg')}}" style="object-fit: cover;">
                                      </div>
                                      <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                          <div class="p-4" style="overflow-wrap: break-word;">
                                              <div class="d-flex mb-3">
                                                  {{-- <p class="me-3">Name : Pets</p> --}}
                                                  
                                                  <p class="me-3" >Origin : Pembrokeshire </p>
                                                  
                                                  <p class="me-3" >Life Expectancy :- 12 - 15 years</p>
                                              </div>
                                              <h5 class="text-uppercase mb-3">Name: PEMBROKE WELSH CORGI</h5>
                                              <hr>
                                              <p class="text-dark">Breed Highlight:</p>
                                              <p>Originally bred to herd cattle, sheep, and horses, the Pembroke Welsh Corgi is an active and intelligent dog breed. Easy to train and eager to learn, Pembroke's are great with children and other pets, and you can find them in four different coat colours and markings.</p>
                      
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="blog-item mb-5 border border-primary ">
                                <div class="row g-0 bg-light shadow overflow-hidden">
                                    <div class="col-12 col-sm-5 h-100">
                                        <img class="img-fluid img-zoom rounded h-100" src="{{url('frontend/img/new/dog-5.jpg')}}" style="object-fit: cover;">
                                    </div>
                                    <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                        <div class="p-4">
                                            <div class="d-flex mb-3">
                                                {{-- <p class="me-3">Name : Pets</p> --}}
                                                
                                                <p class="me-3" >Origin : Tibet  </p>
                                                
                                                <p class="me-3" >Life Expectancy :- 12 - 15 years</p>
                                            </div>
                                            <h5 class="text-uppercase mb-3">Name: LHASA APSO</h5>
                                            <hr>
                                            <p class="text-dark">Breed Highlight:</p>
                                            <p> The Lhasa Apso (pronounced "LAH-Suh-AHP-so") is a smart and wilful small dog with a big personality. They're often described as funny, merry, and eager to please.</p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="blog-item mb-5 border border-primary ">
                                <div class="row g-0 bg-light shadow overflow-hidden">
                                    <div class="col-12 col-sm-5 h-100">
                                        <img class="img-fluid img-zoom rounded h-100" src="{{url('frontend/img/new/dogs-group2.jpg')}}" style="object-fit: cover;">
                                    </div>
                                    <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                        <div class="p-4">
                                            <div class="d-flex mb-3">
                                                {{-- <p class="me-3">Name : Pets</p> --}}
                                                
                                                <p class="me-3" >Origin : Germany  </p>
                                                
                                                <p class="me-3" >Life Expectancy :- 9-10 years</p>
                                            </div>
                                            <h5 class="text-uppercase mb-3">Name: Boxer</h5>
                                            <hr>
                                            <p class="text-dark">Breed Highlight:</p>
                                            <p>Boxers are known for bursting with energy and plenty of exercise is a prerequisite for them. </p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                              <div class="blog-item mb-5 border border-primary ">
                                <div class="row g-0 bg-light shadow overflow-hidden">
                                    <div class="col-12 col-sm-5 h-100">
                                        <img class="img-fluid img-zoom rounded h-100" src="{{url('frontend/img/new/cat2.jpg')}}" style="object-fit: cover;">
                                    </div>
                                    <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                        <div class="p-4" style="overflow-wrap: break-word;">
                                            <div class="d-flex mb-3">
                                                
                                                <p class="me-3" >Origin : Iran  </p>
                                                
                                                <p class="me-3" >Life Expectancy :- 12 - 17 years</p>
                                            </div>
                                            <h5 class="text-uppercase mb-3">Name: Persian Cat</h5>
                                            <p class="text-dark">Breed Highlight:</p>
                                            <p>Long hair, docile body, flat nose and watery eyes are the main highlights of this breed.</p>
                    
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="blog-item mb-5 border border-primary ">
                                <div class="row g-0 bg-light shadow overflow-hidden">
                                    <div class="col-12 col-sm-5 h-100">
                                        <img class="img-fluid img-zoom rounded h-100" src="{{url('frontend/img/new/cat-2.jpg')}}" style="object-fit: cover;">
                                    </div>
                                    <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                        <div class="p-4" style="overflow-wrap: break-word;">
                                            <div class="d-flex mb-3">
                                                
                                                <p class="me-3" >Origin : USA   </p>
                                                
                                                <p class="me-3" >Life Expectancy :- 9 – 15 years</p>
                                            </div>
                                            <h5 class="text-uppercase mb-3">Name: Bengal Cat</h5>
                                            <p class="text-dark">Breed Highlight:</p>
                                            <p>The Bengal is a domestic cat that has physical features distinctive to the small forest-dwelling wildcats, and with the loving, dependable temperament of a family pet.</p>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="blog-item mb-5 border border-primary ">
                                <div class="row g-0 bg-light shadow overflow-hidden">
                                    <div class="col-12 col-sm-5 h-100">
                                        <img class="img-fluid img-zoom rounded h-100" src="{{url('frontend/img/new/cat.avif')}}" style="object-fit: cover;">
                                    </div>
                                    <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                                        <div class="p-4" style="overflow-wrap: break-word;">
                                            <div class="d-flex mb-3">
                                                
                                                <p class="me-3" >Origin : India  </p>
                                                
                                                <p class="me-3" >Life Expectancy :- 8 - 11 years</p>
                                            </div>
                                            <h5 class="text-uppercase mb-3">Name: Himalayan Cat</h5>
                                            <p class="text-dark">Breed Highlight:</p>
                                            <p>Himalayan Cats are a striking mix of Persian and Siamese cat breeds, having a long, silky, Persian-like coat and Siamese-like pointed colouring on the ears, tail, face, and paws. They have bright blue eyes and adore the attention and affection of their owners.</p>
                    
                                        </div>
                                    </div>
                                </div>
                              </div>
                          </div>
                      </div>
                      <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link btn btn-dark text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                aria-selected="true">1</button>
                        </li>
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link btn btn-dark text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                aria-selected="false">2</button>
                        </li>
                    </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->

@endsection