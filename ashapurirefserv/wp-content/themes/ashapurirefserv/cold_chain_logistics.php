<?php
/**
 * The main template file
 * Template Name: Cold Chain Logistics
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
                <h1 class="display-4 text-white mb-4">Cold Chain and Logistics</h1>
            </div>
            <div class="col-lg-6 align-self-start text-start text-lg-start my-0 my-lg-5">
                <p class="text-white my-4">Empowering cold chain excellence with Ashapuri Refrigeration! Delivering
                    innovative refrigeration and seamless logistics solutions to keep your products fresh, secure, and
                    perfectly preserved from origin to destination.</p>
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


<!-- Start Cold Chain and Logistics Product  -->
<section class="container-fluid">
    <div class="container py-5 px-0">
        <h2 class="text-center mb-4">Meet Our Cold Chain and Logistics Product</h2>
        <div class="row">
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/cold_chain1.jpg"
                        class="product-card rounded-0" alt="Project Number 1">
                    <div class="card-body">
                        <h5 class="card-title">Air Cooling units installed in logistics cold room</h5>
                        <!-- <p class="card-text">Meet Jimmy, an Air Force veteran and aviation safety coordinator that
                                helps teams operating the F/A-18F Super Hornet and EA-18G Growler get home safely.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/cold_chain2.jpg"
                        class="product-card rounded-0" alt="Project Number 2">
                    <div class="card-body">
                        <h5 class="card-title">Motorized sliding door</h5>
                        <!-- <p class="card-text">Meet Lee, a manufacturing engineer in Boeing's Melbourne factory who
                                has worked on commercial and defense aircraft, including the first Australian-made
                                autonomous military aircraft.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/cold_chain3.jpg"
                        class="product-card rounded-0" alt="Project Number 3">
                    <div class="card-body">
                        <h5 class="card-title">Foot mounted Amonia air cooling units</h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/cold_chain4.jpg"
                        class="product-card rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">Pressure vessel with interconnecting piping</h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/cold_chain5.jpg"
                        class="product-card rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">Outdoor unit using synthetic refrigerant</h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/cold_chain6.jpg"
                        class="product-card rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">Evaporator installed in process area</h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/cold_chain7.jpg"
                        class="product-card rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">Cooling tower and chilled water piping</h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/project/cold_chain8.jpg"
                        class="product-card rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">Cooling tower and interconnecting piping</h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/cold_chain_logistics23.jpg"
                        class="product-card rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">Pre-Cooling unit for grapes processing </h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 py-3">
                <div class="card team-card h-100 mx-2 rounded-0">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/6..jpeg"
                        class="product-card rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">J & E hall screw compressor package for blast frezzer and IQF </h5>
                        <!-- <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                                has had his hands in a little bit of everything.</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Cold Chain and Logistics Product  -->



<?php
// get_sidebar();
get_footer();