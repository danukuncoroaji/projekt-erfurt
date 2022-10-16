<div class="app-sidebar">
    <div class="logo">
        <a href="index.html" class="logo-icon"><span class="logo-text">SIPDEPO</span></a>
        <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                <img src="../../assets/images/avatars/avatar.png">
                <span class="activity-indicator"></span>
                <span class="user-info-text">Chloe<br><span class="user-state-info">On a call</span></span>
            </a>
        </div>
    </div>
    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Menu
            </li>
            <li class="active-page">
                <a href="<?php echo base_url('/app'); ?>" class="active"><i class="material-icons-two-tone">home</i>Beranda</a>
            </li>
            <?php if ($session->get('level') == 2) {?>
            <li>
                <a href=""><i class="material-icons-two-tone">forum</i>Pengaduan<i
                        class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="pricing.html">List</a>
                    </li>

                    <li>
                        <a href="pricing.html">Tambah</a>
                    </li>
                    <li>
                        <a href="invoice.html">Pengaduan Saya</a>
                    </li>
                </ul>
            </li>
            <?php } else if ($session->get('level') == 1) {?>
            <li>
                <a href="index.html"><i class="material-icons-two-tone">forum</i>Pengaduan</a>
            </li>
            <?php }?>


            <?php if ($session->get('level') == 2) {?>
            <li>
                <a href="index.html"><i class="material-icons-two-tone">announcement</i>Pengumuman</a>
            </li>
            <?php } else if ($session->get('level') == 1) {?>
            <li>
                <a href=""><i class="material-icons-two-tone">announcement</i>Pengumuman<i
                        class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                <ul class="sub-menu">
                    <li>
                        <a href="pricing.html">List</a>
                    </li>
                    <li>
                        <a href="invoice.html">Tambah</a>
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