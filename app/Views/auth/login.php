<!DOCTYPE html>
<html lang="en">

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <!-- FIXME: kalau sudah pakai template tidak perlu line ini sampai atas -->
        <div class="row w-100 mx-0">
          <div class="col-lg-5 mx-auto">

            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <!-- <img src="/public/images/auth/faviconumsida.png" alt="logo"> -->
                <img src="<?= base_url('public/images/auth/imagelogin.png') ?>">
              </div>
              <h4></h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                  <?= session()->getFlashdata('error') ?>
                </div>
              <?php endif; ?>
              <form class="pt-3" method="post" action="<?= base_url('process-login') ?>">
                <div class="form-group">
                  <label for="exampleInputUsername1">NIK</label>
                  <input type="text" name="nik" class="form-control form-control-lg" placeholder="NIK">
                </div>
                <div class="form-group">
                  <label for="exampleInputUsername1">Password</label>
                  <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                </div>
                <div class="mt-3 d-grid gap-2">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit"
                    class="auth-form-btn">SIGN IN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- FIXME: kalau sudah pakai template tidak perlu line ini ke bawah -->
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/template.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelector("input[name='nik']").focus();
    });
  </script>
</body>

</html>