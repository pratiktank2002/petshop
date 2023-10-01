@extends('frontend.layouts.main')

@section('main-container')

<div class="container-fluid">
<div class="container">

    {{-- <div id="explode-effect" > --}}
        <div  class="row justify-content-center">
            <div class="col-md-8 pt-3">
                <div class="card bg-light shadow border-light border-primary">
                    <div class="card-header text-center pt-1 ">
                        You will be charged Rs.{{ number_format($plan->price, 2) }} for {{ $plan->plan_name }} Plan .
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                {{-- <hr> --}}
                                <div class="card-body text-center">
                                    <form action="{{ route('subscription.create') }}" method="POST" >
                                        <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
                                        @csrf
                                        <script src="https://checkout.razorpay.com/v1/checkout.js"
                                                data-key="{{ env('RAZORPAY_KEY') }}"
                                                data-amount="{{$plan->price*100}}"
                                                data-buttontext="Pay ₹ {{$plan->price}}"
                                                data-name="{{$plan->plan_name}}"
                                                data-description="{{$plan->description}}"
                                                data-image="{{url('frontend/img/petshop-2.png')}}"
                                                data-prefill.name="{{auth()->user()->name}}"
                                                data-prefill.email="{{auth()->user()->email}}"
                                                {{-- data-prefill.Contact=""	 --}}
                                                data-theme.color="#ff7529">
                                        </script>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
    


</div>
</div>
</div>

{{-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function openRazorpay() {
        var name = document.getElementById('card-holder-name').value;
        document.getElementById('name').value = name;
        var options = {
            "key": "{{ env('RAZORPAY_KEY') }}",
            "amount": "{{ $plan->price }}",
            "name": "PET-SHOP",
            "description": "{{ $plan->plan_name }}",
            "image": "https://laraveltuts.com/wp-content/uploads/2022/08/laraveltuts-rounde-logo.png",
            "prefill": {
                "name": name
            },
            "theme": {
                "color": "#ff7529"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
        event.preventDefault();
    }
</script> --}}

    
{{-- <script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ env('STRIPE_KEY') }}')
   
    const elements = stripe.elements()
    const cardElement = elements.create('card')
   
    cardElement.mount('#card-element')
   
    const form = document.getElementById('payment-form')
    const cardBtn = document.getElementById('card-button')
    const cardHolderName = document.getElementById('card-holder-name')
    // const cardHolderAddress = document.getElementById('card-holder-address')
   
    form.addEventListener('submit', async (e) => {
        e.preventDefault()
   
        cardBtn.disabled = true
        const { setupIntent, error } = await stripe.confirmCardSetup(
            cardBtn.dataset.secret, {
                payment_method: {
                    card: cardElement,
                    billing_details: {
                        name: cardHolderName.value,
                        // address: cardHolderAddress.value
                    }   
                }
            }
        )
   
        if(error) {
            cardBtn.disable = false
        } else {
            let token = document.createElement('input')
            token.setAttribute('type', 'hidden')
            token.setAttribute('name', 'token')
            token.setAttribute('value', setupIntent.payment_method)
            form.appendChild(token)
            form.submit();
        }
    })
</script> --}}
@endsection