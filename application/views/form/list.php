<!-- Start Contact us Section -->
<section class="bg-contact-us">
    <div class="container">
        <div class="row">
            <div class="contact-us">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="contact-title">DAFTAR</h3>
                        <p>Informasi Lembaga / Organisasi</p>
                        <form class="contact-form" action="<?php echo base_url() . 'form/tambah' ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    Lembaga / Organisasi   <input type="text" class="form-control" id="nameId" name="lembaga" placeholder="Lembaga / Organisasi" required>
                                    </div>
                                    <!-- .form-group -->
                                </div>
                                <!-- .col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    Nama    <input type="text" class="form-control" id="emailId" name="daftar_nama" placeholder="Nama" required> 
                                    </div>
                                </div>
                                <!-- .col-md-6 -->
                            </div>
                            <!-- .row -->Alamat
                            <textarea class="form-control text-area" rows="2" name="daftar_alamat" placeholder="Alamat"></textarea>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    Telephone    <input type="text" class="form-control" name="daftar_telepon" placeholder="Telepon" required>
                                    </div>
                                    <!-- .form-group -->
                                </div>
                                <!-- .col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    Email    <input type="email" class="form-control" name="daftar_email" placeholder="Email" required>
                                    </div>
                                </div>
                                <!-- .col-md-6 -->
                            </div>
                            <div class="form-group">
                            Website    <input type="text" class="form-control" name="daftar_website" placeholder="Website">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                            Twitter           <input type="text" class="form-control" name="daftar_twitter" placeholder="Twitter">
                                    </div>
                                    <!-- .form-group -->
                                </div>
                                <!-- .col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                             Instagram           <input type="text" class="form-control" name="daftar_instagram" placeholder="Instagram">
                                    </div>
                                </div>
                                <!-- .col-md-6 -->
                            </div>


                            <p>Narahubung</p>
                            <div class="form-group">
                            Nama    <input type="text" class="form-control" name="daftar_narahubung_nama" placeholder="Nama" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                            Jabatan            <input type="text" class="form-control" name="daftar_narahubung_jabatan" placeholder="Jabatan" required>
                                    </div>
                                    <!-- .form-group -->
                                </div>
                                <!-- .col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                            Telephone            <input type="text" class="form-control" name="daftar_narahubung_telepon" placeholder="Telephon" required>
                                    </div>
                                </div>
                                <!-- .col-md-6 -->
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                            Email            <input type="email" class="form-control" name="daftar_narahubung_email" placeholder="Email" required>
                                    </div>
                                    <!-- .form-group -->
                                </div>
                                <!-- .col-md-6 -->
                                <div class="col-md-6">
                                    <div class="form-group">
                            handphone            <input type="text" class="form-control" name="daftar_narahubung_handphone" placeholder="Handphone" required>
                                    </div>
                                </div>
                                <!-- .col-md-6 -->
                            </div>

                            <p>Bersedia / Tidak Bersedia menjadi Kolaborator Penyelenggara</p>
                            <div class="form-group">
                                <select class="form-control" name="daftar_bersedia_kolabolator" id="daftar_bersedia_kolabolator">
                                    <option value="Bersedia">Bersedia</option>
                                    <option value="Tidak Bersedia">Tidak Bersedia</option>
                                </select>
                            </div>

                            <p>Penyelenggara</p>
                            <div class="form-group">
                                <select class="form-control" name="daftar_Penyelenggara" id="daftar_Penyelenggara">
                                    <option value="Penyelenggara Mandiri">Penyelenggara Mandiri</option>
                                    <option value="Penyelenggara Bersama">Penyelenggara Bersama</option>
                                </select>
                            </div>

                            <p>Bersedia / Tidak Bersedia menjadi narasumber </p>
                            <div class="form-group">
                                <select class="form-control" name="daftar_bersedia_narasumber" id="daftar_bersedia_narasumber">
                                    <option value="Bersedia">Bersedia</option>
                                    <option value="Tidak Bersedia">Tidak Bersedia</option>
                                </select>
                            </div>

                            <p>Bersedia / Tidak Bersedia menjadi narasumber </p>
                            <div class="form-group">
                                <select class="form-control" name="daftar_mataajar" id="daftar_mataajar">
                                    <option value="1.Memahami Risiko COVID-19 dan Upaya pencegahan (Pengegahan dan mitigasi)">
                                        1.Memahami Risiko COVID-19 dan Upaya pencegahan (Pengegahan dan mitigasi)
                                    </option>
                                    <option value="2.Penanganan Kesehatan di Rumah untuk COVID-19 (Kesiapsiagaan dan Penanganan Darurat)">
                                        2.Penanganan Kesehatan di Rumah untuk COVID-19 (Kesiapsiagaan dan Penanganan Darurat)
                                    </option>
                                    <option value="3.Beradaptasi Dengan kondisi COVID-19 (Tatanan Normal Baru)">
                                        3.Beradaptasi Dengan kondisi COVID-19 (Tatanan Normal Baru)
                                    </option>
                                    <option value="4.Gender dan Inklusivitas dalam dalam Membangun Ketangguhan Keluarga dalam Menghadapi COVID-19">
                                        4.Gender dan Inklusivitas dalam dalam Membangun Ketangguhan Keluarga dalam Menghadapi COVID-19
                                    </option>
                                    <option value="5.Inisiatif Membangun Ketangguhan Keluarga Berbasis Ekonomi Produktif dan Aman COVID-19">
                                        5.Inisiatif Membangun Ketangguhan Keluarga Berbasis Ekonomi Produktif dan Aman COVID-19
                                    </option>
                                </select>
                            </div>

                            <p>Bersedia / Tidak bersedia memobilisasi peserta untuk mengikuti kegiata </p>
                            <div class="form-group">
                                <select class="form-control" name="daftar_memobilisasi" id="daftar_memobilisasi">
                                    <option value="Bersedia">Bersedia</option>
                                    <option value="Tidak Bersedia">Tidak Bersedia</option>
                                </select>
                            </div>

                            <p>Bersedia/Tidak Bersedia menjadi peserta untuk mengikuti kegiatan</p>
                            <div class="form-group">
                                <select class="form-control" name="daftar_peserta" id="daftar_peserta">
                                    <option value="Bersedia">Bersedia</option>
                                    <option value="Tidak Bersedia">Tidak Bersedia</option>
                                </select>
                            </div>



                            <br>
                            <button type="submit" class="btn btn-default">Daftar</button>
                        </form>
                    </div>
                    <div class="col-md-4" align="left"><a href="<?php echo base_url('form2') ?>" class="btn btn-default">Individu Form</a>
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