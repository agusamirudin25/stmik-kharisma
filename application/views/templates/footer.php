<div class="bg-pink" style="margin-bottom: 0; margin-top: -6px;">
<footer style="padding-top: 20px;">
    <div class="container mt-6">
      <div class="row mt-5">
        <div class="col-md-4">
            <div class="footer-about">
			    <div class="col-md-4">
                    <p><a href="http://stmik-kharisma.ac.id">
                    <img src="<?= base_url()?>assets/images/logo-kharisma.png" alt="thamrin-logo" class="img-responsive setup"></a></p>
                </div>
			    <div class="col-md-8 footer-text">
                    <h3 style="line-height: 1;font-weight: 700;">STMIK KHARISMA KARAWANG</h3>
                    <p style="line-height: 1.2;font-weight: 300;">Sekolah Tinggi Manajemen Informatika dan Komputer</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <div class="footer-info2">
            <h3 class="widget-title">Informasi</h3>
            <ul class="list-unstyled">
			    <li><a href="#"><i class="fa fa-chevron-right"></i>Pendaftaran Online Calon Mahasiswa Baru STMIK Kharisma Karawang</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-xs-12">
          <div class="footer-info2">
            <h3 class="widget-title">Alamat Kampus</h3>
            <ul class="list-unstyled">
			    <li><i class="fa fa-map-marker"></i> Jl. Pangkal Perjuangan Km.1 By Pass Karawang </li>
			  	<li><i class="fa fa-phone"></i> <a href="https://wa.me/081398029990" target="blank"> 0813 9802 9990</a></li>
                <li><i class="fa fa-envelope"></i> info@stmik-kharisma.ac.id</li>
                <li><i class="fa fa-fax"></i> (0267) 410842</li>
                <li><i class="fa fa-clock-o"></i> Mon - Sat: 07:30 - 16:00</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </footer>
</div>
    <div class="footer ">
    <div class="footer_author text-center container"> <!-- Footer-copyright -->
        <p>©<?= date('Y') ?> WebPlikasi. All Rights Reserved</p><a href="#myPage" class="Top-page" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
        </div> <!-- Container -->
    </div>   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/wow.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/owl.carousel/owl-carousel/owl.carousel.js"></script>
    <script src="<?= base_url() ?>assets/js/custom.js"></script>
    <script src="<?= base_url() ?>assets/js/floating-wpp.min.js"></script>
     
    <script>
      new WOW().init();
      $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '+62 811-8454-800',
            showPopup: true
        });
      });
    </script>

    <script src="<?= base_url();?>assets/js/modernizr.js"></script>
    <script>
      $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;
      });
	  </script>
    
  </body>
</html>