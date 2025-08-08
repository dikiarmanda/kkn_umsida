<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo ms-5 me-5" href="index.html"><img
                src="<?= base_url('public/images/auth/imagelogin.png') ?> " /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img
                src="<?= base_url('public/images/auth/imagelogin.png') ?> " alt="logo" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <span class="app-name fw-bold fs-6 ms-3">SISTEM INFORMASI KKN UMSIDA</span>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                    <img src="<?= base_url('public/images/dashboard/profile.jpg') ?> " alt="profile" />
                    <!-- TODO: ganti gambar dengan nama user yang login, buat menggunakan button -->
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item">
                        <i class="ti-settings text-primary"></i> Settings
                    </a>
                    <!-- TODO: ganti setting dengan change role jika role lebih dari 1 -->
                    <a class="dropdown-item" href="<?= base_url('/') ?>">
                        <i class="ti-power-off text-primary me-2"></i> Logout
                    </a>

                </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>