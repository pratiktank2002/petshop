@extends('frontend.layouts.main')

@section('main-container')
<div class="card-body text-center">
    <script src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="{{ $key }}"
            data-amount="{{ $amount * 100 }}"
            data-buttontext="Pay ₹ {{ $amount }}"
            data-name="{{ $name }}"
            data-description="{{ $description }}"
            data-image="{{ $image }}"
            data-order_id="{{ $order_id }}"
            data-prefill.name="{{ $prefill['name'] }}"
            data-prefill.email="{{ $prefill['email'] }}"
            data-theme.color="{{ $theme['color'] }}">
    </script>
</div>
@endsection