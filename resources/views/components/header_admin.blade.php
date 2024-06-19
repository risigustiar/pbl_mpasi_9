<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion"
        id="accordionSidebar">
        <a
            class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class="sidebar-brand-icon">
                <img src="{{ asset('img/logo-web.png') }}"
                    style="border-radius: 5px;">
            </div>
            <div class="sidebar-brand-text mx-3">BabyBites</div>
        </a>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="/register/admin">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <hr class="sidebar-divider">
        <div class="sidebar-heading">
            Menu Admin
        </div>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                data-target="#collapseBootstrap"
                aria-expanded="true" aria-controls="collapseBootstrap"
                title="Halaman Kelola">
                <i class="far fa-fw fa-window-maximize"></i>
                <span>Halaman Kelola</span>
            </a>
            <div id="collapseBootstrap" class="collapse"
                aria-labelledby="headingBootstrap"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Kelola Resep</h6>
                    <a class="collapse-item" href="{{ route('resep') }}">Resep
                        MPASI</a>
                </div>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse"
                data-target="#collapseTable" aria-expanded="true"
                aria-controls="collapseTable">
                <i class="fas fa-fw fa-table"></i>
                <span>Cek Aktivitas Pengguna</span>
            </a>
            <div id="collapseTable" class="collapse"
                aria-labelledby="headingTable" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Tables</h6>
                    <a class="collapse-item"
                        href="{{ route('riwayat_admin')}}">Riwayat</a>
                </div>
            </div>
        </li>
        <li class="nav-item">

            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin"></div>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->
                <nav
                    class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
                    <button id="sidebarToggleTop"
                        class="btn btn-link rounded-circle mr-3" style="color: #ffffff">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#"
                                id="searchDropdown" role="button"
                                data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div
                                class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="navbar-search"
                                    action="{{ route('cari_resep_admin') }}"
                                    method="GET">
                                    <div class="input-group">
                                        <input type="text"
                                            class="form-control bg-light border-1 small"
                                            placeholder="ketik kata kunci pencarian..."
                                            aria-label="Search"
                                            aria-describedby="basic-addon2"
                                            style="border-color: #ffffff;"
                                            name="cari">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary"
                                                type="submit">
                                                <!-- Ubah type button ke submit -->
                                                <i
                                                    class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item no-arrow">
                            <div>
                                <button class="custom-btn btn-1"
                                    style="border-radius: 5px; background-color: #010101; color: #ffffff; border: none; padding: 10px 20px; cursor: pointer; display: inline-block; margin-top: 10%;"
                                    onmouseover="this.style.backgroundColor='#ff0000';"
                                    onmouseout="this.style.backgroundColor='#010101';"
                                    onclick="confirmLogout()">
                                    <span class="font-weight-bold"
                                        style="font-size: 0.8em; color: inherit; text-decoration: none;">
                                        <i class="fa fa-sign-out-alt"></i>
                                        Logout
                                    </span>
                                </button>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- Topbar -->
