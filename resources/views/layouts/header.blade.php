<nav class="navbar navbar-expand-lg bg-light text-uppercase fs-6 p-3 border-bottom align-items-center">
    <div class="container-fluid">
      <div class="row justify-content-between align-items-center w-100">

        <div class="col-auto">
          <a class="navbar-brand text-white" href="index.html">
            <img src="image/kallosmoment.png" alt="icon">
          </a>
        </div>

        <div class="col-auto">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
            </div>

            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-5 pe-2">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Packages</a>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>

              </ul>
            </div>
          </div>
        </div>

        <div class="col-3 col-lg-auto">
          <ul class="list-unstyled d-flex m-0">
            <li class="d-none d-lg-block">
              <a href="index.html" class="text-uppercase mx-">Login<span class="wishlist-count"></span>
              </a>
            </li>
            <li class="d-none d-lg-block">
              <a href="/register" class="text-uppercase mx-5" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
                aria-controls="offcanvasCart">Register<span class="cart-count"></span>
              </a>
            </li>
            <li class="d-lg-none">
              <a href="#" class="mx-2">
                <svg width="24" height="24" viewBox="0 0 24 24">
                  <use xlink:href="#heart"></use>
                </svg>
              </a>
            </li>
            <li class="search-box" class="mx-2">
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
              style="top: 15px;right: 15px;"><svg class="search" width="24" height="24">
                <use xlink:href="#search"></use>
              </svg></button>
          </form>
        </div>
    </div>
  </nav>
