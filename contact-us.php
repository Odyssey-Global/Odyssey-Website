<body>
  <!-- ========== HEADER ========== -->
  <?php include 'Header.php'; ?>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Hero -->
    <div class="content-space-t-3 content-space-t-lg-4 content-space-b-2 content-space-b-lg-3 overflow-hidden">
      <div class="container">
        <div class="row justify-content-lg-between align-items-lg-center">
          <div class="col-lg-5 mb-7 mb-lg-0">
            <div class="mb-6">
              <h1>Find Top Talent!</h1>
              <p class="lead">Your search ends here! Odyssey Global is your strategic staffing partner offering agile, flexible, scalable and cost-effective solutions.</p>
            </div>

            <h5>What to expect?</h5>

            <!-- List -->
            <ul class="list-checked list-checked-dark mb-6">
              <li class="list-checked-item"> Accelerated time-to-hire</li>
              <li class="list-checked-item">  Lower cost-to-hire
</li>
              <li class="list-checked-item">High-quality hires 
</li>
            </ul>
            <!-- End List -->

            <h6>Enjoyed by</h6>

            <div class="row mb-4">
              <div class="col py-2">
                <img class="avatar avatar-lg avatar-4x3" src="assets/svg/brands/capsule-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col py-2">
                <img class="avatar avatar-lg avatar-4x3" src="assets/svg/brands/gitlab-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col py-2">
                <img class="avatar avatar-lg avatar-4x3" src="assets/svg/brands/fitbit-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col py-2">
                <img class="avatar avatar-lg avatar-4x3" src="assets/svg/brands/sass-gray.svg" alt="Logo">
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->

            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar Group -->
                <div class="avatar-group avatar-group-sm">
                  <span class="avatar avatar-circle">
                    <img class="avatar-img" src="assets/img/160x160/img10.jpg" alt="Image Description">
                  </span>
                  <span class="avatar avatar-circle">
                    <img class="avatar-img" src="assets/img/160x160/img3.jpg" alt="Image Description">
                  </span>
                  <span class="avatar avatar-circle">
                    <img class="avatar-img" src="assets/img/160x160/img9.jpg" alt="Image Description">
                  </span>
                  <span class="avatar avatar-primary avatar-circle">
                    <span class="avatar-initials">
                      <i class="bi-star-fill"></i>
                    </span>
                  </span>
                </div>
                <!-- End Avatar Group -->
              </div>
              <!-- End Col -->

              <div class="col-auto">
                <span class="d-block fs-5">Trusted by over 37k customer</span>
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Col -->

          <div class="col-lg-6">
            <div class="position-relative">
              <!-- Card -->
              <div class="card card-lg">
                <div class="card-body">
                  <h4>Fill in the form</h4>

                  <!-- Form -->
                  <form>
                    <div class="row gx-3">
                      <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-3">
                          <label class="form-label visually-hidden" for="hireUsFormFirstName">First name</label>
                          <input type="text" class="form-control form-control-lg" name="hireUsFormNameFirstName"
                            id="hireUsFormFirstName" placeholder="First name" aria-label="First name">
                        </div>
                        <!-- End Form -->
                      </div>

                      <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-3">
                          <label class="form-label visually-hidden" for="hireUsFormLasttName">Last name</label>
                          <input type="text" class="form-control form-control-lg" name="hireUsFormNameLastName"
                            id="hireUsFormLasttName" placeholder="Last name" aria-label="Last name">
                        </div>
                        <!-- End Form -->
                      </div>
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="mb-3">
                      <label class="form-label visually-hidden" for="hireUsFormWorkEmail">Email address</label>
                      <input type="text" class="form-control form-control-lg" name="hireUsFormNameWorkEmail"
                        id="hireUsFormWorkEmail" placeholder="email@site.com" aria-label="email@site.com">
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="mb-3">
                      <label class="form-label visually-hidden" for="hireUsFormCompanyName">Company name <span
                          class="form-label-secondary">(Optional)</span></label>
                      <input type="text" class="form-control form-control-lg" name="hireUsFormNameCompanyName"
                        id="hireUsFormCompanyName" placeholder="Htmlstream" aria-label="Htmlstream">
                    </div>
                    <!-- End Form -->

                    <!-- Select -->
                    <div class="mb-3">
                      <label class="form-label visually-hidden" for="hireUsFormBudget">Budget</label>
                      <select name="hireUsFormNameBudget" id="hireUsFormBudget" class="form-select form-select-lg"
                        aria-label="Tell us about your budget">
                        <option selected>Tell us about your budget</option>
                        <option value="1">$1,000 - $10,000</option>
                        <option value="2">$10,000 - $20,000</option>
                        <option value="3">$20,000 - $30,000</option>
                        <option value="4">$30,000 - $40,000</option>
                        <option value="5">$40,000 - $50,000</option>
                        <option value="6">$50,000 - and more</option>
                      </select>
                    </div>
                    <!-- End Select -->

                    <!-- Form -->
                    <div class="mb-3">
                      <label class="form-label visually-hidden" for="hireUsFormDetails">Details</label>
                      <textarea class="form-control form-control-lg" name="hireUsFormNameDetails" id="hireUsFormDetails"
                        placeholder="Tell us about your project" aria-label="Tell us about your project"
                        rows="4"></textarea>
                    </div>
                    <!-- End Form -->

                    <!-- Checkbox -->
                    <div class="form-check mb-3">
                      <input type="checkbox" class="form-check-input" id="signupFormPrivacyCheck"
                        name="signupFormPrivacyCheck" required data-msg="Please accept our Privacy Policy.">
                      <label class="form-check-label" for="signupFormPrivacyCheck"> By submitting this form I have read
                        and acknowledged the <a href=page-privacy.html>Privacy Policy</a></label>
                    </div>
                    <!-- End Checkbox -->

                    <div class="d-grid mb-2">
                      <button type="submit" class="btn btn-primary btn-lg">Send inquiry</button>
                    </div>

                    <div class="text-center">
                      <span class="form-text">We'll get back to you in 1-2 business days.</span>
                    </div>
                  </form>
                  <!-- End Form -->
                </div>
              </div>
              <!-- End Card -->


              <!-- SVG Shape -->
              <figure class="position-absolute bottom-0 end-0 zi-n1 d-none d-md-block mb-n10"
                style="width: 15rem; margin-right: -8rem;">
                <img class="img-fluid" src="assets/svg/illustrations/grid-grey.svg" alt="Image Description">
              </figure>
              <!-- End SVG Shape -->

              <!-- SVG Shape -->
              <figure class="position-absolute bottom-0 end-0 d-none d-md-block me-n5 mb-n5" style="width: 10rem;">
                <img class="img-fluid" src="assets/img/plane.svg" alt="Image Description">
              </figure>
              <!-- End SVG Shape -->
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>
    </div>
    <!-- End Hero -->
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