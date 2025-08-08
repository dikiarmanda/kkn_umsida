<?php
echo $this->include('template/head');
?>
<div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <?= $pagecontent ?>
    </div>
</div>
<?= $this->include('template/footer') ?>