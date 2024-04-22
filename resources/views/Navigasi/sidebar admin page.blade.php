<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Data</div>
                <a class="nav-link" href="{{ route('data-anggota') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>Data Akun
                </a>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Data Barang
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('benih') }}">Benih</a>
                        <a class="nav-link" href="{{ route('pupuk') }}">Pupuk</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Pengelolaan</div>
                <a class="nav-link" href="{{ route('data-pemesanan') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>Data Pemesanan
                </a>
                <!-- <a class="nav-link" href="{{ route('data-bantuan') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>Data Bantuan
                </a> -->
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as: {{ Auth::user() }}</div>
        </div>
    </nav>
</div>