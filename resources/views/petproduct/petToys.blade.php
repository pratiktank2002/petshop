@extends('frontend.layouts.main')

@section('main-container')

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="border-bottom border-5 border-primary mx-auto item-center ps-5 mb-5" style="max-width: 600px;">
            <h1 class="text-primary text-uppercase">Add New pet-Toys</h1>
        </div>
        <div class="container">
            <form action="{{ route('pettoys_store')}}" method="post" enctype="multipart/form-data" class="bg-light shadow" >
                @if ($errors->any())
                    <div class="alert alert-danger" id="danger-alert" >
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row g-5">             
                    <div class="col-lg-12 border-5 border-primary">
                        <div class="bg-light rounded p-5">
                            <h3 class=" border-start border-5 border-primary text-uppercase ps-3 mb-4">Add New Product </h3>
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12">
                                        <input type="text" name="toy_name" value="{{old('toy_name')}}" class="form-control bg-white border-0 px-4" placeholder="Toy Name" style="height: 55px;">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="toy_price" value="{{old('toy_price')}}" class="form-control bg-white border-0 px-4" placeholder="Toy price" style="height: 55px;">
                                    </div>

                                    <div class="col-12">
                                        <textarea name="toy_detail" id="editor" :value="{{old('toy_detail')}}" class="form-control bg-white border-0 px-4 py-3" rows="8" placeholder="Toy Detail"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <label for="">Add image :-</label>
                                        <input type="file" name="toy_image" value="{{old('toy_image')}}" class="form-control bg-white pt-1 border-0 px-4" placeholder="Toy image" style="height: 55px;">
                                    </div>
                                </div>
                        </div>
                    </div>

                </div>
                <div class="col-12">
                    <button name="" class="btn btn-primary w-100 py-3" type="submit">Add Toy</button>
                </div>
        </form>
        </div>
    </div>
    <!-- Contact End -->
    
@endsection