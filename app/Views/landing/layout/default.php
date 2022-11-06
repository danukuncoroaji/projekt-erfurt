<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Informasi Pengaduan Desa Pojok</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <style>
        .top-background {
            background: url('<?=base_url(' assets/images/background.jpg');?>');
            background-size: contain;
            background-position: center center;
            height: 25vh;
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
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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
    <div class="top-background d-none d-md-block"></div>
    <?=$this->renderSection('content')?>
</body>