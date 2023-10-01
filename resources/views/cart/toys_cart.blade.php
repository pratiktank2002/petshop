@extends('frontend.layouts.main')

@section('main-container')
<section class="h-100 gradient-custom">

  @if ($message = Session::get('success'))
    <div class="alert alert-success" id="success-alert">
        <p>{{ $message }}</p>
    </div>
  @endif

  {{-- <?php
  dd(($toys));
  ?> --}}

  @if(isset($toys) && $toys->isNotEmpty() )
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4 shadow bg-light">
      <div class="col-md-8 mt-3 mb-3 ">
        <div class="card mb-4 border-primary">
          <div class="card-header py-3 bg-primary">
            <h5 class="mb-0">Cart items</h5>
          </div>
          
          <div class="card-body">
            {{-- <form action="{{route('update',$product->id) }}" method="POST" enctype="multipart/form-data"> --}}
              @foreach ($toys as $key =>  $cart)
                <!-- Single item -->
                <div id="cart-item" class="row bg-light shadow">
                  
                  <div class="mt-3 col-lg-3 col-md-12 mb-4 mb-lg-0">
                    <!-- Image -->
                    
                      <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                        <img src="{{url('/images/petToys')}}/{{ $cart->product_image}}"
                          class="w-100" alt="Blue Jeans Jacket" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                        </a>
                      </div>
                    <!-- Image -->
                  </div>
    
                  <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                    <!-- Data -->
                      <p><strong> no : {{ ++$i }}</strong></p>
                      <p><strong>{{ $cart->product_name }}</strong></p>
                      <input type="hidden" name="product-name" id="product-name" value="{{ $cart->product_name }}" >
                      <input type="hidden" name="product-id" id="product-id" value="$cart->id" >
                      <p><strong>Price:</strong> ₹ {{ $cart->product_price }}</p>
                      <p><strong>Detail :</strong> {!! $cart->product_detail !!}</p>
                      <form action="{{ route('destroyproduct', $cart->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button id="cartdelete" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                          title="Remove item" href="{{route('destroyproduct',$cart->id)}} ">
                          <i class="fas fa-trash"  ><img src="https://img.icons8.com/material-rounded/24/null/delete.png"/></i>
                        </button>
                      </form>
                    <!-- Data -->
                  </div>
    
                  <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <!-- Quantity -->
                    <div class="d-flex justify-content-center item-center mb-4 btn-sm me-1 mb-2" style="max-width: 200px ">
                      <button id="addbtn" class="btn btn-primary btn-sm me-1 mb-2 px-3 me-2 dec-btn"
                      data-key="{{$key}}" data-price="{{ $cart->product_price }}">

                        <i class="fas fa-minus"><img src="https://img.icons8.com/material-rounded/24/null/minus-sign.png"/></i>
                      </button>
    
                      <div class="form-outline text-center">
                        <input id="cart{{$key}}" min="0" name="quantity" value="1" type="number" class="form-control cart-input" data-key="{{$key}}" data-price="{{ $cart->product_price }}"  />
                    
                        <h5><label class="form-label" for="cart">Quantity</label></h5>
                      </div>
    
                      <button id="dltbtn" class="btn btn-primary btn-sm me-1 mb-2 px-3 ms-2 inc-btn"
                      data-key="{{$key}}" data-price="{{ $cart->product_price }}">

                        <i class="fas fa-plus"><img src="https://img.icons8.com/ios-glyphs/30/null/filled-plus-2-math.png"/></i>
                      </button>
                    </div>
                    <!-- Quantity -->
    
                    <!-- Price -->
                    <p class="text-start text-md-center">
                      <strong>TOTAL :- </strong>
                      <strong id="totalPrice{{$key}}"  >₹ {{$cart->product_price}} </strong>

                    </p>
                    <!-- Price -->
                  </div>

                </div>
                <!-- Single item -->
                <hr class="my-4 hr-primary" />
              @endforeach
              
          </div>
        </div>
        <div class="card mb-4 border-primary">
          <div class="card-body">
            <p><strong>Expected shipping delivery</strong></p>
            <p class="mb-0" id="shipping-dates" > 06-04-2023 </p>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0 border-primary ">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
            <img class="me-2" width="45px"
              src="{{url('/public/frontend/img/razorpay-icon.svg')}}"
              alt="razorpay" />
              <a href="https://www.flaticon.com/free-icons/online-payment" title="online payment icons"></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 border-primary">
        <div class="card mb-4 border-primary mt-3">
          <div class="card-header py-3 bg-primary">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                <span id="product-total-price" class="coolPrice" >₹ </span>
                <input type="hidden" id="product-price" name="price" value="total-price">
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Gratis</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span id="sum-price" class="coolPrice" ><strong  >₹ </strong></span>
                <input type="hidden" name="final-Price" id="final-price" value="total-price" >

              </li>
            </ul>
              <form id="payment-form" action="{{ route('buyingToy') }}" method="POST">
                <input type="hidden" name="product" id="product" value="{{ $cart->Product_id }}">
                @csrf
                <input type="hidden" name="final-Price" id="final-price" value="">
                <input type="hidden" name="razorpay_order_id" id="razorpay_order_id" value="">
                <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id" value="">
                <input type="hidden" name="total_price" id="total_price" value="">

              </form>
              
              <button id="pay-button" class="btn btn-block btn-primary"  onclick="submitPaymentForm()">Pay</button>
              
              <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
              <script>
                function submitPaymentForm() {
                  var form = document.getElementById('payment-form');
                  var name = document.getElementById('product-name');
                  var amount = document.getElementById('final-price').value * 100;
                  
                  var options = {

                    key: '{{ env("RAZORPAY_KEY") }}',
                    amount: amount,
                    name: name,
                    description: '{{ $cart->product_detail }}',
                    image: '{{ $cart->product_image }}',
                    prefill: {
                      name: '{{ auth()->user()->name }}',
                      email: '{{ auth()->user()->email }}'
                    },
                    theme: {
                      color: '#ff7529'
                    },

                    "handler": function (response){
                      console.log(response);
                      document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
                      document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                      document.getElementById('final-price').value = amount / 100;
                      document.getElementById('payment-form').submit();
                    },
                  };
              
                  var rzp1 = new Razorpay(options);
              
                  rzp1.on('payment.failed', function(response){
                    console.log(response.error.code);
                    console.log(response.error.description);
                    console.log(response.error.source);
                    console.log(response.error.step);
                    console.log(response.error.reason);
                    console.log(response.error.metadata.order_id);
                    console.log(response.error.metadata.payment_id);
                  });
              
                  rzp1.open();
                }
              </script>

          </div>
        </div>
      </div>
    </div>
  </div>

  @else
    <div class="card bg-light mx-5 my-5">
      <div class="card-body">
        <div class="d-flex flex-column justify-content-center align-items-center h-100">
          <p class="text-center mb-5">Your cart is empty.</p> 
          <div class="row justify-content-between mx-auto">
            <div class="col-md-6 mb-2">

              <a class="btn btn-primary btn-block" href="{{ url('/petproduct') }}"><i class="bi bi-cart mx-1"></i>Add product</a>
            </div>
            <div class="col-md-6 mb-2">
              <a class="btn btn-primary btn-block" href="{{ url('/dashboard') }}"><i class="bi bi-cart mx-1"></i>Add Pet</a>
            </div>
          </div>
        </div>
      </div>
    </div>    
    
  @endif


</section>

@endsection