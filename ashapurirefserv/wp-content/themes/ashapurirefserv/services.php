<?php
/**
 * The main template file
 * Template Name: Services
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
            <div class="col-lg-6 align-self-end text-start text-lg-start mb-lg-5">
                <h1 class="display-4 text-white mb-4">Our Services</h1>
            </div>
            <div class="col-lg-6 align-self-start text-start text-lg-start my-0 my-lg-5">
                <p class="text-white my-4">Ashapuri Refrigeration Manufacturing's
                    comprehensive range of services, designed to meet all your refrigeration and cooling
                    needs. From customized solutions to reliable maintenance, we ensure efficiency, quality,
                    and performance at every step.</p>
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


<!-- Services Section -->
<section id="services" class="py-5">
    <div class="container" id="all-services-list">
        <!-- Services Header -->
        <div class="row text-center mb-4">
            <div class="col">
                <h2>Our Services</h2>
            </div>
        </div>
        <!-- Services Grid -->
        <div class="row g-3">
            <!-- Service Cards -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="card service-card text-center services-card-select selected">
                    <div class="card-body pt-3" style="width: 100%;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/services_image/turnkey.png"
                            alt="Service Icon" class="mb-3">
                        <h5 class="card-title services-card-title fw-bold">Turnkey Solutions</h5>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card service-card text-center">
                    <div class="card-body pt-3" style="width: 100%;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/services_image/industrial chilers.jpg"
                            alt="Service Icon" class="mb-3">
                        <h5 class="card-title services-card-title fw-bold">Customized Industrial Chillers</h5>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card service-card text-center">
                    <div class="card-body pt-3" style="width: 100%;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/services_image/cooling.jpg"
                            alt="Service Icon" class="mb-3">
                        <h5 class="card-title services-card-title fw-bold">Process Cooling</h5>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card service-card text-center">
                    <div class="card-body pt-3" style="width: 100%;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/services_image/Refrigeration Maintenance.png"
                            alt="Service Icon" class="mb-3">
                        <h5 class="card-title services-card-title fw-bold">Refrigeration Maintenance</h5>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card service-card text-center">
                    <div class="card-body pt-3" style="width: 100%;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/services_image/Energy Efficiency Solutions.jpg"
                            alt="Service Icon" class="mb-3">
                        <h5 class="card-title services-card-title fw-bold">Energy Efficiency Solutions</h5>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card service-card text-center">
                    <div class="card-body pt-3" style="width: 100%;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/services_image/Equipment Manufacturing.jpg"
                            alt="Service Icon" class="mb-3">
                        <h5 class="card-title services-card-title fw-bold">Refrigeration Equipment Manufacturing
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card service-card text-center">
                    <div class="card-body pt-3" style="width: 100%;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/services_image/refr_upgrade.png"
                            alt="Service Icon" class="mb-3">
                        <h5 class="card-title services-card-title fw-bold">Refrigeration Upgrades</h5>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3">
                <div class="card service-card text-center">
                    <div class="card-body pt-3" style="width: 100%;">
                        <img src="<?php bloginfo('template_directory'); ?>/img/services_image/Cold Chain Solution.png"
                            alt="Service Icon" class="mb-3">
                        <h5 class="card-title services-card-title fw-bold">Cold Chain Solution</h5>
                    </div>
                </div>
            </div>

            <!-- Add more cards as needed... -->
        </div>
    </div>
</section>
<!-- end section  -->


<!-- Content Heading Section  -->
<div class="container text-white py-4 services-card-bg">
    <div class="container">
        <h1 class="display-6 fw-bold  text-white text-start text-lg-center">Ashapuri Refrigeration Services</h1>
    </div>
</div>
<!-- Content Heading Ending  -->


<!-- Content Section -->
<section class="py-4">
    <div class="container pb-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <!-- <h2 class="text-darkness fw-bold mb-4" style="text-align: center;">Ashapuri
                                Refrigeration Services</h2> -->
                        <p class="pt-3 pb-4">
                            Ashapuri Refrigeration Services Group is a single source for your cold chain
                            requirements. Our decades of experience, advanced
                            equipment, and state-of-the-art facility allow us to handle various customised
                            projects across the industry range, Our commitment to quality and customer satisfaction
                            are two primary
                            reasons we remain a top refrigeration company.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="container mt-5 pb-5">
        <div class="row align-items-center justify-content-center mt-3">

            <!-- Image Section -->
            <div class="col-md-6 mb-3 mb-md-0">
                <img src="<?php bloginfo('template_directory'); ?>/img/ASHAPURI PROJECT PHOTOS/11.sahyad.jpeg"
                    alt="Ashapuri Refrigeration Group" class="img-fluid">
            </div>

            <!-- Text Section -->
            <div class="col-md-6 ps-4">
                <h2 class="text-darkness fw-bold mb-4">Advantages of Partnering With Ashapuri Refrigeration Group
                </h2>
                <p>
                    Ashapuri Refrigeration Company ability to handle all your requirements reduce manufacturing
                    costs and eliminate the need for multiple suppliers. Our
                    knowledgeable engineers, experienced technicians, and innovative equipment allow us to offer
                    some of the fastest lead times in the region. We can help you identify the most beneficial
                    manufacturing processes and the latest fabrication technology for your project.
                </p>
            </div>
        </div>
    </div>

    <!-- Second New Contain Start-->
    <div class="container-fluid pt-5 my-0 my-lg-5 services-card-bg">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-12 pb-5 text-start text-lg-center">
                    <h2 class="text-white fw-bold mb-4">GET IN TOUCH</h2>
                    <h3 class="text-white mb-4">Contact Us Today for More Information</h3>
                    <p class="text-white mb-4">
                        If you're seeking a refrigeration company that will support you throughout each project
                        phase, Ashapuri Refrigeration is here to help. We specialize in maximizing efficiency,
                        enhancing system quality, and speeding up installation times to exceed customer
                        expectations. Contact us online today to learn more about how our refrigeration solutions
                        can benefit your business.
                    </p>
                    <a href="contact.html" class="btn btn-light text-primary fw-bold py-2 px-4 rounded-pill">Contact
                        Us →</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Second New Contain Ending-->


    <!--Third New Contain Start  -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="fw-bold1s" style="color: #002a5b;">Ashapuri
                    Refrigeration's Cooling Solutions and Capabilities</h2>
                <p class="mt-31s">Ashapuri Refrigeration, we specialize in
                    providing advanced industrial cooling solutions for a wide range of applications from custom
                    refrigeration systems to large-scale cooling units. We are a full-service provider that delivers
                    everything from design to installation and maintenance with our comprehensive capabilities, you
                    can rely on us for end-to-end support on every project.</p>
                <p ><b>Our facility is equipped with state-of-the-art
                        cooling and refrigeration technology, ensuring the highest level of performance,
                        reliability and sustainable. Our capabilities include:</b></p>

                <ul class="list-unstyled capabilities-list">
                    <li>
                        <span class="custom-bullet">➤</span> Custom-designed refrigeration units
                    </li>
                    <li>
                        <span class="custom-bullet">➤</span> Process chillers for industrial applications
                    </li>
                    <li>
                        <span class="custom-bullet">➤</span> Pressure vessels for precise cooling control
                    </li>
                    <li>
                        <span class="custom-bullet">➤</span> Energy-efficient condensing units
                    </li>
                    <li>
                        <span class="custom-bullet">➤</span> Supply, Installation, Testing, and Commissioning (SITC)
                    </li>
                </ul>
                <p>Our experienced technical team are committed to
                    delivering
                    precision and quality in every aspect of your project, ensuring that our solutions meet your
                    specific needs and exceed industry standards.</p>
            </div>
        </div>
    </div>
    <!-- Third New Contain Ending-->
</section>
<!-- End Section -->


<?php
// get_sidebar();
get_footer();