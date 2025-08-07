<?php
echo $this->include('template/head');
echo $this->include('template/navbar');
?>
<div class="container-fluid page-body-wrapper">
    <?= $this->include('template/sidebar') ?> 
    <?php
        // Sidebar dinamis berdasarkan role aktif
        $role = session('role_active');
        if ($role === 'administrator') {
            echo $this->include('template/sidebar/administrator');
        } elseif ($role === 'dpl') {
            echo $this->include('template/sidebar/dpl');
        } elseif ($role === 'drpm') {
            echo $this->include('template/sidebar/drpm');
        } else {
            echo $this->include('template/sidebar/default'); // fallback opsional
        }
    ?>
    
    <div class="main-panel">
        <div class="content-wrapper">
            <?= $pagecontent ?>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div
                class="d-sm-flex justify-content-center justify-content-sm-between">
                <span
                    class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023. Premium
                    <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a>
                    from BootstrapDash. All rights reserved.</span>
                <span
                    class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
                    <i class="ti-heart text-danger ms-1"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
</div>
<?= $this->include('template/footer') ?>