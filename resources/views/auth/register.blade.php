{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

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
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('frontend.layouts.authlayouts')

@section('main-container')

<!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
        <a href="{{url('/')}}" class="navbar-brand ms-lg-5">
            <h1 class="m-0 text-uppercase text-dark"><i class="bi bi-shop fs-1 text-primary me-3"></i>Pet Zone</h1>
        </a>
    </nav>
<!-- Navbar End -->

    <!-- Login Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            
            <div class="row g-5">
                <div class="mx-auto col-lg-7 bg-light shadow pt-2">
                    <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                        <h1 class="text-primary text-uppercase">Register</h1>
                    </div>
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf
                        <div class="row g-1 text-gray">
                            <div class="form-floating ">
                                <input type="text" 
                                    class="form-control" 
                                    :value="old('name')"
                                    id="name" name="name"
                                    placeholder="name@example.com">
                                <label for="name">Name</label>
                            </div>
                            <span class="text-danger">
                                @error('name')
                                    {{$message}}
                                @enderror
                            </span>

                            <div class="form-floating ">
                                <input type="text" 
                                    class="form-control" 
                                    :value="old('email')"
                                    id="email" name="email"
                                    placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>
                            <span class="text-danger">
                                @error('email')
                                    {{$message}}
                                @enderror
                            </span>

                            <div class="form-floating">
                                <input type="password" 
                                    class="form-control" 
                                    id="password" name="password"
                                    placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <span class="text-danger">
                                @error('password')
                                    {{$message}}
                                @enderror
                            </span>

                            <div class="form-floating">
                                <input type="password" 
                                    class="form-control" 
                                    id="password_confirmation" name="password_confirmation"
                                    placeholder="password_confirmation">
                                <label for="password_confirmation">Confirm Password</label>
                            </div>
                            <span class="text-danger">
                                @error('password_confirmation')
                                    {{$message}}
                                @enderror
                            </span>

                            <!-- Remember Me -->
                                <div class="block mt-4">
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                </div>
                            <!-- Remember Me Over -->
                                <div class="item-center mt-2 mt-2 mb-2">
                                    <button name="Register" class="btn btn-primary w-100 py-3 " type="submit">Register</button>
                                </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Login End -->
    
@endsection


