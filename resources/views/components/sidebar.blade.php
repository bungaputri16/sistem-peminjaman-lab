<nav class="navbar-vertical navbar">
    <div class="nav-scroller">
        <!-- Brand logo -->
        <a class="navbar-brand" href="./index.html">
            <img src="./assets/images/brand/logo/logo.svg" alt="" />
        </a>
        <!-- Navbar nav -->
        <ul class="navbar-nav flex-column" id="sideNavbar">
            <li class="nav-item">
                <a class="nav-link has-arrow  active " href="/dashboard">
                    <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                </a>

            </li>


            <!-- Nav item -->
            <li class="nav-item">
                <div class="navbar-heading">Master Data</div>
            </li>


            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow  collapsed " href="#" data-bs-toggle="collapse"
                    data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                    <i data-feather="layers" class="nav-icon icon-xs me-2">
                    </i> Pengguna
                </a>

                <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " href="/admin">
                                Admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link has-arrow   " href="./pages/settings.html">
                                Mahasiswa
                            </a>

                        </li>
                    </ul>
                </div>

            </li>



            <li class="nav-item">
                <a class="nav-link " href="/barang">
                    <i data-feather="sidebar" class="nav-icon icon-xs me-2">
                    </i>
                    Barang
                </a>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow " href="./docs/accordions.html">
                    <i data-feather="package" class="nav-icon icon-xs me-2">
                    </i> Peminjaman
                </a>
            </li>

            <!-- Nav item -->
            <li class="nav-item">
                <a class="nav-link has-arrow " href="./docs/accordions.html">
                    <i data-feather="package" class="nav-icon icon-xs me-2">
                    </i> Pengembalian
                </a>
            </li>

        </ul>

    </div>
</nav>
