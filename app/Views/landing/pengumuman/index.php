<?= $this->extend('landing/layout/default') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <div class="card">
        <div class="card-body">
            <div class="col-lg-8 col-offsetlg-2 col-12 mx-auto">
                <div class="col-12 text-center">
                    <h1>Pengumuman</h1>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        Pellentesque aliquam tellus sit amet dui molestie, sed rhoncus quam tincidunt.</p>
                </div>
                <?php
                $i = 1;
                foreach ($pengumumans as $pengumuman) {
                ?>
                    <div class="col-12 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="<?= base_url('/pengumuman/detail/' . $pengumuman['id']) ?>">
                                    <h4><?= $pengumuman['judul']; ?></h4>
                                </a>
                                <small><?= $pengumuman['updated_at']; ?></small>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>