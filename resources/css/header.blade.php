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
                                <a class="nav-link" href="#gallery">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#packages">Packages</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-3 col-lg-auto">
                <ul class="list-unstyled d-flex m-0">
                    <?php  if ($user->isAdmin == 2) : ?>
                        <li class="d-none d-lg-block dropdown">
                            <a href="#" class="text-uppercase mx-2 dropdown-toggle" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                                <li><a class="dropdown-item" href="#settings">Settings</a></li>
                                <li><a class="dropdown-item" href="#order-history">Riwayat Pemesanan</a></li>
                                <li><a class="dropdown-item" href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="d-none d-lg-block">
                            <a href="/login" class="text-uppercase mx-2">Login<span class="wishlist-count"></span></a>
                        </li>
                        <li class="d-none d-lg-block">
                            <a href="/register" class="text-uppercase mx-5">Register<span class="wishlist-count"></span></a>
                        </li>
                    <?php endif; ?>
                    <li class="search-box mx-2">
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
                <button type="submit" class="search-submit border-0 position-absolute bg-white"
                    style="top: 15px;right: 15px;">
                    <svg class="search" width="24" height="24">
                        <use xlink:href="#search"></use>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</nav>
