<?=$this->extend('app/layout/default')?>
<?=$this->section('content')?>
<div class="row pb-5">
    <div class="col">
        <div class="page-description">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('app/pengaduan'); ?>">Pengaduan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pengaduan #4</li>
                </ol>
            </nav>
            <h1>Pengaduan #4</h1>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Detail</h5>
                        </div>
                        <div class="card-body pt-4">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Tanggal</label>
                                        <input type="text" class="form-control" value="2022-10-01 10:00:00" disabled>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input type="text" class="form-control" value="Pengaduan #1" disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Kategori Pengaduan</label>
                                        <input type="text" class="form-control" value="Pelayanan dan Fasilitas Umum"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Status</label>
                                        <div class="col-12">
                                            <h5><span class="badge badge-success">Selesai</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Isi Pengaduan</label>
                                        <textarea class="form-control" rows="5" disabled>Quisque posuere, massa nec sodales pharetra, risus ex elementum eros, nec auctor arcu quam quis odio. Proin faucibus ligula tortor, eu fringilla magna varius quis. Sed blandit metus at est sodales, id posuere ex scelerisque. Proin mattis purus et ligula pretium aliquet. Integer molestie sollicitudin varius. Suspendisse mauris arcu, efficitur in justo at, elementum rhoncus ante. Duis a ante eget tortor ornare tempus et ut libero. Maecenas magna sapien, suscipit in pretium eu, congue at purus. Fusce nec tortor dolor.
                                                </textarea>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="lampiran" class="form-label">Lampiran</label>
                                        <div class="row">
                                            <div class="col-12 col-lg-2 mx-0">
                                                <img src="https://picsum.photos/id/1/200/300" class="img-thumbnail w-100"
                                                    alt="...">
                                            </div>
                                            <div class="col-12 col-lg-2 mx-0">
                                                <img src="https://picsum.photos/id/2/200/300" class="img-thumbnail w-100"
                                                    alt="...">
                                            </div>
                                            <div class="col-12 col-lg-2 mx-0">
                                                <img src="https://picsum.photos/id/3/200/300" class="img-thumbnail w-100"
                                                    alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-3">
                    <hr>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h5>Update #2022-10-10</h5>
                        </div>
                        <div class="card-body pt-4">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Status</label>
                                        <div class="col-12">
                                            <h5><span class="badge badge-info">Peninjauan</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Isi</label>
                                        <textarea class="form-control" rows="5" disabled>Quisque posuere, massa nec sodales pharetra, risus ex elementum eros, nec auctor arcu quam quis odio. Proin faucibus ligula tortor, eu fringilla magna varius quis. Sed blandit metus at est sodales, id posuere ex scelerisque. Proin mattis purus et ligula pretium aliquet. Integer molestie sollicitudin varius. Suspendisse mauris arcu, efficitur in justo at, elementum rhoncus ante. Duis a ante eget tortor ornare tempus et ut libero. Maecenas magna sapien, suscipit in pretium eu, congue at purus. Fusce nec tortor dolor.
                                                </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-3">
                    <hr>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h5>Update #2022-10-15</h5>
                        </div>
                        <div class="card-body pt-4">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Status</label>
                                        <div class="col-12">
                                            <h5><span class="badge badge-warning">Pemrosesan</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Isi</label>
                                        <textarea class="form-control" rows="5" disabled>Quisque posuere, massa nec sodales pharetra, risus ex elementum eros, nec auctor arcu quam quis odio. Proin faucibus ligula tortor, eu fringilla magna varius quis. Sed blandit metus at est sodales, id posuere ex scelerisque. Proin mattis purus et ligula pretium aliquet. Integer molestie sollicitudin varius. Suspendisse mauris arcu, efficitur in justo at, elementum rhoncus ante. Duis a ante eget tortor ornare tempus et ut libero. Maecenas magna sapien, suscipit in pretium eu, congue at purus. Fusce nec tortor dolor.
                                                </textarea>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="lampiran" class="form-label">Lampiran</label>
                                        <div class="row">
                                            <div class="col-12 col-lg-2 mx-0">
                                                <img src="https://picsum.photos/id/4/200/300" class="img-thumbnail w-100"
                                                    alt="...">
                                            </div>
                                            <div class="col-12 col-lg-2 mx-0">
                                                <img src="https://picsum.photos/id/5/200/300" class="img-thumbnail w-100"
                                                    alt="...">
                                            </div>
                                            <div class="col-12 col-lg-2 mx-0">
                                                <img src="https://picsum.photos/id/6/200/300" class="img-thumbnail w-100"
                                                    alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-3">
                    <hr>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h5>Update #2022-10-20</h5>
                        </div>
                        <div class="card-body pt-4">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Status</label>
                                        <div class="col-12">
                                            <h5><span class="badge badge-primary">Tindak Lanjut</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Isi</label>
                                        <textarea class="form-control" rows="5" disabled>Quisque posuere, massa nec sodales pharetra, risus ex elementum eros, nec auctor arcu quam quis odio. Proin faucibus ligula tortor, eu fringilla magna varius quis. Sed blandit metus at est sodales, id posuere ex scelerisque. Proin mattis purus et ligula pretium aliquet. Integer molestie sollicitudin varius. Suspendisse mauris arcu, efficitur in justo at, elementum rhoncus ante. Duis a ante eget tortor ornare tempus et ut libero. Maecenas magna sapien, suscipit in pretium eu, congue at purus. Fusce nec tortor dolor.
                                                </textarea>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="lampiran" class="form-label">Lampiran</label>
                                        <div class="row">
                                            <div class="col-12 col-lg-2 mx-0">
                                                <img src="https://picsum.photos/id/7/200/300" class="img-thumbnail w-100"
                                                    alt="...">
                                            </div>
                                            <div class="col-12 col-lg-2 mx-0">
                                                <img src="https://picsum.photos/id/8/200/300" class="img-thumbnail w-100"
                                                    alt="...">
                                            </div>
                                            <div class="col-12 col-lg-2 mx-0">
                                                <img src="https://picsum.photos/id/9/200/300" class="img-thumbnail w-100"
                                                    alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-3">
                    <hr>
                </div>
                <div class="col-12">
                    <div class="alert alert-success alert-style-light" role="alert">
                        Pengaduan telah di selesai kan oleh admin.
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Komentar</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 mb-4 text-start">
                                <small>Admin</small>
                                <div class="alert alert-light" role="alert" style="margin-bottom: 0;">
                                    Phasellus augue quam, consectetur eget lobortis et,<br>semper id libero.
                                </div>
                                <small>2020-10-01 10:00:00</small>
                            </div>
                            <div class="col-12 mb-4 text-end">
                                <div class="alert alert-primary" role="alert" style="margin-bottom: 0;">
                                    Aliquam ullamcorper fermentum egestas.
                                </div>
                                <small>2020-10-01 10:00:00</small>
                            </div>
                            <div class="col-12 mb-4 text-start">
                                <small>Kabid Humas</small>
                                <div class="alert alert-light" role="alert" style="margin-bottom: 0;">
                                    Donec aliquet erat in hendrerit pellentesque.
                                </div>
                                <small>2020-10-01 10:00:00</small>
                            </div>
                            <div class="col-12 mb-4 text-start">
                                <small>Kabid Pembangunan</small>
                                <div class="alert alert-light" role="alert" style="margin-bottom: 0;">
                                    Vivamus varius interdum tempor. 
                                </div>
                                <small>2020-10-01 10:00:00</small>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control form-control-material" id="custom-url" aria-describedby="custom-addon3" placeholder="Isi Komentar">
                                <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?=$this->endSection()?>