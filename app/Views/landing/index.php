<?= $this->extend('landing/layout/default') ?>
<?= $this->section('content') ?>
<div class="container py-5">
    <div class="col-lg-8 col-offsetlg-2 col-12 mx-auto">
        <div class="row mt-2">
            <div class="col-12 text-center mb-5">
                <h1>Selamat Datang di<br>Sistem Informasi Pengaduan Desa Pojok<br>( SIPDEPO )</h1>
                <hr>
            </div>
            <div class="col-12">
                <p>In hac habitasse platea dictumst. Vivamus ut convallis risus. Donec a dolor purus. Pellentesque eros
                    ex, vehicula vitae porttitor maximus, sollicitudin ut libero. Ut vehicula massa magna, vitae
                    tincidunt turpis iaculis vitae. Nam rhoncus nisl ligula, sit amet suscipit erat ultricies et. Fusce
                    hendrerit ipsum dignissim, aliquam magna vel, luctus lectus.</p>
            </div>
            <div class="col-12 col-lg-3 col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2>1.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique orci nec lacus
                            vehicula facilisis.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2>2.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique orci nec lacus
                            vehicula facilisis.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2>3.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique orci nec lacus
                            vehicula facilisis.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2>3.</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique orci nec lacus
                            vehicula facilisis.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center mt-3">
                <hr>
            </div>
            <div class="col-12 text-center mb-3 mt-4">
                <h3>Data - data</h3>
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
                <div class="card bg-info text-white" style="height: 15vh;">
                    <div class="card-body text-center">
                        <h2><?= $jumlah_aduan_1; ?></h2>
                        <p>Aduan Pelayanan dan Fasilitas Umum</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mt-3">
                <div class="card bg-info text-white" style="height: 15vh;">
                    <div class="card-body text-center">
                        <h2><?= $jumlah_aduan_2; ?></h2>
                        <p>Aduan Pembangunan Desa</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mt-3">
                <div class="card bg-info text-white" style="height: 15vh;">
                    <div class="card-body text-center">
                        <h2><?= $jumlah_aduan_3; ?></h2>
                        <p>Aduan Pertanahan</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-4 mt-3">
                <div class="card bg-info text-white" style="height: 15vh;">
                    <div class="card-body text-center">
                        <h2><?= $jumlah_aduan_4; ?></h2>
                        <p>Aduan Perlindungan Masyarakat</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 mx-lg-auto col-md-4 mt-3">
                <div class="card bg-info text-white" style="height: 15vh;">
                    <div class="card-body text-center">
                        <h2><?= $jumlah_aduan_5; ?></h2>
                        <p>Aduan Ketentraman dan Ketertiban Umum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>