<!DOCTYPE html>
<html>

<head>
    <title>Login </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/login.css') }}">
</head>

<body>
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="login-form">
        <div class="logo">
            <a href="{{route('home')}}"><img src="{{ asset('img/letter-a-icon-png-8847.png') }}" alt=""></a>
        </div>
        <div class="title-text">
            <h3>Log in to Your Account</h3>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="container">
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" placeholder="Email Aderss" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>


                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" placeholder="Password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>
            </div>
            <div class="button"> <button type="submit" class="bn632-hover bn18">Log in</button>
            </div>

            <div class="new-account">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot your password?</a>
                @endif
                <p>Don't have an account? <a href="{{route('register')}}">Sign up</a></p>
            </div>
        </form>
    </div>
    <div class="image">
        <img src="{{ asset('img/letter-a-icon-png-8847.png') }}" alt="">
    </div>
</body>

</html>
