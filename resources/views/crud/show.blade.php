@extends('frontend.layouts.main')

@section('main-container')

<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="form-group text-center ">
                   <h2> <strong>Image:</strong> </h2>
                    <img class="img-fluid w-100" src="/images/{{ $product->image }}" width="400px">
                </div>
            </div>
            <div class="col-lg-7">
 
                <div class="bg-light shadow p-4">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h1 class="text-primary text-uppercase">Your Pet</h1>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="form-group bg-light">
                            <h4> <strong>Owner Name:</strong> </h4>
                            {{ $product->users->name }}
                        </div>
                    </div>
                    <hr>
                    {{-- <div class="tab-content" id="pills-tabContent">
                        <div class="form-group bg-light">
                            <h4> <strong>Owner Phone Number:</strong> </h4>
                            {{ $product->owners->phone_number }}
                        </div>
                    </div>
                    <hr> --}}
                    <div class="tab-content" id="pills-tabContent">
                        <div class="form-group bg-light">
                            <h4> <strong>Pet Name:</strong> </h4>
                            {{ $product->pet_name }}
                        </div>
                    </div>
                    <hr>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="form-group bg-light">
                            <h4> <strong>Pet Price:</strong> </h4>
                            {{ $product->price }}
                        </div>
                    </div>
                    <hr>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="form-group">
                           <h4> <strong>Age:</strong> </h4>
                            {!! $product->age !!}
                        </div>
                    </div>
                    <hr>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="form-group">
                           <h4> <strong>Category:</strong> </h4>
                            {!! $product->category !!}
                        </div>
                    </div>
                    <hr>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="form-group">
                           <h4> <strong>Details:</strong> </h4>
                            {!! $product->detail !!}
                        </div>
                    </div>
                    <hr>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="form-group d-flex justify-content-between align-items-center ">
                           
                            <form action="{{ route('destroy', $product->id) }}" method="POST">
                                @csrf                       
                                <a class="btn btn-primary py-2 px-3" title="Add to cart" href="{{ route('tocart' ,$product->id) }}"><i class="bi bi-cart"></i></a>
                            </form>
                            <a class="btn btn-primary" href="{{ url()->previous() }}"> Back</a>
                        </div>
                    </div>
                </div>
                <div class="text-right pt-2">

                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection