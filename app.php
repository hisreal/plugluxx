<?php require_once("header.php"); ?>
<!-- Kenburns SlideShow -->
 <section class="parallax-header valign bg-img bg-fixed" data-overlay-dark="5" data-background="img/hero/mobilapp.jpg">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                 <div class="col-lg-12 col-md-12">
                    <h1>The Future of <br> Luxury is Mobile</h1>
                </p>
                </div>
               <div class="col-lg-12 col-md-12">
                   

                </div>
            </div>
        </div>
    </section>
<section class="luxx-launch-section section-padding">
    <div class="container">

        <!-- Header -->
        <div class="row justify-content-center text-center mb-5 reveal">
            <div class="col-lg-8">
                <h2 class="luxx-title">
                    Everything you need in one powerful platform
                </h2>
                <p class="luxx-subtext">
                    Designed for seamless luxury access, earning opportunities, and effortless management all in one place.
                </p>
            </div>
        </div>

        <!-- App Mockup -->
        <div class="row justify-content-center mb-5 reveal">
            <div class="col-lg-4 text-center">
                <div class="">
                    <img src="img/hero/b999bff0-b228-4a9a-9353-cbea3781e562 (1).png" class="img-fluid app-image text-center rounded-2 animation-float2 reveal"  alt="">
                </div>
            </div>
        </div>

        <!-- Cards -->
        <div class="row g-4 reveal">
            <div class="col-lg-4 col-md-6">
                <div class="launch-card h-100">
                    <div class="launch-icon">
                        <span class="fa-thin fa-calendar-check"></span>
                    </div>
                    <h3 class="launch-title">Book luxury services instantly</h3>
                    <p class="launch-text">
                        Reserve premium experiences quickly and smoothly from your phone with a user friendly mobile flow.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="launch-card h-100">
                    <div class="launch-icon">
                        <span class="fa-thin fa-user-plus"></span>
                    </div>
                    <h3 class="launch-title">Register as a user, host, or co host</h3>
                    <p class="launch-text">
                        Create your profile and unlock opportunities whether you want to explore, earn, or grow with the platform.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="launch-card h-100">
                    <div class="launch-icon">
                        <span class="fa-thin fa-wallet"></span>
                    </div>
                    <h3 class="launch-title">Manage bookings and earnings</h3>
                    <p class="launch-text">
                        Stay in control with an easy dashboard for tracking reservations, income, and activity in real time.
                    </p>
                </div>
            </div>
        </div>

        <!-- CTA -->
        <div class="launch-cta text-center mt-5 reveal">
            <div class="section-title2 mb-3">Be among the first to experience it.</div>
            <div class="cta-buttons">
                
                <div class="button-1">
                    <a type="button"  data-bs-toggle="modal" data-bs-target="#waitlistModal">Join Waitlist</a>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="waitlistModal" tabindex="-1" aria-labelledby="waitlistModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content tpl-modal-content border-0">

      <div class="modal-header border-0 pb-0">
        <div>
          <span class="tpl-badge">Exclusive Access</span>
          <h2 class="modal-title tpl-modal-title mt-3" id="waitlistModalLabel">Join the Waitlist</h2>
        </div>
            <!-- Custom Close Button -->
            <button type="button" class="tpl-close-btn" data-bs-dismiss="modal" aria-label="Close">
                &times;
            </button>     
         </div>

      <div class="modal-body pt-2">
        <p class="tpl-lead">
          Be the first to experience <strong>ThePlugLuxx App</strong>.
        </p>
        <p class="tpl-subtext">
          Get early access to luxury bookings, premium listings, and earning opportunities.
        </p>

        <div class="tpl-benefits-box mb-4">
          <h5 class="tpl-section-title">Why Join?</h5>
          <ul class="tpl-benefits-list">
            <li>Early access before public launch</li>
            <li>Exclusive luxury deals & listings</li>
            <li>Opportunity to earn as a Host or Co Host</li>
          </ul>
        </div>

        <form>
          <h5 class="tpl-section-title mb-3">Your Details</h5>

          <div class="row g-3">
            <div class="col-md-6">
              <input type="text" class="form-control tpl-input" placeholder="Full Name" required>
            </div>

            <div class="col-md-6">
              <input type="email" class="form-control tpl-input" placeholder="Email Address" required>
            </div>

            <div class="col-md-6">
              <input type="tel" class="form-control tpl-input" placeholder="Phone Number (WhatsApp)" required>
            </div>

            <div class="col-md-6">
              <input type="text" class="form-control tpl-input" placeholder="Location" required>
            </div>

            <div class="col-12">
              <select class="form-select tpl-input" required>
                <option value="" selected disabled>Select Interest</option>
                <option>Book luxury services</option>
                <option>List my property/car/service</option>
                <option>Co host and earn</option>
              </select>
            </div>

            <div class="col-12 pt-2">
              <button type="submit" class="tpl-submit-btn w-100">Join Waitlist</button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
<?php require_once("footer.php"); ?>