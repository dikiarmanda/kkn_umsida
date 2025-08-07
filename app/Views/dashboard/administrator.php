<!-- <h1>Dashboard Administrator</h1> -->
<!-- <p>Selamat datang, <?= session()->get('user_name') ?>!</p> -->
<!-- <a href="<?= base_url('/') ?>">Logout</a> -->

<div class="card-body">
    <!-- <h4 class="card-title">Default form</h4>
    <p class="card-description"> Basic form layout </p> -->
    <form class="forms-sample">
        <div class="form-group">
            <label for="exampleInputUsername1">Nama</label>
            <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">NIM</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Jurusan</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputConfirmPassword1">Jenis KKN</label>
            <input type="password" class="form-control" id="exampleInputConfirmPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <label class="form-check-label text-muted">
                <input type="checkbox" class="form-check-input" required>
                <a href="#">Remember me</a>
                <i class="input-helper"></i></label>
        </div>
        <button type="submit" class="btn btn-primary me-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
    </form>
</div>