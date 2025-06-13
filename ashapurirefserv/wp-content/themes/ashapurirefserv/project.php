<?php
/**
 * The main template file
 * Template Name: Project
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
                <h1 class="display-4 text-white mb-4 animated slideInRight">Our Projects</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-start justify-content-lg-start mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Our Projects</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-6 align-self-start text-start text-lg-start wow fadeInRightBig">
                <p class="text-white my-4 animated fadeInLeftBig">Ashapuri Refrigeration Manufacturing's
                    innovative projects, showcasing excellence in design, precision, and performance. Our
                    expertise drives impactful solutions, tailored to meet diverse refrigeration and cooling
                    requirements with unmatched quality.</p>
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
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
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


<!-- Start Main Section -->
<section>
    <div class="container my-5">
        <h2 class="text-center mb-4" id="mainStart">Meet #ProjectAshapuri</h2>
        <!-- Cards 1 to 15 -->
        <div class="row">
            <!-- First 6 visible by default -->
            <div class="col-md-4 mb-4 py-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/1..jpeg"
                        class="card-img-top rounded-0" alt="Project Number 1">
                    <div class="card-body">
                        <h5 class="card-title">Pressure vessel with interconnecting piping</h5>
                        <p class="card-text">Meet Jimmy, an Air Force veteran and aviation safety coordinator that
                            helps teams operating the F/A-18F Super Hornet and EA-18G Growler get home safely.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 py-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/1.jpeg"
                        class="card-img-top rounded-0" alt="Project Number 2">
                    <div class="card-body">
                        <h5 class="card-title">Machine Room </h5>
                        <p class="card-text">Meet Lee, a manufacturing engineer in Boeing's Melbourne factory who
                            has worked on commercial and defense aircraft, including the first Australian-made
                            autonomous military aircraft.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 py-3 wow fadeIn" data-wow-delay="0.9s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/11.sahyad.jpeg"
                        class="card-img-top rounded-0" alt="Project Number 3">
                    <div class="card-body">
                        <h5 class="card-title">Screw package in machine room</h5>
                        <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                            has had his hands in a little bit of everything.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 py-3 wow fadeIn" data-wow-delay="1.1s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/2.HPR LPR RBT.jpeg"
                        class="card-img-top rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">Pressure vessel of freezer & chiller room</h5>
                        <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                            has had his hands in a little bit of everything.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 py-3 wow fadeIn" data-wow-delay="1.1s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/ameya_project.jpg"
                        class="card-img-top rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">Outdoor unit using synthetic refrigerant</h5>
                        <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                            has had his hands in a little bit of everything.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4 py-3 wow fadeIn" data-wow-delay="1.1s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/3.LPR RBT.jpeg"
                        class="card-img-top rounded-0" alt="Project Number 4">
                    <div class="card-body">
                        <h5 class="card-title">LPR Setup</h5>
                        <p class="card-text">From making repairs on aircraft to building spacecraft, Oborsouis "OB"
                            has had his hands in a little bit of everything.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <!-- Example of additional cards hidden initially -->
            <div class="col-md-4 mb-4 py-3 d-none more-cards wow fadeIn" data-wow-delay="1s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/5.Machine room RBT.jpeg"
                        class="card-img-top rounded-0" alt="Project Number 5">
                    <div class="card-body">
                        <h5 class="card-title">Plant room for cold storage project</h5>
                        <p class="card-text">Description for the fifth card goes here.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 py-3 d-none more-cards wow fadeIn" data-wow-delay="1.2s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/6..jpeg"
                        class="card-img-top rounded-0" alt="Project Number 5">
                    <div class="card-body">
                        <h5 class="card-title">Booster package</h5>
                        <p class="card-text">Description for the fifth card goes here.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 py-3 d-none more-cards wow fadeIn" data-wow-delay="1.4s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/Chicken Processing AreaSneha Chickenhydrabad.jpg"
                        class="card-img-top rounded-0" alt="Project Number 5">
                    <div class="card-body">
                        <h5 class="card-title">Evaporator installed in cold room</h5>
                        <p class="card-text">Description for the fifth card goes here.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 py-3 d-none more-cards wow fadeIn" data-wow-delay="1.6s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/Outdoor unit Galaxy (Bhigwan).jpeg"
                        class="card-img-top rounded-0" alt="Project Number 5">
                    <div class="card-body">
                        <h5 class="card-title">Outdoor unit of freon project</h5>
                        <p class="card-text">Description for the fifth card goes here.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 py-3 d-none more-cards wow fadeIn" data-wow-delay="1.8s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/Piping (Kuppam).jpg"
                        class="card-img-top rounded-0" alt="Project Number 5">
                    <div class="card-body">
                        <h5 class="card-title">Cooling tower with its interconnecting piping</h5>
                        <p class="card-text">Description for the fifth card goes here.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 py-3 d-none more-cards wow fadeIn" data-wow-delay="2s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/WhatsApp Image 2022-11-22 at 6.10.48 PM (2).jpeg"
                        class="card-img-top rounded-0" alt="Project Number 5">
                    <div class="card-body">
                        <h5 class="card-title">Cooling tower with its interconnecting piping</h5>
                        <p class="card-text">Description for the fifth card goes here.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 py-3 d-none more-cards wow fadeIn" data-wow-delay="2.2s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/WhatsApp Image 2022-11-25 at 11.41.02 AM.jpeg"
                        class="card-img-top rounded-0" alt="Project Number 5">
                    <div class="card-body">
                        <h5 class="card-title">Evaporative Condenser</h5>
                        <p class="card-text">Description for the fifth card goes here.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4 py-3 d-none more-cards wow fadeIn" data-wow-delay="2.4s">
                <div class="card team-card h-100 mx-2">
                    <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/WhatsApp Image 2024-07-09 at 16.55.15 (2).jpeg"
                        class="card-img-top rounded-0" alt="Project Number 5">
                    <div class="card-body">
                        <h5 class="card-title">Bitzer make Screw & recipt rack </h5>
                        <p class="card-text">Description for the fifth card goes here.</p>
                    </div>
                    <div class="card-footer text-center rounded-0" style="background-color: #003366;">
                        <a href="#" class="btn text-white">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <!-- Repeat for all 15 cards as needed -->
        </div>
        <!-- "View More" button -->
        <div class="text-center mt-4">
            <button id="viewMoreBtn" class="btn btn-primary">View More </button>
            <button id="viewLessBtn" class="btn btn-primary d-none">
                <a href="#mainStart" style="color: white; text-decoration: none;">View Less </a>
            </button>
        </div>
    </div>
</section>
<!-- End Main Section -->


<?php
// get_sidebar();
get_footer();