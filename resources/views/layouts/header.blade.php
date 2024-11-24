<nav class="navbar navbar-expand-lg bg-light text-uppercase fs-6 p-3 border-bottom align-items-center">
    <div class="container-fluid">
        <div class="row justify-content-between align-items-center w-100">
            <div class="col-auto">
                <a class="navbar-brand text-white" href="#home">
                    <img src="/image/kallosmoment.png" alt="icon">
                </a>
            </div>

            <div class="col-auto">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header"></div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-5 pe-2">
                            <li class="nav-item">
                                <a class="nav-link" href="/kallos-moments#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kallos-moments#about">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kallos-moments#gallery">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kallos-moments#packages">Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/kallos-moments#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-1 col-lg-auto">
                <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-5 pe-2 align-items-center">
                    @if (session('role') == 'pelanggan')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
                            <a class="dropdown-item" href="{{ route('pemesanan.riwayat') }}">Riwayat Pemesanan</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a class="dropdown-item" href="#" onclick="confirmLogout(event);">Logout</a>
                        </ul>
                    </li>
                    @else

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                            <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                        </ul>
                    </li>
                    @endif
                    <li class="search-box">
                        <a href="#search" class="search-button">
                            <svg width="24" height="24" viewBox="0 0 24 24">
                                <use xlink:href="#search"></use>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="search-popup">
        <div class="search-popup-container">
            <form role="search" method="get" class="form-group" action="">
                <input type="search" id="search-form" class="form-control border-0 border-bottom"
                    placeholder="Type and press enter" value="" name="s" />
                <button type=" submit" class="search-submit border-0 position-absolute bg-white"
                    style="top: 15px;right: 15px;">
                    <svg class="search" width="24" height="24">
                        <use xlink:href="#search"></use>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</nav>

<script>
    function confirmLogout(event) {
        event.preventDefault(); // Prevent the default action
        if (confirm("Apakah Anda yakin ingin keluar?")) {
            document.getElementById('logout-form').submit(); // Submit the form if confirmed
        }
    }
</script>
