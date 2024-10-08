<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <div class="form-inline mr-auto"></div>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <div class="d-sm-none d-lg-inline-block">Hi,{{ Auth()->user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="" class="dropdown-item has-icon text-danger"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>
            </div>
        </li>

    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('home') }}">Agri Pharm</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item active">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Sections</li>

            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>About-us Section</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li><a href="{{ route('admin.aboutUs.index') }}">About-us</span></a></li>
                    <li><a href="{{ route('admin.aboutUs-settings.index') }}">settings</span></a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>Offers Section</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li><a href="{{ route('admin.offers.index') }}">Offers</span></a></li>
                    <li><a href="{{ route('admin.offers-settings.index') }}">settings</span></a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>Products Section</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li><a href="{{ route('admin.products.index') }}">Products</span></a></li>
                    <li><a href="{{ route('admin.products-settings.index') }}">settings</span></a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>Our Team Section</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    {{-- <li><a href="{{ route('admin.teamMembers.index') }}">Members</span></a></li> --}}
                    <li><a href="{{ route('admin.team-settings.index') }}">settings</span></a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>Galley Section</span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    {{-- <li><a href="{{ route('admin.teamMembers.index') }}">Members</span></a></li> --}}
                    <li><a href="{{ route('admin.gallery-settings.index') }}">settings</span></a></li>
                </ul>
            </li>
            <li class="menu-header">Payment</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                    <i class="fas fa-columns"></i>
                    <span>Incoming Invoices </span>
                </a>
                <ul class="dropdown-menu" style="display: none;">
                    <li><a href="{{ route('admin.paid') }}"><i class="fas fa-check-circle"></i>Paid</span></a></li>
                    <li><a href="{{ route('admin.pending') }}"><i class="fas fa-hourglass-start"></i>
                            Pending</span></a></li>
            </li>
        </ul>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                <i class="fas fa-columns"></i>
                <span>Outgoing Invoices</span>
            </a>
            <ul class="dropdown-menu" style="display: none;">
                <li><a href="{{ route('admin.paidOutgoing') }}"><i class="fas fa-check-circle"></i>Paid</span></a></li>
                <li><a href="{{ route('admin.pendingOutgoing') }}"><i class="fas fa-hourglass-start"></i> Pending</span></a>
                </li>

            </ul>
        </li>
        </ul>
    </aside>
</div>
