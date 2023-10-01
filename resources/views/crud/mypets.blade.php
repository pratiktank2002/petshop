@extends('frontend.layouts.main')

@section('main-container')

<div class="container-fluid p-3">

    <div class="row justify-content-center my-5 ">

        <div class="text-center  border-bottom border-3  rounded ">
          <h1 class="text-uppercase text-primary mb-0" >My Pets</h1>
        </div>

      {{-- <div class="col-md-10 pt-2 bg-primary sm:p-8 bg-primary dark:bg-gray-800 shadow sm:rounded-lg">
        <div class="text-center border-bottom rounded ">
          <h1>Pets</h1>
        </div>
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

        <table class="table table-bordered border border-dark  mt-3">
            <tr class="text-dark border-dark border-2">
              <th>no</th>
              <th>Image</th>
              <th>name</th>
              <th>detial</th>
              <th>action</th>
            </tr>
            @foreach ($products as $product)
            <tr  >
                <td>{{ ++$i }}</td>
                <td class="col-2"><img src="{{url('/images')}}/{{ $product->image }}" height="100px" width="100px"></td>
                <td>{{ $product->pet_name }}</td>
                <td>{!! $product->detail !!}</td>
                <td>
                    <form action="{{ route('destroy', $product->id) }}" method="POST">
                      @csrf
                        <a class="btn btn-dark rounded-sm" href="{{ route('show' ,$product->id) }}">Show</a>
           
                        <a class="btn btn-dark rounded" href="{{ route('edit' ,$product->id) }}">Edit</a>
                      
                        @method('DELETE')
             
                        <button type="submit" class="btn btn-danger">Delete</button>
                
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
        <div class="pull-right" style="margin-bottom:10px;">
          <a class="btn btn-success" href="{{ url('create') }}"> Add New Pet</a>
        </div>
        {!! $products->links() !!}
      </div> --}}
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success" id="success-alert">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container">
      <div class="justify-content-center text-center " style="margin-bottom:10px;">
        <a class="btn btn-primary py-2 px-3" href="{{ url('create') }}"> Add New Pet</a>
      </div>
      @foreach ($products as $product)
        @if ($product->user_id == Auth::user()->id )
          <div class=" row my-2 py-2 gx-5   border border-primary border-3 d-flex align-items-center ">
            <div class="col-lg-5 mb-5  mb-lg-0" style="min-height: 200px;">
                <div class="form-group text-center ">
                    {{-- <h2> <strong>Image:</strong> </h2> --}}
                    <img class="img-fluid img-zoom shadow w-150" src="{{url('/images')}}/{{ $product->image }}" width="400px" style="height: 300px; object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="bg-light shadow  p-4">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="form-group bg-light">
                            <h6>No :- {{ ++$i }}</h6>
                            <hr>
                            <h6 > <strong class="text-uppercase text-primary mb-0" >Name:</strong> {{ $product->pet_name }}</h6>
                            <h5></h5>
                            <hr>
                        </div>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="form-group">
                            <h4> <strong class="text-uppercase text-primary mb-0" >Details:</strong> {!! $product->detail !!}</h4>
                            <h5></h5>
                        </div>
                    </div>
                    <hr>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="btn-action d-flex justify-content-center">
                          <form action="{{ route('destroy', $product->id) }}" method="POST">
                              @csrf
                              <a class="btn btn-primary py-2 px-3" href="{{ route('show' ,$product->id) }}">Full Detail</a>
              
                            {{-- @can('edit-pet') --}}
                                <a class="btn btn-primary py-2 px-3" href="{{ route('edit' ,$product->id) }}">Edit Pet Detail</a>
                            {{-- @endcan --}}
                              {{-- <a class="btn btn-primary py-2 px-3" href="{{ route('tocart' ,$product->id) }}"><i class="bi bi-cart"></i></a> --}}
                              @method('DELETE')
                              <a type="submit" class="btn btn-danger py-2 px-3" >Delete</a>
                              
                          </form>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        @endif
      @endforeach
    </div>

  {{-- <div class="justify-content-center text-center" style="margin-bottom:10px;">
    <a class="btn btn-success py-2 px-3" href="{{ url('create') }}"> Add New Pet</a>
  </div> --}}
</div>
  
    
@endsection