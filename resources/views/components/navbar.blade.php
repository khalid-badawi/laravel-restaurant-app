<nav class="navbar navbar-light bg-light fixed-top navbar-expand-lg px-5 py-3">
    <div class="container-fluid">
        <div class="navbar-brand me-auto">
            <h5>Bistro Bliss</h5>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} nav-element mx-lg-2" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }} mx-lg-2" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('menu') ? 'active' : '' }} mx-lg-2" aria-current="page" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pages') ? 'active' : '' }} mx-lg-2" href="{{ route('pages') }}">Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }} mx-lg-2" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="button-container">
            <a href="#" class="login-button">Book a table</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

@vite(['resources/css/components/navbar.css'])
