@extends('frontend.layouts.main')

@section('main-container')

    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="border-bottom border-5 border-primary mx-auto item-center ps-5 mb-5" style="max-width: 900px;">
            <h1 class="text-primary text-uppercase">Add New Products and Owner Detail</h1>
        </div>
        <div class="container">
            <form action="{{ route('store')}}" method="post" enctype="multipart/form-data" class=" bg-light" >
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
                    <div class="col-lg-6 border-end border-5 border-primary">
                        <div class="bg-light rounded p-5">
                            <h3 class=" border-start border-5 border-primary text-uppercase ps-3 mb-4">Add New Pet </h3>
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12">
                                        <input type="text" name="pet_name" value="{{old('name')}}" class="form-control bg-white border-0 px-4" placeholder="Your Pet Name" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6 ">
                                        <input type="text" name="age" value="{{old('age')}}" class="form-control bg-white border-0 px-4" placeholder="Your Pet age" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6 ">
                                        <input type="text" name="price" value="{{old('price')}}" class="form-control bg-white border-0 px-4" placeholder="Your Pet Price" style="height: 55px;">
                                    </div>
                                    <div class="col-12">
                                        {{-- <input type="text" name="category" value="{{old('category')}}" class="form-control bg-white border-0 px-4" placeholder="Your Pet category" style="height: 55px;"> --}}
                                        <select name="category" class="form-control bg-white border-0 px-4" placeholder="Your Pet category" style="height: 55px;">
                                            <option selected >Select category of your pet</option>
                                            <option value="cat">cat</option>
                                            <option value="dog">dog</option>
                                            <option value="fish">fish</option>
                                            <option value="bird">bird</option>
                                            <option value="turtle">Turtle</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <textarea type="text" name="Short_Description" value="{{old('Short_Description')}}" class="form-control bg-white border-0 px-4" placeholder="Your Pet Short Description" style="height: 55px;"></textarea>
                                    </div>
                                    
                                    {{-- <span class="text-danger">
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </span> --}}

                                    <div class="col-12">
                                        <textarea name="detail" id="editor" :value="{{old('detail')}}" class="form-control bg-white border-0 px-4 py-3" rows="8" placeholder="Your Pet Detail"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" name="Other_Information" value="{{old('Other_Information')}}" class="form-control bg-white border-0 px-4" placeholder="Other Information eg. Any allegy" style="height: 55px;">
                                    </div>

                                    <div class="col-12">
                                        <label for="">Add image :-</label>
                                        <input type="file" name="image" value="{{old('image')}}" class="form-control bg-white pt-1 border-0 px-4" placeholder="image" style="height: 55px;">
                                    </div>
                                    <div class="col-12">
                                        <input type="file" name="other_images" value="{{old('other_images')}}" class="form-control bg-white border-0 px-4" placeholder="other images of your pets" style="height: 55px;">
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- owner Form Start -->
                            <div class="bg-light rounded p-5">
                                <h3 class="text-uppercase border-start border-5 border-primary ps-3 mb-4">Owner Detail</h3>
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <input type="text" name="owner_name" value="{{old('name',auth()->user()->name)}}" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;" readonly >
                                        </div>
                                        <div class="col-12">
                                            <input type="email" name="email" value="{{old('email',auth()->user()->email)}}" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;" readonly >
                                        </div>

                                        <div class="col-12">
                                            <input type="text" name="phone_number" class="form-control bg-white border-0" placeholder="Phone Number" style="height: 55px;">
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <textarea type="text" name="address_1" class="form-control bg-white border-0" placeholder="Address-1" style="height: 55px;"></textarea>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <textarea type="text" name="address_2" class="form-control bg-white border-0" placeholder="Address-2" style="height: 55px;"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="city" class="form-control bg-white border-0" placeholder="City" style="height: 55px;">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="pincode" class="form-control bg-white border-0" placeholder="pincode" style="height: 55px;">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="state" class="form-control bg-white border-0" placeholder="state" style="height: 55px;">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="country" class="form-control bg-white border-0" placeholder="country" style="height: 55px;">
                                        </div>
                                        {{-- <div class="col-12">
                                            <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                                        </div> --}}
                                    </div>
                            </div>
                        <!-- Owner Form End -->
                    </div>
                </div>
                <div class="col-12">
                    <button name="" class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                </div>
        </form>
        </div>
    </div>
    <!-- Contact End -->

    {{-- ckeditor --}}

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
    
@endsection