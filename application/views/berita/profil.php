<section class="bg-single-events">
  <div class="container">
    <div class="row">
      <div class="single-events">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="single-event-item">
              <?php if($berita->gambar != "" || $berita->gambar != NULL) { ?>
                <div class="row">
                    <div class="col-md-8">
                        <div class="about-greenforest-content">
                            <h2><?php echo $berita->judul_berita ?></h2>
                            <?php echo $berita->isi ?>
                        </div>
                        <!-- .about-greenforest-content -->
                    </div>
                    <!-- .col-md-8 -->
                    <div class="col-md-4">
                        <div class="about-greenforest-img">
                            <img src="<?php echo base_url('assets/upload/image/'.$berita->gambar) ?>" alt="about-greenforet-img" class="img-responsive" />
                        </div>
                        <!-- .about-greenforest-img -->
                    </div>
                    <!-- .col-md-4 -->
                </div>
              <?php } ?>
             
              <!-- .single-event-content -->
            </div>
            <!-- .single-event-item -->
          </div>
          <!-- .col-md-12 -->
        </div>
        <!-- .row -->
      </div>
      <!-- .single-events -->
    </div>
    <!-- .row -->
  </div>
  <!-- .container -->
</section>