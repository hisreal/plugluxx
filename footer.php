   <!-- Footer -->
<footer class="footer">
    <!-- top -->
    <div class="top">
        <div class="container">
            <div class="row">

                <!-- About -->
                <div class="col-md-4 mb-30">
                    <div class="item">
                        <div class="logo">
                            <img src="img/plug_logo.png" alt="The Plugluxx logo">
                        </div>

                        <p>
                            The Plugluxx is a modern luxury marketplace connecting individuals and businesses to premium experiences, curated listings, and exclusive opportunities across the globe.
                        </p>

                        <!-- Social -->
                        <div class="social-icons">
                            <ul class="list-inline">

                                <li>
                                    <a href="https://www.instagram.com/theplugluxx?igsh=em1neHM1MGFteHdq" target="_blank">
                                        <i class="fa-brands fa-instagram"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.facebook.com/share/18BWQBDQty/?mibextid=wwXIfr" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.threads.com/@theplugluxx?igshid=NTc4MTIwNjQ2YQ==" target="_blank">
                                        <i class="fa-brands fa-threads"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

              <div class="col-md-3 mb-30">
                    <div class="item contact-style">
                        <h3>Contact Us</h3>

                        <p>
                            <span class="icon-circle">
                                <i class="fa-thin fa-location-dot"></i>
                            </span>
                            Cape Town, Western Cape
                        </p>

                        <div class="phone">
                            <span class="icon-circle">
                                <i class="fa-thin fa-phone"></i>
                            </span>
                            <a href="tel:+27647744907">+27 64 774 4907</a>
                        </div>

                        <p>
                            <span class="icon-circle">
                                <i class="fa-thin fa-envelope"></i>
                            </span>
                            <a href="mailto:bookings@theplugluxx.com"> bookings@theplugluxx.com </a>
                        </p>
                    </div>
                </div>

                <!-- Subscribe -->
                <div class="col-md-5 mb-30">
                    <div class="item">
                        <h3>Subscribe</h3>

                        <p>
                            Stay updated with our latest luxury offerings, experiences, and opportunities. Join our mailing list today.
                        </p>

                        <div class="newsletter">
                            <form action="#">
                                <input type="email" placeholder="Email Address" required>
                                <button type="submit">
                                    <i class="fa-light fa-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- bottom -->
    <div class="bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-12">
                    <div class="links">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 text-end">
                    <p>
                        © 2026 <a href="#">The PlugLuxx</a>. All rights reserved.
                    </p>
                </div>

            </div>
        </div>
    </div>
</footer>
    <!-- jQuery -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/jquery-migrate-3.4.1.min.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.isotope.v3.0.2.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scrollIt.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/YouTubePopUp.js"></script>
    <script src="js/select2.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/custom.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const reveals = document.querySelectorAll(".reveal");

    function revealOnScroll() {
        reveals.forEach(function (el) {
            const windowHeight = window.innerHeight;
            const elementTop = el.getBoundingClientRect().top;

            if (elementTop < windowHeight - 80) {
                el.classList.add("active");
            }
        });
    }

    revealOnScroll();
    window.addEventListener("scroll", revealOnScroll);
});
</script>
      <!-- Vegas Background Slideshow (vegas.slider kenburns) -->
    <script>
        $(document).ready(function() {
            $('#kenburnsSliderContainer').vegas({
                slides: [{
                    src: "img/rooms/01.jpg"
                },{
                    src: "img/rooms/02.jpg"
                },{
                    src: "img/rooms/03.jpg"
                }],
                overlay: true,
                transition: 'fade2',
                animation: 'kenburnsUpRight',
                transitionDuration: 1000,
                delay: 10000,
                animationDuration: 20000
            });
        });
    </script>
</body>

</html>