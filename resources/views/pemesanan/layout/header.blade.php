<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
        <a class="navbar-brand" href="#">
            <img src="/image/logo-datar.png" alt="Logo" style="height: 40px;"> <!-- Adjust height as needed -->
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-5 w-100">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-menu"></i>
                  <span class="nav-profile-name">Menu</span>
                </a>
                <div class="dropdown-menu dropdown-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="/kallos-moments#home">
                        <i class="mdi mdi-home text-secondary"></i>
                        Home
                    </a>
                  <a class="dropdown-item">
                    <i class="mdi mdi-information text-secondary"></i>
                    About Us
                  </a>
                  <a class="dropdown-item">
                    <i class="mdi mdi-camera text-secondary"></i>
                    Gallery
                  </a>
                  <a class="dropdown-item">
                    <i class="mdi mdi-package-variant text-secondary"></i>
                    Packages
                  </a>
                  <a class="dropdown-item">
                    <i class="mdi mdi-cellphone text-secondary"></i>
                    Contact
                  </a>
                </div>
              </li>

            <li class="nav-item nav-search d-none d-lg-block w-100">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>

        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-toggle="dropdown" id="profileDropdown">
                  <i class="mdi mdi-account-circle text-secondary" style="font-size: 24px; margin-right: 8px;"></i>
                  <span class="nav-profile-name">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <div class="dropdown-header text-center">
                      {{-- <img src="images/profile-pic.jpg" alt="Profile Picture" class="rounded-circle mb-2" style="width: 60px; height: 60px;"> --}}
                      <h6 class="dropdown-header-name mb-0">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</h6>
                      <small class="text-muted">{{ Auth::check() ? Auth::user()->email : 'guest@example.com' }}</small>
                  </div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                      <i class="mdi mdi-settings text-primary mr-2"></i>
                      <span>Settings</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="/kallos-moments">
                      <i class="mdi mdi-logout text-danger mr-2"></i>
                      <span>Logout</span>
                  </a>
              </div>

          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
