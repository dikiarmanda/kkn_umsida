<!-- Administrator -->

<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <!-- FIXME: set active sidebar sesuai halaman yang dibuka -->
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">ADMINISTRATOR</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#menuKKN" aria-expanded="false" aria-controls="menuKKN">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Daftar KKN</span>
                <i class="menu-arrow"></i>
            </a>
            <!-- FIXME: penamaan id sub menu sesuaikan dengan menunya -->
            <div class="collapse" id="menuKKN">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">Daftar Mahaiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/forms/basic_elements.html">Tambah Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
                aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Data Mahasiswa</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Data Diterima</a>
                    </li>
                </ul>
            </div>
            <!-- FIXME: struktur html nya diperhatikan lagi kalau nambah sub menu tinggal bikin li seperti menu di atas -->
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Data Diproses</a>
                    </li>
                </ul>
            </div>
        </li>
</nav>
<!-- TODO: list menu sementara -->
<!-- 
ADMIN
Dashboard
Peserta KKN
- Daftar Peserta (Tervalidasi, Belum Tervalidasi)
- Plotting Peserta
Kelompok KKN
- Daftar Kelompok (Tambah Kelompok)
Dosen Pendamping Lapangan
- Daftar Dosen Pendamping (Tambah Dosen Pendamping)
====================================================
DRPM
Semua menu admin
Master
- Master KKN
- Plotting Admin
-->