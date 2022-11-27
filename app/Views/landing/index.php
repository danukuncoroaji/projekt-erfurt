<?= $this->extend('landing/layout/default') ?>
<?= $this->section('content') ?>
<div class="container py-5">
<div class="card">
        <div class="card-body">
    <div class="col-lg-8 col-offsetlg-2 col-12 mx-auto">
        <div class="row mt-2">
            <div class="col-12 text-center mb-5">
                <h1>Selamat Datang di<br>Sistem Informasi Pengaduan Desa Pojok<br>( SIPDEPO )</h1>
                <hr>
            </div>
            <div class="col-12">
                <p>sidepo online adalah sarana yang disediakan pemerintah desa kedawung pojok untuk menjembatani sekaligus memudahkan warga kedawung pojok khususnya untuk menyuarakan aspirasi maupun pengaduan kepada pemerintah desa kedawung pojok. silahkan adukan aduan anda untuk desa kedawung pojok yang lebih baik.</p>
            </div>
            <div class="col-12 col-lg-3 col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2>1.</h2>
                        <p>Tulis Aduan Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2>2.</h2>
                        <p>Pengaduan diterima dan diverifikasi.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2>3.</h2>
                        <p>Tindaklanjut.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2>4.</h2>
                        <p>Selesai.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-3">
                <hr>
            </div>
            <div class="col-12 text-center mb-3 mt-4">
                <h3>Statistik</h3>
            </div>
            <div class="col-12 col-lg-4 col-md-4">
                <div class="card bg-primary text-white">
                    <div class="card-body text-center">
                        <h2><?= $jumlah_user; ?></h2>
                        <p>Jumlah User</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4">
                <div class="card bg-warning text-white">
                    <div class="card-body text-center">
                        <h2><?= $jumlah_aduan; ?></h2>
                        <p>Jumlah Pengaduan Total</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-md-4">
                <div class="card bg-success text-white">
                    <div class="card-body text-center">
                        <h2><?= $jumlah_aduan_selesai; ?></h2>
                        <p>Jumlah Pengaduan Terselesaikan</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mt-3">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h2><?= $jumlah_aduan_1; ?></h2>
                        <p>Aduan Pelayanan dan Fasilitas Umum</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mt-3">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h2><?= $jumlah_aduan_2; ?></h2>
                        <p>Aduan Pembangunan Desa</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mt-3">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h2><?= $jumlah_aduan_3; ?></h2>
                        <p>Aduan Pertanahan</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mt-3">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h2><?= $jumlah_aduan_4; ?></h2>
                        <p>Aduan Perlindungan Masyarakat</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mx-lg-auto col-md-4 mt-3">
                <div class="card bg-info text-white">
                    <div class="card-body text-center">
                        <h2><?= $jumlah_aduan_5; ?></h2>
                        <p>Aduan Ketentraman dan Ketertiban Umum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?= $this->endSection() ?>