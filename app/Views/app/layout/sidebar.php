<div class="app-sidebar">
    <div class="logo">
        <a href="index.html" class="logo-icon"><span class="logo-text">SIPDEPO</span></a>
        <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                <img src="../../assets/images/avatars/avatar.png">
                <span class="activity-indicator"></span>
                <span class="user-info-text"><?= $session->get('nama'); ?><br><span class="user-state-info">
                    <?php if($session->get('level') == 1){ echo 'Staf Kantor'; }else{ echo 'Masyarakat'; } ?>
                </span></span>
            </a>
        </div>
    </div>
    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Menu
            </li>
            <li <?php if(str_contains(base_url(uri_string()),'beranda')){ ?> class="active-page" <?php } ?> >
                <a href="<?php echo base_url('/app'); ?>"><i class="material-icons-two-tone">home</i>Beranda</a>
            </li>
            <?php if ($session->get('level') == 2) {?>
            <li <?php if(str_contains(base_url(uri_string()),'pengaduan')){ ?> class="active-page" <?php } ?>>
                <a href="#"><i class="material-icons-two-tone">forum</i>Pengaduan<i
                        class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo base_url('/app/pengaduan'); ?>" <?php if(str_contains(base_url(uri_string()),'pengaduan')){ ?> class="active" <?php } ?>>List</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/app/pengaduan/create'); ?>" <?php if(str_contains(base_url(uri_string()),'pengaduan/create')){ ?> class="active" <?php } ?>>Tambah</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/app/pengaduan/saya'); ?>" <?php if(str_contains(base_url(uri_string()),'pengaduan/saya')){ ?> class="active" <?php } ?>>Pengaduan Saya</a>
                    </li>
                </ul>
            </li>
            <?php } else if ($session->get('level') == 1) {?>
            <li <?php if(str_contains(base_url(uri_string()),'pengaduan')){ ?> class="active-page" <?php } ?>>
                <a href="<?php echo base_url('/app/pengaduan'); ?>"><i class="material-icons-two-tone">forum</i>Pengaduan</a>
            </li>
            <?php }?>


            <?php if ($session->get('level') == 2) {?>
            <li <?php if(str_contains(base_url(uri_string()),'pengumuman')){ ?> class="active-page" <?php } ?>>
                <a href="<?php echo base_url('/app/pengumuman'); ?>"><i class="material-icons-two-tone">announcement</i>Pengumuman</a>
            </li>
            <?php } else if ($session->get('level') == 1) {?>
            <li <?php if(str_contains(base_url(uri_string()),'pengumuman')){ ?> class="active-page" <?php } ?>>
                <a href="#"><i class="material-icons-two-tone">announcement</i>Pengumuman<i
                        class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="<?php echo base_url('/app/pengumuman'); ?>">List</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/app/pengumuman/create'); ?>">Tambah</a>
                    </li>
                </ul>
            </li>
            <?php } ?>
            <li>
                <a href="<?php echo base_url('/app/logout'); ?>"><i class="material-icons-two-tone">meeting_room</i>Keluar</a>
            </li>
        </ul>
    </div>
</div>