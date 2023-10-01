{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <!-- e mail -->
        <div>
            <x-input-label for="email" :value="__('email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
        <a href="{{route('google-auth')}}"
            <x-primary-button class="flex items-center mt-4 ml-3 m-0 ">
                {{ __('Log in with google') }}
            </x-primary-button>
            @if($errors->has('error'))
                <script>
                    alert("{{ $errors->first('error') }}");
                </script>
            @endif
        </a>

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
            <div class="row g-4">
                <div class="mx-auto col-lg-5 bg-light shadow-lg pt-2">
                    <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
                        <h1 class="text-primary text-uppercase">Login</h1>
                    </div>
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf
                        <div class="row g-1 text-gray">
                            <div class="form-floating mb-3">
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
                            <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                    </label>
                                    <button name="login" class="btn btn-primary w-20 py-3" type="submit">Login</button>
                                </div>
                            <!-- Remember Me Over -->
                            
                            <div class="block mt-4">
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                                
                            </div>
                            
                        </div>
                        <div class="mx-auto col-6 mt-4 mb-3 text center">
                            <a href="{{route('google-auth')}}"
                                <button name="" class="btn btn-primary w-100 py-3" type="submit">Login With Google</button>
                                @if($errors->has('error'))
                                    <script>
                                        alert("{{ $errors->first('error') }}");
                                    </script>
                                @endif
                            </a>
                            {{-- <a href="{{route('login-facebook')}}"
                                <button name="" class="mt-2 btn btn-primary w-100 py-3" type="submit">Login With Facebook</button>
                                @if($errors->has('error'))
                                    <script>
                                        alert("{{ $errors->first('error') }}");
                                    </script>
                                @endif
                            </a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

@endsection
