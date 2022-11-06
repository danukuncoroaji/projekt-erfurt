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
    <div class="col">
        <div class="page-description">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('app/pengumuman'); ?>">Pengumuman</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <?= $pengumuman['judul'] ?>
                    </li>
                </ol>
            </nav>
            <h1>
                <?= $pengumuman['judul'] ?>
            </h1>
        </div>
        <div class="card">
            <div class="card-header">
                <h6>
                    <?= $pengumuman['created_at'] ?>
                </h6>
            </div>
            <div class="card-body">
                <?= $pengumuman['isi'] ?>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        CKEDITOR.replace('editor');
    });
</script>
<?=$this->endSection()?>