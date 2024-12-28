
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="/admin/dashboard">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-account-box menu-icon"></i>
              <span class="menu-title">Data User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <a class="dropdown-item d-flex align-items-center" href="/admin-user">
                    <i class="mdi mdi-account-multiple text-dark mr-2"></i>
                    <span>Pelanggan</span>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="/admin-fotografer">
                    <i class="mdi mdi-camera text-dark mr-2"></i>
                    <span>Fotografer</span>
                </a>
              </ul>
            </div>
          </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin-pemesanan">
              <i class="mdi mdi-shopping menu-icon"></i>
              <span class="menu-title">Pemesanan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin-keuangan">
              <i class="mdi mdi-cash-multiple menu-icon"></i>
              <span class="menu-title">Keuangan</span>
            </a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="/admin-jadwal_kerja">
            <i class="mdi mdi-calendar-multiple menu-icon"></i>
            <span class="menu-title">Jadwal Kerja</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/admin-kategori">
            <i class="mdi mdi-camera-iris menu-icon"></i>
            <span class="menu-title">Kategori Paket</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/admin-gallery">
              <i class="mdi mdi-image menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
        </li>

      </ul>
    </nav>
