
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
              <div class="navbar-brand-wrapper d-flex justify-content-center">
          <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
            <a class="navbar-brand brand-logo" href="index.html"><img src="../../image/logo-datar.png" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-sort-variant"></span>
            </button>
          </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <ul class="navbar-nav mr-lg-4 w-100">
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
            {{-- <li class="nav-item dropdown mr-1">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-message-text mx-0"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                      <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="item-content flex-grow">
                    <h6 class="ellipsis font-weight-normal">David Grey
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>

              </div>
            </li>
            <li class="nav-item dropdown mr-4">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell mx-0"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item">
                  <div class="item-thumbnail">
                    <div class="item-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="item-content">
                    <h6 class="font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
              </div>
            </li>--}}
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-toggle="dropdown" id="profileDropdown">
                    <i class="mdi mdi-account-circle text-primary" style="font-size: 24px; margin-right: 8px;"></i>
                    <span class="nav-profile-name">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <div class="dropdown-header text-center">
                        {{-- <img src="images/profile-pic.jpg" alt="Profile Picture" class="rounded-circle mb-2" style="width: 60px; height: 60px;"> --}}
                        <h6 class="dropdown-header-name mb-0">{{ Auth::check() ? Auth::user()->name : 'Guest' }}</h6>
                        <small class="text-muted">{{ Auth::check() ? Auth::user()->email : 'guest@example.com' }}</small>
                    </div>
                    <div class="dropdown-divider"></div>
                    {{-- <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class="mdi mdi-settings text-primary mr-2"></i>
                        <span>Settings</span>
                    </a> --}}
                    <!-- HTML untuk tombol Logout -->
<a class="dropdown-item d-flex align-items-center" href="#" onclick="konfirmLogout(event);">
    <i class="mdi mdi-logout text-danger mr-2"></i>
    <span>Logout</span>
</a>

<!-- Form logout -->
<form id="logout-form" action="/logout" method="POST" style="display: none;">
    <!-- Tambahkan token CSRF jika diperlukan -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

<script>
    function konfirmLogout(event) {
        event.preventDefault(); // Mencegah aksi default
        if (confirm("Apakah Anda yakin ingin keluar?")) {
            document.getElementById('logout-form').submit(); // Submit form jika dikonfirmasi
        }
    }
</script>

                </div>
            </li>

          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <div class="container-fluid page-body-wrapper">

