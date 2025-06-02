<?php
/**
 * The main template file
 * Template Name: Awards
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ashapurirefserv
 */

get_header();
?>


 <!-- Hero Start -->
    <div class="container-fluid py-5 bg-primary hero-header mb-0 mb-lg-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-start text-lg-start mb-lg-5">
                    <!-- <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Banner</div> -->
                    <h1 class="display-4 text-white mb-4">Awards</h1>
                </div>
                <div class="col-lg-6 align-self-start text-start text-lg-start my-0 my-lg-5">
                    <p class="text-white mb-4">Celebrate Excellence with Ashapuri Refrigeration’s Award-Winning
                        Solutions. Our commitment to innovation, quality, and customer satisfaction has earned us
                        recognition in the industry. Explore the accolades that reflect our dedication to providing
                        top-tier refrigeration and logistics services across various sectors</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Start Award Section -->
    <section class="container px-3 px-lg-0">
        <div class="py-5">
            <h2 class="text-dark fw-bold text-start mb-4 mb-lg-5">Awards & Achievements</h2>
            <div class="row g-4 align-items-start">
                <!-- First Award -->
                <div class="col-12 col-lg-6">
                    <p class="fw-bold text-start mb-4">
                        Export excellence award from EEPCINDIA (2017-18)
                    </p>
                    <img src="<?php bloginfo('template_directory'); ?>/img/Awards/awards1.jpeg" alt="Award 2022" class="img-fluid"
                        style="object-fit: cover; width: 100%; height: 450px;">
                </div>

                <!-- Second Award -->
                <div class="col-12 col-lg-6">
                    <p class="fw-bold text-start mb-4">
                        REFCOLD INDIA Emerson Award 2022 in Cold chain project
                    </p>
                    <img src="<?php bloginfo('template_directory'); ?>/img/Awards/awards2.jpeg" alt="Award 2019" class="img-fluid"
                        style="object-fit: cover; width: 100%; height: 450px;">
                </div>

                <!-- Third and Fourth Awards (Combined with Single Heading) -->
                <div class="col-12">
                    <p class="fs-4 fw-bold text-center my-4">
                        Team Ashapuri won the ISHRAE Pune Premier Cricket League 2024
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Awards/awards3.jpg" alt="Award 2019" class="img-fluid"
                        style="object-fit: cover; width: 100%; height: 450px;">
                </div>
                <div class="col-12 col-lg-6">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Awards/awards4.jpg" alt="Award 2019" class="img-fluid"
                        style="object-fit: cover; width: 100%; height: 450px;">
                </div>
            </div>
        </div>
    </section>
    <!-- End Award Section -->



<?php
// get_sidebar();
get_footer();