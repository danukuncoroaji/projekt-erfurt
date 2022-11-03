<?=$this->extend('app/layout/default')?>
<?=$this->section('content')?>
<div class="row pb-5">
    <?php if(session()->getFlashdata('error')):?>
    <div class="col-12">
        <div class="alert alert-danger text-white">
            <strong>Terdapat Kesalahan !</strong>
            <?= session()->getFlashdata('error'); ?>
        </div>
    </div>
    <?php endif;?>
    <?php if(session()->getFlashdata('success')):?>
    <div class="col-12">
        <div class="alert alert-success text-white">
            <i class="fas fa-check"></i>
            <?= session()->getFlashdata('success') ?>
        </div>
    </div>
    <?php endif;?>
    <div class="col">
        <div class="page-description">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('app/pengaduan'); ?>">Pengaduan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?= $pengaduan['judul']; ?>
                    </li>
                </ol>
            </nav>
            <h1>
                <?= $pengaduan['judul']; ?>
            </h1>
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
                                        <input type="text" class="form-control" value="<?= $pengaduan['created_at']; ?>"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="judul" class="form-label">Judul</label>
                                        <input type="text" class="form-control" value="<?= $pengaduan['judul']; ?>"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Kategori Pengaduan</label>
                                        <input type="text" class="form-control" value="<?= $pengaduan['kategori']; ?>"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Status</label>
                                        <div class="col-12">
                                            <?php if($status == 1){ ?>
                                            <h5><span class="badge badge-info">Peninjauan</span></h5>
                                            <?php }else if($status == 2){ ?>
                                            <h5><span class="badge badge-warning">Pemrosesan</span></h5>
                                            <?php }else if($status == 3){ ?>
                                            <h5><span class="badge badge-primary">Tindak Lanjut</span></h5>
                                            <?php }else if($status == 4){ ?>
                                            <h5><span class="badge badge-success">Ditutup</span></h5>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Isi Pengaduan</label>
                                        <div class="alert alert-light" role="alert">
                                            <?= $details[0]['isi']; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="lampiran" class="form-label">Lampiran</label>
                                        <div class="row">
                                            <?php foreach($details[0]['gambars'] as $gambar){ ?>
                                            <div class="col-12 col-lg-2 mx-0">
                                                <img src="<?= base_url($gambar['path']); ?>"
                                                    class="img-thumbnail w-100">
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if($session->get('level') == 1){ ?>
                            <div class="card-footer">
                                <a class="btn btn-danger" href="<?= base_url('app/pengaduan/hapus/'.$pengaduan['id']); ?>"><i class="material-icons">delete</i>Hapus</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-12 py-3">
                    <hr>
                </div>
                <?php for($i = 1; $i < count($details); $i++){ ?>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h5>Update #
                                <?= $details[$i]['created_at']; ?>
                            </h5>
                        </div>
                        <div class="card-body pt-4">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Status</label>
                                        <div class="col-12">
                                            <?php if($details[$i]['status'] == 1){ ?>
                                            <h5><span class="badge badge-info">Peninjauan</span></h5>
                                            <?php }else if($details[$i]['status'] == 2){ ?>
                                            <h5><span class="badge badge-warning">Pemrosesan</span></h5>
                                            <?php }else if($details[$i]['status'] == 3){ ?>
                                            <h5><span class="badge badge-primary">Tindak Lanjut</span></h5>
                                            <?php }else if($details[$i]['status'] == 4){ ?>
                                            <h5><span class="badge badge-success">Ditutup</span></h5>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="form-group">
                                        <label for="kategori" class="form-label">Isi</label>
                                        <div class="alert alert-light" role="alert">
                                            <?= $details[$i]['isi']; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php if(count($details[$i]['gambars']) > 0){ ?>
                                    <div class="col-12 mb-4">
                                        <div class="form-group">
                                            <label for="lampiran" class="form-label">Lampiran</label>
                                            <div class="row">
                                                <?php foreach($details[$i]['gambars'] as $gambar){ ?>
                                                <div class="col-12 col-lg-2 mx-0">
                                                    <img src="<?= base_url($gambar['path']); ?>"
                                                        class="img-thumbnail w-100">
                                                </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 py-3">
                    <hr>
                </div>
                <?php } ?>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Komentar</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <?php foreach($komentars as $komentar){
                                if($komentar['id_user'] == $session->get('id')){
                                ?>
                            <div class="col-12 mb-4 text-end">
                                <div class="alert alert-primary" role="alert" style="margin-bottom: 0;">
                                    <?= $komentar['isi']; ?>
                                </div>
                                <small>
                                    <?= $komentar['created_at']; ?>
                                </small>
                            </div>
                            <?php
                                }else{
                                ?>
                            <div class="col-12 mb-4 text-start">
                                <small>
                                    <?= $komentar['nama']; ?>
                                </small>
                                <div class="alert alert-light" role="alert" style="margin-bottom: 0;">
                                    <?= $komentar['isi']; ?>
                                </div>
                                <small>
                                    <?= $komentar['created_at']; ?>
                                </small>
                            </div>
                            <?php }
                            } ?>
                            <!-- 

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
                            </div> -->
                        </div>
                    </div>
                    <div class="card-footer">
                        <form method="POST" action="<?= base_url('app/pengaduan/komentar'); ?>">
                            <div class="input-group mb-3">
                                <input type="hidden" name="id" value="<?= $pengaduan['id']; ?>">
                                <input type="text"
                                    class="form-control form-control-material <?php if($validation->getError('isi')){ echo 'is-invalid'; } ?>"
                                    name="isi" placeholder="Isi Komentar">
                                <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
                            </div>
                            <?php if($validation->getError('isi')){ ?>
                            <small class="text-danger">
                                <?php echo $validation->getError('isi'); ?>
                            </small>
                            <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
            <?php if($session->get('level') == 1){ ?>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Update Pengaduan
                    </div>
                    <form method="POST" action="<?= base_url('app/pengaduan/update/'.$pengaduan['id']); ?>" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="kategori" class="form-label">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="1">Peninjauan</option>
                                        <option value="2" selected>Pemrosesan</option>
                                        <option value="3">Tindak Lanjut</option>
                                        <option value="4">Ditutup</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="kategori" class="form-label">Isi</label>
                                    <textarea name="isi" id="editor"><?= old('isi'); ?></textarea>
                                    <?php if($validation->getError('isi')){ ?>
                                    <small class="text-danger">
                                        <?php echo $validation->getError('isi'); ?>
                                    </small>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-group">
                                    <label for="lampiran" class="form-label">Lampiran</label>
                                    <input type="file"
                                        class="form-control <?php if($validation->getError('lampiran')){ echo 'is-invalid'; } ?>"
                                        name="lampiran[]" id="lampiran" aria-describedby="lampiran" multiple>
                                    <?php if($validation->getError('lampiran')){ ?>
                                    <small class="text-danger">
                                        <?php echo $validation->getError('lampiran'); ?>
                                    </small>
                                    <?php }else{ ?>
                                    <div id="lampiran" class="form-text">Sertakan lampiran foto berbentuk gambar jpeg,
                                        png
                                        maks 4mb.</div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary"><i class="material-icons">save</i>
                                Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        CKEDITOR.replace('editor');
    });
</script>
<?=$this->endSection()?>