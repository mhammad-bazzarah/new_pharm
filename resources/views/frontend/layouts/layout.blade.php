<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Agricultural Pharmacy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('img/letter-a-icon-png-8847.png')}}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('frontend/assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('frontend/assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('frontend/assets/lib/aos/aos.css')}}" rel="stylesheet"> --}}


    <!-- Main Stylesheet File -->
    <link href="{{asset('frontend/assets/css/styleA.css')}}" rel="stylesheet">

    <!-----------------------Style for offers-->
    <!-- Owl carousel -->
    <!-- <link rel="stylesheet" href="{{asset('frontend/assets/offers/cssOffers/owl.carousel.min.css')}}"> -->
    <!-- <link rel="stylesheet" href="{{asset('frontend/assets/offers/cssOffers/style.css')}}"> -->
    <!-- <link href="{{asset('frontend/assets/css/offers.css')}}"> -->
    <!-- /style for Offers -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
    @include('frontend.layouts.narbar')
    @yield('content')
    @include('frontend.layouts.footer')
    <!-- loader -->
    <div class="loader"></div>
    <!-- loader -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{asset('frontend/assets/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/jquery/jquery-migrate.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/easing/easing.min.js')}}"></script>
    {{-- <script src="{{asset('frontend/assets/lib/aos/aos.js')}}"></script> --}}
    <script src="{{asset('frontend/assets/lib/superfish/hoverIntent.js')}}"></script>
    <script src="{{asset('frontend/assets/lib/superfish/superfish.min.js')}}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        data-cf-beacon="{"
        rayId":"7a3955141ada01db","token":"dab7be3e6ab04952b40d6c8e93f6cc2a","version":"2023.2.0","si":100}"
        crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    <!-- All Script to other offers offers -->

    <!-- Plugins JS -->
    <script src="{{asset('frontend/assets/js/owl.carousel.min(offers).js')}}"></script>
    <!-- /All Script for offers -->
    <!-- <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993"
        data-cf-beacon="{"
        rayId":"7a3955141ada01db","token":"dab7be3e6ab04952b40d6c8e93f6cc2a","version":"2023.2.0","si":100}"
        crossorigin="anonymous"></script> -->

    <!-- Contact Form JavaScript File -->
    <script src="{{asset('frontend/assets/js/contactform.js')}}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    <!-- for pop up-->

        @yield('scripts')
</body>

</html>
