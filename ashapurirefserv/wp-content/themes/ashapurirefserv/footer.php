<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ashapurirefserv
 */

?>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-3 pt-lg-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-3">
                <a href="index.html" class="d-inline-block mb-3">
                    <h2 class="text-white text-white-nav">Ashapuri Refrigeration<span class="text-primary"></span>
                    </h2>
                </a>
                <p class="mb-0">Ashapuri Refrigeration excels in delivering innovative, high-quality refrigeration
                    solutions. With a focus on custom design, efficiency, and reliability, we provide tailored
                    systems and exceptional service to meet diverse industry needs.</p>
            </div>
            <div class="col-md-6 col-lg-3 ps-0 nav-marker">
                <h5 class="text-white mb-4">Our Services</h5>
                <a class="btn btn-link" href="">Design and Execution of Industrial Refrigeration <br> Projects</a>
                <a class="btn btn-link" href="">Industrial Cooling Equipment Solutions</a>
                <a class="btn btn-link" href="">Authorized Service Provider and Integrator</a>
                <a class="btn btn-link" href="">Supply, Installation, Testing, and Commissioning (SITC)</a>
            </div>
            <div class="col-md-6 col-lg-2 pe-0">
                <h5 class="text-white mb-4">Popular Link</h5>
                <a class="btn btn-link" href="about.html">About Us</a>
                <a class="btn btn-link" href="service.html">Services</a>
                <a class="btn btn-link" href="product.html">Products</a>
                <a class="btn btn-link" href="awards.html">Awards</a>
                <a class="btn btn-link" href="contact.html">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
            </div>
            <div class="col-md-6 col-lg-4 ps-0 ps-lg-5 p-0 nav-marker">
                <h5 class="text-white mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>Flat No. 504, Lotus Manas, Swami Vivekanand Road,
                    Opposite Canara Bank, Bibwewadi , Pune 411037</p>
                <p><i class="fa fa-phone-alt me-3"></i>+91 9922002663</p>
                <p><i class="fa fa-envelope me-3"></i>nandkishor@ashapurirefserv.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social"
                        href="https://in.linkedin.com/company/ashapuri-refrigeration-services" target="_blank"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-5">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center text-md-center mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="index.html">Ashapuri Refrigeration</a>, All Right
                    Reserved.
                    Designed By <a class="border-bottom" href="https://www.lealsolution.com/" target="_blank">Leal
                        Software Solution Pvt Ltd</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/wow/wow.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/easing/easing.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/waypoints/waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/counterup/counterup.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>

</html>