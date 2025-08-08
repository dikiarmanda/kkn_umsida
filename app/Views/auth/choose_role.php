<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM INFORMASI KKN</title>
    <!-- NOTE: minusnya kalau ga pakai template, ketika mau ganti title jadi harus ubah semua file yang ada titlenya satu per satu -->
    <link rel="shortcut icon" href="<?= base_url() ?>public/assets/img/favicon.png" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('public/assets/css/choose_role.css') ?>">
</head>
<!-- NOTE: sebisa mungkin pakai template jadi bootstrap yang di style.css template bisa dipakai, ga bikin css sendiri dari 0 -->
<!-- NOTE: kalau memang diperlukan custom css dibuat lebih specific untuk selectornya atau pakai id -->

<body>

    <div class="role-container">
        <div class="brand-logo">
            <img src="<?= base_url('public/images/auth/imagelogin.png') ?>" alt="logo">
        </div>
        <h4 style="color: grey; font-size: 20px; font-family: 'Segoe UI', Tahoma, sans-serif; text-align: center;">
            Login Sebagai
        </h4>

        <br>

        <?php if (!empty($roles)): ?>
            <?php foreach ($roles as $role): ?>
                <a href="<?= base_url('set-role/' . $role) ?>" class="role-btn">
                    <?= ucfirst($role) ?>
                </a>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="alert-warning">Tidak ada role yang tersedia.</div>
        <?php endif; ?>
    </div>

</body>

</html>