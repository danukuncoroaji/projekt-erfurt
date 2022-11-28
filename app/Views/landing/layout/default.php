<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Informasi Pengaduan Desa Pojok</title>

    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('assets/images/neptune.png');?>" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/images/neptune.png');?>" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <style>
        body {
            background: url('<?=base_url(' assets/images/background.jpg');?>');
            background-size: contain;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SIPDEPO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?=base_url('/');?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('/pengumuman');?>">Pengumuman</a>
                    </li>
                </ul>
                <div>
                    <a href="<?=base_url('/app/login');?>" class="btn btn-primary mr-2" type="submit">Masuk</a>
                    <a href="<?=base_url('/app/register');?>" class="btn btn-outline-success" type="submit">Daftar</a>
                </div>
            </div>
        </div>
    </nav>
    <?=$this->renderSection('content')?>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #2c3e50;">

        <!-- Section: Links  -->
        <section class="pt-4">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem"></i>SIPDEPO
                        </h6>
                        <p>
                            sidepo online adalah sarana yang disediakan pemerintah desa kedawung pojok.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Layanan
                        </h6>
                        <p>
                            <a href="<?=base_url('/app/login');?>" class="text-reset">Masuk</a>
                        </p>
                        <p>
                            <a href="<?=base_url('/app/register');?>" class="text-reset">Daftar</a>
                        </p>
                        <p>
                            <a href="<?=base_url('/app/pengumuman');?>" class="text-reset">Pengumuman</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Kontak Kami</h6>
                        <p><i class="fas fa-home"></i>Jl. Kantor Desa, Pojok, Dampit, Malang Regency, East Java 65181, Indonesia</p>
                        <p>
                            <i class="fas fa-envelope"></i>
                            desapojok11@gmail.com
                        </p>
                        <p><i class="fas fa-phone"></i> +62 821 4134 0728</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © <?= date('Y') ?> Copyright Desa Kedawung
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
</body>