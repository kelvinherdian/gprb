<!-- Start Contact us Section -->
<section class="bg-contact-us">
    <div class="container">
        <div class="row">
            <div class="contact-us">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="contact-title">DAFTAR</h3>
                        <p>Informasi Individu / Perorangan</p>
                        <form class="contact-form" action="<?php echo base_url() . 'form2/tambah' ?>" method="post" enctype="multipart/form-data">
                            
                               
                                    <div class="form-group">
                                    Nama Lengkap   <input type="text" class="form-control" id="nama_idv" name="nama_idv" placeholder="Nama Lengkap" required>
                                    </div>
                                    <!-- .form-group -->
                              
                                <!-- .col-md-6 -->
                                <div class="form-group">
                                Instansi dan Jabatan, Contoh (BPBD Jawa Tengah-Kasi Kesiapsiagaan)    <input type="text" class="form-control" name="jabatan_idv" placeholder="Instansi dan Jabatan" required>
                            
                            </div>
                            <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                    Email    <input type="email" class="form-control" name="email_idv" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                    No Hanphone    <input type="text" class="form-control" name="no_idv" placeholder="no handphone" required>
                                    </div>
                                    <!-- .form-group -->
                                </div>
                                <!-- .col-md-6 -->
                                <!-- .col-md-6 -->
                            </div>
                            <!-- .row -->Alamat
                            <textarea class="form-control text-area" rows="2" name="alamat_idv" placeholder="Alamat"></textarea>
                            
                            <br>
                            <button type="submit" class="btn btn-default">Daftar</button>
                        </form>
                    </div>
                    <div class="col-md-4" align="left"><a href="<?php echo base_url('form') ?>" class="btn btn-default">Lembaga Form</a>
                        </div>

                    <!-- .col-md-8 -->
                    <div class="col-md-4">
                        <div class="sidebar">
                            <div class="widget">
                                <h4 class="sidebar-widget-title">Berita Terpopuler</h4>
                                <div class="widget-content">
                                    <ul class="popular-news-option">
                                        <?php foreach ($populer as $populer) { ?>
                                            <li>
                                                <div class="popular-news-img" style="width: 80px; height: 80px;">
                                                    <a href="#"><img src="<?php if ($populer->gambar == "") {
                                                                                echo base_url('assets/upload/image/thumbs/' . $site->icon);
                                                                            } else {
                                                                                echo base_url('assets/upload/image/thumbs/' . $populer->gambar);
                                                                            } ?>" alt="popular-news-img-1" /></a>
                                                </div>
                                                <!-- .popular-news-img -->
                                                <div class="popular-news-contant">
                                                    <h5><a href="<?php echo base_url('berita/read/' . $populer->slug_berita); ?>"><?php echo $populer->judul_berita; ?></a></h5>
                                                    <p>
                                                        <i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($populer->tanggal_publish)); ?> <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $populer->hits; ?> Viewer</a>
                                                    </p>
                                                </div>
                                                <!-- .popular-news-img -->
                                            </li>
                                        <?php } ?>
                                    </ul>

                                </div>
                                <!-- .widget-content -->
                            </div>
                        </div>
                        <!-- .sidebar -->
                    </div>
                    <!-- .col-md-4 -->
                </div>
                <!-- .row -->
            </div>
            <!-- .contact-us -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
<!-- End Contact us Section -->