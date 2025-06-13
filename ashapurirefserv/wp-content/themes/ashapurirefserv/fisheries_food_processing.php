<?php
/**
 * The main template file
 * Template Name: Fisheries Food Processing
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
                <h1 class="display-4 text-white mb-4">Fisheries & Food Processing</h1>
            </div>
            <div class="col-lg-6 align-self-start text-start text-lg-start my-0 my-lg-5">
                <p class="text-white my-4">fisheries and food processing operations with Ashapuri Refrigeration. Our
                    state-of-the-art refrigeration solutions and expert logistics ensure that your products stay
                    fresh, safe, and efficiently transported. We provide tailored services that meet the specific
                    needs of the fisheries and food industries, preserving quality from start to finish.</p>
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


<!-- Start Fisheries & Food Processing Product  -->
<section class="container-fluid">
    <div class="container py-5 px-0">
        <h2 class="text-center mb-4">Meet Our Fisheries & Food Processing Products</h2>
        <div class="row">
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/fisheries_food_processing1.jpg"
                        class="product-card rounded-0" alt="Project Number 1">
                    <div class="card-body">
                        <h5 class="card-title">Product freezing in IQF</h5>
                        <!-- <p class="card-text">Meet Jimmy, an Air Force veteran and aviation safety coordinator that
                                helps teams operating the F/A-18F Super Hornet and EA-18G Growler get home safely.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/fisheries_food_processing2.jpg"
                        class="product-card rounded-0" alt="Project Number 2">
                    <div class="card-body">
                        <h5 class="card-title">IQF processing area</h5>
                        <!-- <p class="card-text">Meet Lee, a manufacturing engineer in Boeing's Melbourne factory who
                                has worked on commercial and defense aircraft, including the first Australian-made
                                autonomous military aircraft.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/fisheries_food_processing3.jpg"
                        class="product-card rounded-0" alt="Project Number 3">
                    <div class="card-body">
                        <h5 class="card-title">Screw packages for fisheries project</h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/fisheries_food_processing4.jpg"
                        class="product-card rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">High pressure cum priority vessel </h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Fisheries & Food Processing Product  -->



<?php
// get_sidebar();
get_footer();