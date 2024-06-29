<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
    <!-- title -->
    <title>Shop</title>
    <!-- Favicons -->
    <link href="img/letter-a-icon-png-8847.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min(shop).css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
</head>

<body>
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                <h1><a href="{{ route('home') }}" class="scrollto">Agri Pharm</a></h1>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{route('aboutUs')}}">About Us</a></li>
                    <li><a href="{{route('Offers')}}">Offers</a></li>
                    <li><a href="{{route('team')}}">Team</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>

    @yield('content')


    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <script src="{{ asset('frontend/assets/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main(shop).js') }}"></script>
</body>

</html>
