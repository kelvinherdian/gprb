

<section class="bg-servicesstyle2-section">
<div class="container">
<div class="row">
<div class="our-services-option">
<div class="section-header text-left">
    <h2>Selamat</h2>
    <p class="alert alert-success">Pendaftaran anda sukses,mohon tunggu info selanjutnya di email anda.<br><br> <a href="http://localhost/compro/" class="btn btn-warning"><i class="fa fa-home"></i> Kembali ke Beranda</a></p>
</div>
<!-- .section-header -->
<div class="row">

<div class="col-md-8 col-md-offset-2">

</div>


 </div>
    <!-- .row -->
</div>
<!-- .our-services-option -->
</div>
<!-- .row -->
</div>
<!-- .container -->
</section>
<style type="text/css" media="screen">
  .kontakwa {
    z-index: 9999;
    position: fixed;
    background-color: #0099cc;
    padding: 5px;
    bottom: 0;
    right: 120px;
    font-weight: 700;
    font-size: 40px;
    color: white;
    text-align: center;
    /* border-top: solid 2px green;
    border-left: solid 2px green;
    border-right: solid 2px green; */
    min-width: 80px;
    border-radius: 0 10px 0 0;
  }
  .telepon {
    z-index: 9999;
    position: fixed;
    background-color: #0099cc;
    padding: 5px;
    bottom: 0;
    right: 200px;
    min-width: 80px;
    font-weight: 700;
    font-size: 40px;
    color: white;
    text-align: center;
    /* border-top: solid 2px #e93478;
    border-left: solid 2px #e93478;
    border-right: solid 2px #e93478; */
    border-radius: 10px 0 0 0;
  }
  .kontakwa a, .telepon a {
    color: white;
    font-size: 40px;
    font-weight: 700;
    text-align: center;
  }
  .kontakwa:hover, .telepon:hover {
    padding: 8px;

  }
  .kontakwa a:hover{
    color:green;
  }
  .telepon a:hover {
    color:#00308F;
  }
</style>
<div class="telepon">
  <a href="tel:021-29827793"><i class="fa fa-phone"></i></a>
</div>
<div class="kontakwa">
  <a href="https://wa.me/021-29827793?text=ada yang ingin saya tanyakan, bisakah dibantu?" class="topbar-social-item"><i class="fa fa-whatsapp"></i>
        </a>
</div>
<!-- END WA -->



<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/swiper.min.js"></script>
<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/lightcase.js"></script>
<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/jquery.nstSlider.js"></script>
<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/custom.map.js"></script>
<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/plugins.isotope.js"></script>
<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/custom.isotope.js"></script>
<script type="text/javascript" src="http://localhost/compro/assets/tema/assets/js/custom.js"></script>
<!-- Select2 -->
<script src="http://localhost/compro/assets/admin/plugins/select2/select2.full.min.js"></script>
<!-- DataTables JS -->
<script src="http://localhost/compro/assets/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="http://localhost/compro/assets/admin/plugins/datatables/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
<script>
  $(function () {
     //Initialize Select2 Elements
    $('.select2').select2()
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('.editorku'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    // bootstrap WYSIHTML5 - text editor

    $('#keterangan').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>

</body>