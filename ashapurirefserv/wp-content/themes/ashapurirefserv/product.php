<?php
/**
 * The main template file
 * Template Name: Product
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
                <!-- <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated fadeInLeftBig">Banner</div> -->
                <h1 class="display-4 text-white mb-4">Product</h1>
            </div>
            <div class="col-lg-6 align-self-start text-start text-lg-start my-0 my-lg-5">
                <p class="text-white my-4">Explore our diverse Product,
                    showcasing innovative refrigeration solutions across industries. From cold storage to
                    process cooling,
                    Ashapuri Refrigeration delivers excellence in manufacturing and installation for clients
                    worldwide.</p>
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


<!-- Project About Start -->
<div class="container-fluid">
    <div class="container py-3 py-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12">
                <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div> -->
                <h1 class="mb-4">Ashapuri Refrigeration Overview</h1>
                <p class="mb-4">At Ashapuri Refrigeration, our manufacturing team is dedicated to creating
                    innovative refrigeration solutions that power industries worldwide. Here, your skills, talent,
                    and passion for excellence will help us continue leading in cutting-edge manufacturing. Join us
                    to work with a team that values precision, quality, and innovation, while enjoying best-in-class
                    benefits and ample opportunities for career growth. If you have expertise in mechanical,
                    maintenance, mechatronics, or related fields, explore your potential with us and contribute to
                    our global success.</p>

                <p class="mb-4">In 2014, we acquired M/s Padmaja Enterprises, a respected 20-year-old firm serving
                    the food
                    processing sector, further strengthening our position in the industry. Our services encompass:
                </p>

                <p class="mb-4"><b>Design and Execution:</b> We handle a wide range of refrigeration projects,
                    including cold storages,
                    cold rooms, blast freezers, IQF systems, plate freezers, brine chillers, and retail malls.</p>

            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Start Product  -->
<section class="container-fluid">
    <div class="container px-0 py-5">
        <h2 class="text-center mb-4">Meet Our Products</h2>
        <div class="row">
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/product23.jpg"
                        class="product-card rounded-0" alt="Project Number 1">
                    <div class="card-body">
                        <h5 class="card-title">Trunk type coil for block ice plant</h5>
                        <!-- <p class="card-text">Meet Jimmy, an Air Force veteran and aviation safety coordinator that
                                helps teams operating the F/A-18F Super Hornet and EA-18G Growler get home safely.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/product_23_1.jpg"
                        class="product-card rounded-0" alt="Project Number 1">
                    <div class="card-body">
                        <h5 class="card-title">31 TR brine chiller skid</h5>
                        <!-- <p class="card-text">Meet Jimmy, an Air Force veteran and aviation safety coordinator that
                                helps teams operating the F/A-18F Super Hornet and EA-18G Growler get home safely.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/product_23_2.jpg"
                        class="product-card rounded-0" alt="Project Number 1">
                    <div class="card-body">
                        <h5 class="card-title">Surge drum for PHE chiller</h5>
                        <!-- <p class="card-text">Meet Jimmy, an Air Force veteran and aviation safety coordinator that
                                helps teams operating the F/A-18F Super Hornet and EA-18G Growler get home safely.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/product0.jpg"
                        class="product-card rounded-0" alt="Project Number 1">
                    <div class="card-body">
                        <h5 class="card-title">Booster package</h5>
                        <!-- <p class="card-text">Meet Jimmy, an Air Force veteran and aviation safety coordinator that
                                helps teams operating the F/A-18F Super Hornet and EA-18G Growler get home safely.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/400TR WATER CHILLER PACKAGE.jpg"
                        class="product-card rounded-0" alt="Project Number 2">
                    <div class="card-body">
                        <h5 class="card-title">Assembly of 400 TR water chiller package </h5>
                        <!-- <p class="card-text">Meet Lee, a manufacturing engineer in Boeing's Melbourne factory who
                                has worked on commercial and defense aircraft, including the first Australian-made
                                autonomous military aircraft.</p> -->
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/product2.jpg"
                        class="product-card rounded-0" alt="Project Number 3">
                    <div class="card-body">
                        <h5 class="card-title">High pressure receiver for overseas project</h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/product4.jpg"
                        class="product-card rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">Pressure vessel of freezer & chiller room</h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/product5.jpg"
                        class="product-card rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">Internal piping of intercooler</h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/product8.jpg"
                        class="product-card rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">15 TR Brine Chiller Package</h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/product9.jpg"
                        class="product-card rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">30 TR Brine Chiller Package</h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Products  -->



<?php
// get_sidebar();
get_footer();