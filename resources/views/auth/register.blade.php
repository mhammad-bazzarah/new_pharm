<!DOCTYPE html>
<html>

<head>
    <title>SignUp </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/signup.css') }}">
</head>

<body>
    <div class="signup-form">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('img/letter-a-icon-png-8847.png') }}" alt=""></a>
        </div>
        <div class="title-text">
            <h3>Create an Account</h3>
        </div>
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="container">
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" placeholder="Your Name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" placeholder="Your Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" placeholder="Enter password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password"
                        placeholder="Confirm Password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <!-- Address -->
                <div>
                    <x-input-label for="selectAddress" :value="__('Address')" />
                    <select class="form-select" id="selectAddress" name="address">
                        <option value="lattakia">Lattakia</option>
                        <option value="tartous">Tartous</option>
                        <option value="jablah">Jablah</option>
                        <option value="banias">Banias</option>
                        <option value="homs">Homs</option>
                        <option value="damascus">Damascus</option>
                        <option value="aleppo">Aleppo</option>
                        <option value="daraa">Daraa</option>
                        <option value="alhasaka">Alhasaka</option>
                    </select>
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />

                </div>
                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
                <span id="test"></span>
                <!-- phone -->
                <div>
                    <x-input-label for="phone" :value="__('Phone')" />
                    <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone"
                        :value="old('phone')" required autofocus autocomplete="phone" placeholder="Your Phone Number" />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>
            </div>
            <div class="button"><button type="submit" class="bn632-hover bn18">Sign Up</button></div>
        </form>
        <div class="login-link">
            <p>Already have an account? <a href="{{ route('login') }}">Log in</a></p>
        </div>
    </div>
    <div class="image">
        <img src="{{ asset('img/letter-a-icon-png-8847.png') }}" alt="">
    </div>

    <script>

document.addEventListener('DOMContentLoaded', function() {
       document.getElementById('selectAddress').addEventListener('change', function() {
            var location = this.value;
            var latitude;
            var longitude;

            // Get latitude and longitude values based on the selected location
            if (location == 'lattakia') {
                latitude = '35.4011';
                longitude = '35.9487';
            } else if (location == 'tartous') {
                latitude = '34.889';
                longitude = '35.8866';
            } else if (location == 'jablah') {
                latitude = '35.3621';
                longitude = '35.9276';
            } else if (location == 'banias') {
                latitude = '34.1893';
                longitude = '35..9537';
            } else if (location == 'homs') {
                latitude = '34.7268';
                longitude = '35.7234';
            } else if (location == 'damascus') {
                latitude = '33.5102';
                longitude = '36.2913';
            } else if (location == 'aleppo') {
                latitude = '36.2012';
                longitude = '37.1612';
            } else if (location == 'daraa') {
                latitude = '32.6189';
                longitude = '36.1021';
            } else if (location == 'alhasaka') {
                latitude = '36.5024';
                longitude = '40.7477';
            }
            document.getElementById('latitude').value = latitude;
            document.getElementById('longitude').value = longitude;

        console.log(location);
        console.log(latitude);
        console.log(longitude);

        });
    });
    </script>
</body>

</html>
