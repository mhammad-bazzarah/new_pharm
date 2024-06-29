<header id="header">
    <div class="container">
        <div id="logo" class="pull-left">
            <h1><a href="{{ route('home') }}" class="scrollto">Agri Pharm</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            {{-- <a href="#intro"><img src="{{asset('img/logo.png')}}" alt="" title="" /></img></a> --}}
        </div>
        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                <li><a href="{{ route('Offers') }}">Offers</a></li>
                <li><a href="{{ route('shop') }}">Products</a></li>
                <li><a href="{{ route('team') }}">Team</a></li>
                <li><a href="/#gallery">Gallery</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                @auth
                    <li><a href="{{ route('weather') }}">weather</a></li>
                    {{-- welcome {{ Auth::user()->name }} --}}
                    {{-- <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li><button class="" type="submit"> Logout</button></li>
                    </form> --}}
                    {{-- <li><a href="{{ route('logout') }}">Logout</a></li> --}}
                @endauth
                @guest
                    <li><a href="{{ route('register') }}">signUp</a></li>
                @endguest

            </ul>
        </nav>
    </div>
</header>
