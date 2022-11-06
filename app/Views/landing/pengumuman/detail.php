<?= $this->extend('landing/layout/default') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <div class="col-lg-8 col-offsetlg-2 col-12 mx-auto">
        <div class="col-12 text-center">
            <h1><?= $pengumuman['judul']; ?></h1>
            <small><?= $pengumuman['updated_at']; ?></small>
        </div>
        <div class="col-12 mt-4">
            <p><?= $pengumuman['isi']; ?></p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>