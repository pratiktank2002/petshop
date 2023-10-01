@extends('frontend.layouts.main')

@section('main-container')

<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-lg-7">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                <div class="bg-light shadow p-4">
                    <div class="border-start border-5 border-primary ps-5 mb-5">
                        <h1 class="text-primary text-uppercase">Edit Pets Detail</h1>
                    </div>
                    <form action="{{route('update',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                         <div class="row g-2">
                            <div class="col-xs-12 col-sm-12 col-md-12 pb-2">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" value="{{ $product->pet_name }}" class="form-control" placeholder="Name" >
                                </div>
                            </div>
                            <hr>
                            <div class="col-xs-12 col-sm-12 col-md-12 pb-2">
                                <div class="form-group">
                                    <strong>Age:</strong>
                                    <input type="text" name="age" value="{{ $product->age }}" class="form-control" placeholder="Name" >
                                </div>
                            </div>
                            <hr>
                            <div class="col-xs-12 col-sm-12 col-md-12 pb-2">
                                <div class="form-group">
                                    <strong>category:</strong>
                                    <select class="mt-1" name="category" class="form-control bg-white border-0 px-4" placeholder="Your Pet category" style="height: 55px;">
                                        <option selected >Change category of your pet</option>
                                        <option value="cat">cat</option>
                                        <option value="dog">dog</option>
                                        <option value="fish">fish</option>
                                        <option value="birds">birds</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="col-xs-12 col-sm-12 col-md-12 pb-2">
                                <div class="form-group">
                                    <strong>Detail:</strong>
                                    <textarea id="editor" class="form-control" style="height:100px" name="detail" placeholder="Detail">{!! $product->detail !!}</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="col-xs-12 col-sm-12 col-md-12 pb-2">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                    <img class="d-block mx-auto pt-1" src="/images/{{ $product->image }}" width="300px">
                                </div>
                            </div>
                            <div class="btn btn-block col-xs-12 col-sm-12 col-md-12 pt-2">
                              <button type="submit" class="btn btn-primary ">Update</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
                <div class="text-center pt-2">
                    <a class="btn btn-primary" href="{{ url()->previous() }}"> Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
    
@endsection