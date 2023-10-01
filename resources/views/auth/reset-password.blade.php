{{-- <x-guest-layout>
    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Reset Password') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('frontend.layouts.authlayouts')

@section('main-container')
<!-- Topbar Start -->
<div class="container-fluid border-bottom d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-4 text-center py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Our Office</h6>
                    <span>150ft Ring Road, Shital Park, The Spire-2, rajkot.</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center border-start border-end py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Email Us</h6>
                    <span>info@7technosoftsolutions.com</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4 text-center py-2">
            <div class="d-inline-flex align-items-center">
                <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                <div class="text-start">
                    <h6 class="text-uppercase mb-1">Call Us</h6>
                    <span>+91 72020 85207</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <a href="{{url('/')}}" class="navbar-brand ms-lg-5">
        <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Zone</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
<!-- Navbar End -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="row g-4">
            <div class="mx-auto col-lg-5 bg-light pt-2">
                <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                    <h1 class="text-primary text-uppercase">Reset Password</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-17">
                        <form method="POST" action="{{ route('password.store') }}" >
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="row g-1 text-gray">
                                {{-- Email --}}
                                <div class="form-floating mb-3">
                                    <input type="text" 
                                        class="form-control" 
                                        :value="old('email', $request->email)"
                                        id="email" name="email"
                                        required autofocus autocomplete="email"
                                        placeholder="name@example.com">
                                    <label for="email" value="Email" >Email address</label>
                                </div>
                                <span class="text-danger">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                </span>

                                {{-- password --}}
                                <div class="form-floating mb-3">
                                    <input type="password" 
                                        class="form-control" 
                                        id="password" name="password"
                                        placeholder="Password">
                                    <label for="password" value="password" >Password</label>
                                </div>
                                <span class="text-danger">
                                    @error('password')
                                        {{$message}}
                                    @enderror
                                </span>

                                {{-- confirm password --}}
                                <div class="form-floating mb-3">
                                    <input type="password" 
                                        class="form-control" 
                                        id="password_confirmation" name="password_confirmation"
                                        required autocomplete="new-password"
                                        placeholder="Password">
                                    <label for="password_confirmation" value="Confirm Password" >Confirm Password</label>
                                </div>
                                <span class="text-danger">
                                    @error('password_confirmation')
                                        {{$message}}
                                    @enderror
                                </span>
                                {{-- confirm password over --}}

                                <button name="Reset Password" class="btn btn-primary w-20 py-3" type="submit">Reset Password</button>
                                    
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white-50 py-4 mt-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-white" href="#">PET-SHOP</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

