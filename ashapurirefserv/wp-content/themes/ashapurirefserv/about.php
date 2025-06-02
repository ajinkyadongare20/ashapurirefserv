<?php
/**
 * The main template file
 * Template Name: About
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
                    <h1 class="display-4 text-white mb-4">About Us</h1>
                </div>
                <div class="col-lg-6 align-self-start text-start text-lg-start my-0 my-lg-5">
                    <p class="text-white my-4">Ashapuri Refrigeration Manufacturing is a
                        trusted industry leader, specializing in
                        innovative refrigeration solutions tailored to your business needs. Our expertise
                        ensures efficient cooling systems, enhancing productivity, quality, and reliability.
                        Partner with us for excellence in refrigeration technology.</p>
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


    <!-- About Start -->
    <div class="container-fluid py-5" id="about-history-asfrev">
        <div class="container py-3 py-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div> -->
                    <h1 class="mb-4">Ashapuri Refrigeration</h1>
                    <p class="mb-4">Ashapuri Refrigeration Services, founded in 2012 by Mr. Nandkishor Kotkar, is a
                        leading engineering company specializing in industrial refrigeration. With over 30 years of
                        expertise in the Refrigeration & Air Conditioning Industry, we have rapidly expanded our
                        operations and customer base, earning a strong reputation for excellence.</p>

                    <p class="mb-4">In 2014, we acquired M/s Padmaja Enterprises, a respected 20-year-old firm serving
                        the food
                        processing sector, further strengthening our position in the industry. Our services encompass:
                    </p>

                    <p class="mb-4"><b>Design and Execution:</b> We handle a wide range of refrigeration projects,
                        including cold storages,
                        cold rooms, blast freezers, IQF systems, plate freezers, brine chillers, and retail malls.</p>

                    <p class="mb-4"><b>Design and Manufacture:</b> We create industrial equipment, such as
                        chillers, pressure vessels and
                        condensing units, tailored to meet specific requirements.</p>

                    <p class="mb-4"><b>Supply, Installation, Testing, and Commissioning (SITC) :</b> We provide
                        comprehensive
                        services for
                        refrigeration plants, ensuring optimal performance and reliability.</p>

                    <p class="mb-4">We are dedicated to delivering cost-effective,
                        customized
                        solutions with a focus on best quality. Our team of professionals is committed to innovative,
                        energy-efficient, and environmentally friendly outcomes.</p>

                    <p class="mb-4">We are also the exclusive service provider for Danfoss India Ltd. in the west zone
                        of India and
                        an authorized system integrator for Alfa LU-VE Group
                        (Earlier Alfa Laval India Pvt Ltd), reinforcing our expertise
                        and reliability in the refrigeration field.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Section Start Main -->
    <section>
        <div class="container py-5" id="about-history-who"
            style="background-color: white; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
            <div class="row">
                <div class="col-lg-6 text-center mb-4">
                    <img src="<?php bloginfo('template_directory'); ?>/img/teams/asfrev_team.jpg" class="img-fluid rounded " alt="Company Team"
                        style="height: 230px; object-fit: cover;">
                </div>
                <div class="col-lg-6">
                    <h2 class="about-section-title">Our Team</h2>
                    <p class="mt-3">Our team is dedicated to delivering innovative and reliable refrigeration solutions
                        with expertise in turnkey contracting, we design and produce industrial chillers, food
                        processing systems, and cold chain solutions. Committed to sustainability and excellence, we
                        ensure energy-efficient, high-quality products tailored to meet diverse industry needs.</p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-4">
                    <div class="about-light-bg my-3">
                        <h4 class="about-section-title">Our Approach:</h4>
                        <ul class="list-unstyled mt-3">
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Innovative Design</li>
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Custom Solutions</li>
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Comprehensive Services</li>
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Quality Commitment</li>
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Client-Centric</li>
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Sustainable Practices</li>
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Reliable Support</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-light-bg my-3">
                        <h4 class="about-section-title">Our Pledge:</h4>
                        <ul class="list-unstyled mt-3">
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Continuous Improvement</li>
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Innovative Solutions</li>
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Integrity and Transparency
                            </li>
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Environmental
                                Responsibility</li>
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Exceed Expectations</li>
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Long-Term Partnerships</li>
                            <li class="about-list-item"><span class="custom-bullet">➤</span> Dependable Service</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-light-bg my-3">
                        <h4 class="about-section-title">Our Commitment to Quality:</h4>
                        <p class="mt-3">We are dedicated to delivering superior quality in every
                            project. Our commitment ensures meticulous attention to detail, advanced technology, and
                            exceptional service standards. We strive for excellence in all our solutions, guaranteeing
                            reliability, efficiency, and customer satisfaction every step of the way.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->

        <!-- Start Board of Directors -->
        <div class="container py-5 my-5"
            style="background-color: white; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);">
            <h2 class="fw-bold about-card-heading" style="text-align: center;">Founder Member</h2>
            <div class="row mt-5">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/teams/team2.jpg" class="img-fluid about-card-img" alt="Board Image">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <p class="pt-5 pt-lg-0 text-start">
                        Mr. Nandkishor Kotkar established the company in 2012, bringing over 30 years of extensive
                        experience in the industry. He currently serves as the President of the ISHRAE Pune Chapter for
                        the term 2023-24. Previously, he worked with esteemed organizations such as Refcon Engineering
                        Services Pvt. Ltd., Voltas Ltd, and Blue Star Ltd.
                    </p>
                </div>

            </div>
        </div>
        <!-- End Board of Directors -->


        <!-- Feature Of Why Choose Us -->
        <div class="container-fluid mt-5 px-3 py-5">
            <h2 class="fw-bold about-card-heading" style="text-align: center;">Why Choose Us</h2>
            <div class="row mt-4">
                <div class="col-md-4 my-2">
                    <div class="about-feature">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/refrigerator.png" alt="Extensive Experience"
                            class="card-vision-icon">
                        <span class="feature-text">Expertise in Advanced Refrigeration</span>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="about-feature">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/solution.png" alt="Personalized Approach" class="card-vision-icon">
                        <span class="feature-text">Innovative, Tailored Solutions</span>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="about-feature">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/predictive.png" alt="Cutting-edge Technology"
                            class="card-vision-icon">
                        <span class="feature-text">High-Quality, Reliable Equipment</span>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="about-feature">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/customer-support.png" alt="Global Footprint"
                            class="card-vision-icon">
                        <span class="feature-text">Comprehensive Service Offering</span>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="about-feature">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/energy-control.png" alt="Comprehensive Project Management"
                            class="card-vision-icon">
                        <span class="feature-text">Cost-Effective, Energy-Efficient Systems</span>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="about-feature">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/lead-generation.png"
                            alt="Sustainability and Environmental Consciousness" class="card-vision-icon">
                        <span class="feature-text">Authorized for Leading Brands</span>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="about-feature">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/custom_solution.png" alt="Efficient Supply Chain Management"
                            class="card-vision-icon">
                        <span class="feature-text">Custom Solutions for Unique Needs</span>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="about-feature">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/growth.png" alt="Innovative Design Solutions"
                            class="card-vision-icon">
                        <span class="feature-text">Commitment to Superior Performance</span>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="about-feature">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about_images/target-audience.png" alt="Advanced Automation Integration"
                            class="card-vision-icon">
                        <span class="feature-text">Customer-Centric, Professional Approach</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Feature  -->

        <!-- Histroy Ashapuri Refrigeration -->
        <div class="container-fluid about-history">
            <h2 class="text-center mb-4" style="color: white;">Ashapuri Refrigeration History</h2>
            <div class="history-carousel container p-3 p-lg-5 rounded" style="max-width: 1200px;">
                <span class="carousel-control-prev" onclick="changeSlide(-1)">
                    &#10094;
                </span>
                <div class="history-container d-flex">
                    <div class="about-slide-frame">
                        <h5>2012</h5>
                        <h4><strong>Established</strong></h4>
                        <p>The inception year, marking the start of our journey in the refrigeration industry.</p>
                    </div>
                    <div class="about-slide-frame">
                        <h5>2014</h5>
                        <h4><strong>Expansion into Customized Solutions</strong></h4>
                        <p>Introduced tailored refrigeration systems to meet diverse client needs across industries.</p>
                    </div>
                    <div class="about-slide-frame">
                        <h5>2016</h5>
                        <h4><strong>Achieved Major Industry Milestone</strong></h4>
                        <p>Successfully delivered more refrigeration projects, establishing a reputation for reliability
                            and innovation.</p>
                    </div>
                    <div class="about-slide-frame">
                        <h5>2018</h5>
                        <h4><strong>Ventured into Advanced Technologies</strong></h4>
                        <p>Integrated cutting-edge refrigeration technologies to enhance efficiency and sustainability.
                        </p>
                    </div>
                    <div class="about-slide-frame">
                        <h5>2020</h5>
                        <h4><strong>Diversification into New Markets</strong></h4>
                        <p>Expanded operations to serve clients in the pharmaceutical, food processing, and overseas
                            customer.</p>
                    </div>
                    <div class="about-slide-frame">
                        <h5>2024</h5>
                        <h4><strong>Celebrating a Decade of Excellence
                            </strong></h4>
                        <p>Marked 10 years of delivering innovative and high-quality refrigeration solutions.</p>
                    </div>
                    <span class="carousel-control-next" onclick="changeSlide(1)">
                        &#10095;
                    </span>
                </div>
            </div>
        </div>
        <!-- End History Ashapuri Refrigeration-->
    </section>
    <!-- End Section Main -->


    <!-- Start Mission, Vision & Values -->
    <div class="container" style="max-width: 1200px;">
        <h2 class="text-center text-white">Our Mission, Vision & Values</h2>
        <div class="card-main align-items-center my-5">
            <!-- Mission Card 1-->
            <div class="card-vision" style="width: 100% !important;">
                <div class="card-vision-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/about_images/mission.png" alt="Mission Icon" class="card-vision-icon">
                    <h5 class="mb-0">Our Mission</h5>
                </div>
                <div class="card-vision-content">
                    <p class="card-text text-dark">
                        Our mission is to empower businesses by
                        providing
                        exceptional services for expanding and building refrigeration manufacturing setups. We
                        strive to
                        be the trusted partner that transforms our clients' visions into reality, delivering
                        sustainable
                        and innovative solutions that drive growth, efficiency, and success.
                    </p>
                </div>
            </div>

            <!-- Vision Card 2-->
            <div class="card-vision" style="width: 100% !important;">
                <div class="card-vision-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/about_images/visionary.png" alt="Vision Icon" class="card-vision-icon">
                    <h5 class="card-title mb-0">Our Vision</h5>
                </div>
                <div class="card-vision-content">
                    <p class="card-text text-dark">
                        Our vision is to be the industry leader in
                        refrigeration
                        manufacturing setups, recognized for our expertise, integrity, and commitment to
                        delivering
                        exceptional results. We envision a future where businesses can expand and thrive with
                        our
                        support, leveraging cutting-edge technologies and sustainable practices to create a
                        better
                        world
                        for generations.
                    </p>
                </div>
            </div>

            <!-- Values Card 3-->
            <div class="card-vision" style="width: 100% !important;">
                <div class="card-vision-header">
                    <img src="<?php bloginfo('template_directory'); ?>/img/about_images/values.png" alt="Values Icon" class="card-vision-icon">
                    <h5 class="card-title mb-0">Our Values</h5>
                </div>
                <div class="card-vision-content">
                    <p class="card-text text-dark">
                        Our mission and vision guide us in our pursuit of excellence, empowering us to
                        positively
                        impact
                        our clients' businesses and the environment. We are dedicated to continually enhancing
                        our
                        services, embracing innovation, and fostering long-term partnerships that contribute to
                        the
                        success and sustainability of our clients and the refrigeration industry as a whole.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission, Vision & Values -->


    <!-- Team Start -->
    <!-- <div class="container-fluid bg-light py-5" id="about-history-team">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    <h1 class="mb-4">Meet Our Experienced Team Members</h1>
                    <p class="mb-4">Discover the expertise behind our success—meet our skilled team members who bring
                        years of experience and innovation to every project. Our professionals are dedicated to
                        delivering top-notch web development solutions, ensuring your vision becomes a reality with
                        precision and excellence. Explore our team's profiles and learn more about their contributions.
                    </p>
                </div>
                <div class="container mt-5">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-md-12">
                                <div class="row g-4">
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                                            <img class="img-fluid rounded-circle p-4" src="<?php bloginfo('template_directory'); ?>/img/teams/team1.jpg" alt="">
                                            <h5 class="mb-0">Ms.Kavita Nandkishor Kotkar</h5>
                                            <small>CEO & Co-Founder</small>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                                            <img class="img-fluid rounded-circle p-4" src="<?php bloginfo('template_directory'); ?>/img/teams/team2.jpg" alt="">
                                            <h5 class="mb-0">Mr.Nandkishor Madhavrao Kotkar</h5>
                                            <small>Founder & Project Head</small>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                                            <img class="img-fluid rounded-circle p-4" src="<?php bloginfo('template_directory'); ?>/img/teams/team3.jpg" alt="">
                                            <h5 class="mb-0">Mithun Subhash Pedamkar</h5>
                                            <small>Senior Technician</small>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-3">
                                        <div class="team-item bg-white text-center rounded p-4 pt-0">
                                            <img class="img-fluid rounded-circle p-4" src="<?php bloginfo('template_directory'); ?>/img/teams/team4.jpg" alt="">
                                            <h5 class="mb-0">Shubham Hemant Amrutkar</h5>
                                            <small>Design Manager</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pt-md-4">
                                <div class="row g-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->




<?php
// get_sidebar();
get_footer();