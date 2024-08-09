<header id="header">
    <div class="container">
        <div id="logo" class="pull-left">
            <h1><a href="{{ route('home') }}" class="scrollto">Agri Pharm</a></h1>
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

                    @if (Auth()->user()->is_admin)
                        <li><a href="{{ route('admin.dashboard') }}">dashboard</a></li>
                    @else
                        <li class="dropdown">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="" class=" text-danger"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a>
                            </form>
                        </li>
                    @endif
                @endauth
                @guest
                    <li><a href="{{ route('register') }}">signUp</a></li>

                @endguest

            </ul>
            <div class="form-inline mr-auto"></div>

        </nav>

    </div>
</header>
