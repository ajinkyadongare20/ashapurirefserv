<?php
/**
 * The main template file
 * Template Name: Pharmaceutical
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
<div class="container-fluid py-5 bg-primary hero-header">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-start text-lg-start mb-lg-5">
                <h1 class="display-4 text-white mb-4">Pharmaceutical</h1>
            </div>
            <div class="col-lg-6 align-self-start text-start text-lg-start my-0 my-lg-5">
                <p class="text-white my-4">Ensure the safety and integrity of your pharmaceutical products with
                    Ashapuri Refrigeration. Our advanced cold chain solutions and specialized logistics maintain
                    precise temperature control, safeguarding sensitive medications throughout storage and
                    transport. Trust us for reliable, efficient service tailored to meet the critical needs of the
                    pharmaceutical industry</p>
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


<!-- Start Pharamaceutical Product  -->
<section class="container-fluid">
    <div class="container py-5">
        <h2 class="text-center mb-4">Meet Our Pharmaceutical Products</h2>
        <div class="row">
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/product_23_1.jpg"
                        class="product-card rounded-0" alt="Project Number 1">
                    <div class="card-body">
                        <h5 class="card-title">31 TR brine chiller skid for chemical plant</h5>
                        <!-- <p class="card-text">Meet Jimmy, an Air Force veteran and aviation safety coordinator that
                                helps teams operating the F/A-18F Super Hornet and EA-18G Growler get home safely.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/Pharma2.jpg"
                        class="product-card rounded-0" alt="Project Number 2">
                    <div class="card-body">
                        <h5 class="card-title">Refrigeration system for falling film chiller </h5>
                        <!-- <p class="card-text">Meet Lee, a manufacturing engineer in Boeing's Melbourne factory who
                                has worked on commercial and defense aircraft, including the first Australian-made
                                autonomous military aircraft.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Pharamaceutical Product  -->



<?php
// get_sidebar();
get_footer();