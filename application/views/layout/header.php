<?php
$site = $this->konfigurasi_model->listing();
?>


<!-- Start Pre-Loader-->

<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_one"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_three"></div>
<div class="object" id="object_four"></div>
</div>
</div>
</div>


<div class="box-layout">

<!-- End Pre-Loader -->

<header class="header-style-2">
<div class="bg-header-top">
<div class="container">
<div class="row">
<div class="header-top">
    <ul class="h-contact">
        <li><i class="fa fa-map"></i> <?php echo $site->tagline ?></li>
    </ul>
    <div class="donate-option">
        <?php if($this->session->userdata('userpeneliti')) { ?>
            <a href="<?php echo base_url('peneliti/dasbor') ?>"><i class="fa fa-dashboard" aria-hidden="true"></i> <?php echo $this->session->userdata('nama_peneliti'); ?></a>
            <a href="<?php echo base_url('masuk/logout') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        <?php }else{ ?>
            <a href="https://wa.me/<?php echo str_replace('+','',$site->hp) ?>?text=Saya%20tertarik%20untuk%20Menggunakan%20Layanan%20di%20Perusahan%20Anda.%20Apakah%20bisa%20dibantu?"><i class="fa fa-whatsapp" aria-hidden="true"></i><?php echo $site->hp ?></a>
            <a href="tel:<?php echo $site->telepon ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $site->telepon ?></a>
        <?php } ?>
            <a href="<?php echo base_url('kontak') ?>"><i class="fa fa-envelope" aria-hidden="true"></i> Kontak</a>
    </div>
    <!-- .donate-option -->
</div>
<!-- .header-top -->
</div>
<!-- .header-top -->
</div>
<!-- .container -->
</div>
<!-- .bg-header-top -->
