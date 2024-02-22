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
              <h1>Apply for a Career with Us</h1>
              <p class="lead">Apply now to join our team and embark on a fulfilling career journey with us!</p>
            </div>

            <h5>What to expect?</h5>

            <!-- List -->
            <ul class="list-checked list-checked-dark mb-6">
              <li class="list-checked-item"> Faster time-to-job</li>
              <li class="list-checked-item"> Reduced expenses during job search
              </li>
              <li class="list-checked-item">Access to high-quality employment opportunities
              </li>
            </ul>
            <!-- End List -->

            <!-- End Row -->

            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar Group -->
                <div class="avatar-group avatar-group-sm">
                  <span class="avatar avatar-circle">
                    <img class="avatar-img" src="assets/img/img3.jpg" alt="Image Description">
                  </span>
                  <span class="avatar avatar-circle">
                    <img class="avatar-img" src="assets/img/img9.jpg" alt="Image Description">
                  </span>
                  <span class="avatar avatar-circle">
                    <img class="avatar-img" src="assets/img/img10.jpg" alt="Image Description">
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
                <span class="d-block fs-5">Trusted by over 57k Job Seekers</span>
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
                  <form id="inquiryForm" method="post" action="">
    <div class="row gx-3">
        <!-- Form -->
        <div class="mb-3">
            <label class="form-label visually-hidden" for="fullName">Your Name</label>
            <input type="text" class="form-control form-control-lg" name="fullName" id="fullName"
                   placeholder="Enter your name" aria-label="Your Name" required>
            <div id="fullNameError" class="error-message" style="color:red"></div>
        </div>
        <!-- End Form -->
    </div>
    <!-- End Form -->
    <!-- Form -->
    <div class="mb-3">
        <label class="form-label visually-hidden" for="email">Email address</label>
        <input type="email" class="form-control form-control-lg" name="email" id="email"
               placeholder="Enter your email" aria-label="email@site.com" required>
        <div id="emailError" class="error-message" style="color:red"></div>
    </div>
    <!-- End Form -->
    <!-- Form -->
    <div class="mb-3">
        <label class="form-label visually-hidden" for="phoneNumber">Phone Number<span
                class="form-label-secondary">(Optional)</span></label>
        <input type="tel" class="form-control form-control-lg" name="phoneNumber" id="phoneNumber"
               placeholder="Enter your phone number" aria-label="Phone number">
    </div>
    <!-- End Form -->
    <!-- Form -->
    <div class="mb-3">
        <label class="form-label visually-hidden" for="message">Message</label>
        <textarea class="form-control form-control-lg" name="message" id="message"
                  placeholder="Your message" aria-label="Your message" rows="4" required></textarea>
        <div id="messageError" class="error-message" style="color:red"></div>
    </div>
    <!-- End Form -->
    <div class="d-grid mb-2">
        <button type="submit" class="btn btn-primary btn-lg" onclick="validateForm()">Apply</button>
    </div>
</form>

 

                  <div id="thankYouMessage" style="display:none;">
                    Thank you for submitting your inquiry!
                  </div>


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
  <script>
    function validateForm() {
        var fullName = document.getElementById('fullName').value.trim();
        var email = document.getElementById('email').value.trim();
        var message = document.getElementById('message').value.trim();
        var valid = true;

        if (fullName === '') {
            document.getElementById('fullNameError').innerText = 'Please enter your name';
            valid = false;
        } else {
            document.getElementById('fullNameError').innerText = '';
        }

        if (email === '') {
            document.getElementById('emailError').innerText = 'Please enter your email';
            valid = false;
        } else {
            document.getElementById('emailError').innerText = '';
        }

        if (message === '') {
            document.getElementById('messageError').innerText = 'Please enter your message';
            valid = false;
        } else {
            document.getElementById('messageError').innerText = '';
        }

        return valid;
    }
 
    document.getElementById('inquiryForm').addEventListener('submit', function (event) {
        event.preventDefault();  

        // Validate the form
        if (!validateForm()) {
            return;  
        }
      
        var form = this;
        var formData = new FormData(form);  
        formData.append('additionalProperty', 'From Apply');
        var xhr = new XMLHttpRequest();  

        xhr.open('POST', 'process_form.php', true);  
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // When request is completed successfully
                form.style.display = 'none'; // Hide the form
                document.getElementById('thankYouMessage').style.display = 'block'; // Show thank you message
            }
        };
        xhr.send(formData); // Send form data
    });
</script>



  <!-- JS Plugins Init. -->

</body>

</html>