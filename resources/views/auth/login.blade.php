<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up & Sign In Template</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
<div class="container">
    <div class="form-container sign-up-container">
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h1>Create Account</h1>


            <x-text-input placeholder="Name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />


            <x-text-input placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />


            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password"
                          placeholder="Password"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />


            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            <button>Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h1>Sign In</h1>

            <!-- Email Address -->
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />


            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" placeholder="password"/>

            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Coders!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/script.js')}}"></script>
</body>
</html>
