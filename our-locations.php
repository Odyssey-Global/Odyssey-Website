<style>
  <?php include "assets/css/style.css" ?>
</style>

<body>
  <!-- ========== HEADER ========== -->
  <?php include 'Header.php'; ?>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="mb-10">
    <!-- Card Grid -->
    <!-- <div class="container content-space-t-3 content-space-t-lg-4">
      <div class="text-center mb-7">
        <h1 class="display-5 mb-10">Our Locations</h1>
      </div>
    </div> -->

    <div class="container text-center mb-10" style="padding-top: 8rem;">
      <img class="img-fluid" src="assets/img/ourlocaitonnbr.webp" alt="Image Description">
    </div>

    <div class="container Location-lists">
      <div class="row">
        <div class="col-md-4 mt-24">
          <img class="img-fluid locatiion-flat" src="assets/img/UK.webp" alt="Image Description">
          <address>
            <span class="d-block fs-3 fw-bold text-dark mb-2">United Kingdom:</span>
            300 Bath Street<br>
            Tay House<br>
            Glasgow G2 4JR<br>
            United Kingdom
          </address>
        </div>
        <div class="col-md-4 mt-24">
          <img class="img-fluid locatiion-flat" src="assets/img/india.webp" alt="Image Description">
          <address>
            <span class="d-block fs-3 fw-bold text-dark mb-2">India:</span>
            300 Bath Street<br>
            Tay House<br>
            Glasgow G2 4JR<br>
            United Kingdom
          </address>
        </div>
        <div class="col-md-4 mt-24">
          <img class="img-fluid locatiion-flat" src="assets/img/usa.webp" alt="Image Description">
          <address>
            <span class="d-block fs-3 fw-bold text-dark mb-2">United State:</span>
            300 Bath Street<br>
            Tay House<br>
            Glasgow G2 4JR<br>
            United Kingdom
          </address>
        </div>
      </div>
    </div>

  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <?php include 'Footer.php'; ?>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Go To -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden" data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
  </a>
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>

  <!-- JS Unify -->
  <script src="assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->

</body>

</html>