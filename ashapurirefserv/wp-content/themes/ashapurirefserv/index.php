<?php
/**
 * The main template file
 * Template Name: Index
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
<div class="container-fluid pt-5 bg-primary hero-header-home mb-5">
    <div class="container pt-5">
        <div class="row g-5 pt-5">
            <div class="col-lg-6 align-self-center text-start text-lg-start mb-lg-5">
                <!-- <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Banner</div> -->
                <h2 class="display-4 text-white mb-4">Ashapuri Refrigeration</h2>
                <h1 class="fw- text-white" style="font-size:18px;">Best Refrigeration Company in Pune</h1>
                <!--<p class="text-white mb-4">-->
                <!--     Ashapuri Company is the leading refrigerator brand in Pune, known for its high-quality, energy-efficient, and durable refrigeration solutions. With a strong commitment to innovation and customer satisfaction, Ashapuri offers a wide range of refrigerators designed to meet the needs of homes, businesses, and commercial establishments. Their advanced cooling technology ensures optimal freshness, while their sleek and modern designs enhance any space. Whether you need a single-door, double-door, or commercial-grade refrigerator, Ashapuri Company provides reliable and cost-effective solutions, making it the top choice for refrigeration in Pune.-->
                <!--</p>-->
                <p class="text-white mb-4">
                    Ashapuri Refrigeration Offers Straightforward Industrial Refrigeration Solutions Tailored For
                    Efficiency And Reliability. We Streamline Complex Systems, Ensuring Seamless Performance And
                    Minimal Downtime. Trust Us To Simplify Your Refrigeration Needs With Innovative Technology And
                    Expert Support For Optimal Cooling And Energy Savings.
                </p>
                <a href="about.html#about-history-asfrev" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3">Read
                    More</a>
                <a href="about.html" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill">About
                    More</a>
            </div>
            <div class="col-lg-6 align-self-start text-center text-lg-end">
                <div class="image-container" style="display: inline-block; background-color: white; padding: 14px;">
                    <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/asfrev_banner.jpg"
                        alt="Image">
                </div>
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
<div class="container-fluid py-3 py-lg-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <!-- <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/hero-img.jpg"> -->
                    <img class="img-fluid"
                        src="<?php bloginfo('template_directory'); ?>/img/images/Shipping Times .jpeg">
                </div>
            </div>
            <div class="col-lg-6">
                <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div> -->
                <p class="mb-4 ">Ashapuri Refrigeration is a leading turnkey contracting company and project solution
                    provides specializing in high-quality refrigeration solutions for diverse industries. With a
                    commitment to innovation and excellence, we design and produce state-of-the-art refrigeration units
                    tailored to meet the evolving needs of our clients. Our product range includes industrial chillers,
                    food processing systems, cold chain solutions, and custom solutions engineered for efficiency and
                    reliability.</p>
                <p class="mb-4">We prioritize sustainability and energy efficiency, ensuring our products not only meet
                    but exceed industry standards, providing long-lasting, eco-friendly solutions for businesses
                    worldwide.</p>
                <!-- <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Responsiveness</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Innovative Design</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Swift Implementation</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Innovative Worksmanship</h6>
                        </div>
                    </div> -->
                <!-- <div class="align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="about.html#about-history-who">Read
                            More</a>
                    </div> -->
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-fluid bg-light mt-5 py-5">
    <div class="container py-0 py-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Services</div> -->
                <h3 class="mb-4">Our Specality</h3>
                <p class="mb-4">Ashapuri Refrigeration Services delivers comprehensive industrial refrigeration
                    solutions with expertise in design, installation, and maintenance. We specialize in the design
                    and execution of industrial refrigeration projects, including cold storages, cold rooms, blast
                    freezers,
                    IQF systems, plate freezers, brine chillers, and retail malls. Our manufacturing capabilities
                    extend to high-quality process chillers and condensing units.<br><br>

                    We offer end-to-end services, covering supply, installation, testing, and commissioning (SITC)
                    of refrigeration plants. Our commitment is to provide cost-effective, customized
                    solutions while ensuring top-notch quality. As the exclusive service provider for M/s Danfoss
                    India Ltd. in the west zone and an authorized integrator for Alfa LU-VE Group (Earlier Alfa
                    Laval India Pvt Ltd), we are dedicated to innovation, energy efficiency, and more
                    environmentally friendly
                    practices.</p>
                <!-- <a class="btn btn-primary rounded-pill px-4 me-3" href="service.html#all-services-list">Read
                        More</a> -->
            </div>
            <div class="col-lg-7">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/protection.png"
                                            alt="Service Icon" style="width: 50px; height: 50px;">
                                    </div>
                                    <h5 class="mb-3">Design and Execution of Industrial Refrigeration
                                        Projects</h5>
                                    <p>Expert design and execution of ammonia and Freon refrigeration projects,
                                        including cold storages, IQF (Individually Quick Frozen) systems, blast
                                        freezers, plate freezers, and brine chillers, ensuring efficient, tailored
                                        solutions.</p>
                                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/wrench.png"
                                            alt="Service Icon" style="width: 50px; height: 50px;">
                                    </div>
                                    <h5 class="mb-3">Supply, Installation, Testing, and Commissioning (SITC)
                                    </h5>
                                    <p>End-to-end solutions for supply, installation, testing, and commissioning
                                        (SITC), ensuring efficiency and durability.</p>
                                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 pt-md-4">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/heat-exchanger.png"
                                            alt="Service Icon" style="width: 50px; height: 50px;">
                                    </div>
                                    <h5 class="mb-3">Industrial Cooling Equipment Solutions</h5>
                                    <p>Custom manufacturing of industrial cooling equipment, including pressure
                                        vessels, condensing units, and process chillers, designed for optimal
                                        performance and reliability.</p>
                                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon btn-square">
                                        <img src="<?php bloginfo('template_directory'); ?>/img/index_images/authorize.png"
                                            alt="Service Icon" style="width: 50px; height: 50px;">
                                    </div>
                                    <h5 class="mb-3">Authorized Service Provider and Integrator</h5>
                                    <p>Authorized service provider and integrator for Danfoss and Alfa LU-VE Group
                                        (Earlier Alfa Laval India Pvt Ltd) ,
                                        delivering expert refrigeration solutions and support Across world.
                                    </p>
                                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Feature Start -->
<div class="container-fluid bg-primary feature pt-0 pt-lg-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-6 align-self-center mb-md-5 pb-md-5">
                <div class="row g-4 pt-3">
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-users fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">30</h2>
                                <p class="text-white mb-0">Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-check fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">50</h2>
                                <p class="text-white mb-0">Project Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-user-tie fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">15</h2>
                                <p class="text-white mb-0">Employees</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                            <i class="fa fa-map-marker-alt fa-3x text-white"></i>
                            <div class="ms-3">
                                <h2 class="text-white mb-0" data-toggle="counter-up">1</h2>
                                <p class="text-white mb-0">Location</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column align-items-start justify-content-center p-4 mt-5"
                    style="background-color: rgba(256, 256, 256, 0.1);">
                    <h4 class="text-white mb-3">Energy-Efficient Refrigeration Solutions</h4>
                    <h5 class="text-white mb-3">Our Commitment to Energy Efficiency</h5>
                    <p class="mb-4" style="color: rgba(255, 255, 255, .7);">Ashapuri Refrigeration, we
                        prioritize energy-efficient
                        solutions to help reduce operational costs and environmental impact. Our refrigeration
                        systems are designed to optimize performance while minimizing power consumption,
                        ensuring sustainability without compromising on quality.
                        Call to Action: Discover How We Save Energy</p>
                </div>
            </div>
            <div class="col-lg-6 pb-5 mt-4">
                <div class="d-flex flex-column align-items-start justify-content-center p-4 mb-4"
                    style="background-color: rgba(256, 256, 256, 0.1);">
                    <h4 class="text-white mb-3">Advanced Refrigeration Technology</h4>
                    <h5 class="text-white mb-3">Cutting-Edge Refrigeration Systems</h5>
                    <p class="mb-4" style="color: rgba(255, 255, 255, .7);">Utilizing the latest advancements in
                        refrigeration technology, we
                        develop systems that provide precise cooling and temperature control. Whether it's for
                        industrial chillers or specialized refrigeration units, our equipment is built for
                        durability, reliability, and performance.</p>
                </div>

                <div class="d-flex flex-column align-items-start justify-content-center p-4 mb-4"
                    style="background-color: rgba(256, 256, 256, 0.1);">
                    <h4 class="text-white mb-3">Custom Refrigeration Design and Installation</h4>
                    <h5 class="text-white mb-3">Tailored Refrigeration Solutions</h5>
                    <p class="mb-4" style="color: rgba(255, 255, 255, .7);">We understand that every business
                        has unique requirements. That’s
                        why we offer custom design and installation services, ensuring each refrigeration unit
                        is suited to your specific needs. From pressure vessels to condensing units, our team
                        ensures a seamless installation process.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Case Start -->
<!-- <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center" style="max-width: 500px;">
                <h1 class="mb-4">Case Studies Heading</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <a href="case1.html" class="text-decoration-none">
                        <div class="case-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/images/Prasad seed 2.jpg" alt="">
                            <div class="case-overlay text-decoration-none">
                                <small>Case 1</small>
                                <h5 class="lh-base text-white mb-3">Ashapuri Refrigeration Manufacturing designed a
                                    custom system, boosting production capacity</h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="case2.html" class="text-decoration-none">
                        <div class="case-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/images/Pump System(Prasad Seed,Hydrabad).jpg" alt="">
                            <div class="case-overlay text-decoration-none">
                                <small>Case 2</small>
                                <h5 class="lh-base text-white mb-3">The refrigeration system delivered enhanced
                                    reliability with reduced maintenance needs.</h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="case3.html" class="text-decoration-none">
                        <div class="case-item position-relative overflow-hidden rounded mb-2">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/images/Dairy plant Sangamner.jpg" alt="">
                            <div class="case-overlay text-decoration-none">
                                <small>Case 3</small>
                                <h5 class="lh-base text-white mb-3">This project exemplifies our expertise in creating
                                    tailored, high-performance solutions.</h5>
                                <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
<!-- Case End -->


<!-- Team Start -->
<!-- <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <h1 class="mb-4">Meet Our Experienced Team Members</h1>
                    <p class="mb-4">Discover the expertise behind our success—meet our skilled team members who bring
                        years of experience and innovation to every project. Our professionals are dedicated to
                        delivering top-notch web development solutions, ensuring your vision becomes a reality with
                        precision and excellence. Explore our team's profiles and learn more about their contributions.
                    </p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeInDownBig" data-wow-delay="0.1s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="<?php bloginfo('template_directory'); ?>/img/teams/team1.jpg" alt="">
                                        <h5 class="mb-0">Ms. Kavita Nandkishor Kotkar</h5>
                                        <small>CEO & Co-Founder </small>
                                       
                                    </div>
                                </div>
                                <div class="col-12 wow fadeInDownBig" data-wow-delay="0.5s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="<?php bloginfo('template_directory'); ?>/img/teams/team3.jpg" alt="">
                                        <h5 class="mb-0">Mithun Pedamkar</h5>
                                        <small>Senior Technician</small>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeInDownBig" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="<?php bloginfo('template_directory'); ?>/img/teams/team2.jpg" alt="">
                                        <h5 class="mb-0">Mr. Nandkishor Madhavrao Kotkar</h5>
                                        <small>Founder & Project Head</small>
                                       
                                    </div>
                                </div>
                                <div class="col-12 wow fadeInDownBig" data-wow-delay="0.7s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="<?php bloginfo('template_directory'); ?>/img/teams/team4.jpg" alt="">
                                        <h5 class="mb-0">Shubham Amrutkar</h5>
                                        <small>Design Manager</small>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
<!-- Team End -->


<!-- Testimonial Start -->
<!-- <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5">
                    <h1 class="mb-4">What Say Our Clients!</h1>
                    <p class="mb-4">Discover what our clients have to say about our manufacturing solutions. Their
                        testimonials reflect our dedication to excellence, innovation, and reliability. See how our
                        custom-built systems and outstanding service have transformed their operations, making us a
                        trusted partner in their success.</p>
                </div>
                <div class="col-lg-7 wow fadeInRightBig" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-6">Knowledgeable and Reliable Partner for Refrigeration, we have been
                                associated for more than 21 years and the association has been strong and trustworthy.
                                Wishing them all the best!</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php bloginfo('template_directory'); ?>/img/images/md_leal.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Mr. Subodh Murkewar</h5>
                                    <span>Founder and Managing Director Leal Software Solution</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-6">From our initial consultation, it was clear that Ashapuri Refrigeration
                                understood our needs precisely. We are thrilled with how they transformed our
                                requirements into a highly efficient refrigeration system. With just a few discussions,
                                detailed specifications, and an understanding of our operations, they delivered a
                                top-notch solution on time and within budget.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php bloginfo('template_directory'); ?>/img/pic-male.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Mr. Suraj Patil</h5>
                                    <span>Senior Technician</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-6">Working with Ashapuri Refrigeration was a seamless experience from start to
                                finish. Their team quickly grasped our manufacturing challenges and provided an
                                innovative refrigeration solution that exceeded our expectations. They completed the
                                project efficiently and on budget, proving their expertise and commitment to quality
                                throughout the process.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php bloginfo('template_directory'); ?>/img/pic-male.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Mr. Harshal Sai</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-6">Collaborating with Ashapuri Refrigeration was effortless and efficient.
                                Their team thoroughly understood our manufacturing challenges and delivered a
                                cutting-edge refrigeration solution that surpassed our expectations. The project was
                                completed on time and within budget, showcasing their professionalism, expertise, and
                                unwavering dedication to quality from start to finish.</p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php bloginfo('template_directory'); ?>/img/pic-male.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Mr.Ajinkya</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Testimonial End -->


<!-- FAQs Start -->
<!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center" style="max-width: 500px;">
                <h1 class="mb-4">Frequently Asked Questions</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    What types of refrigeration systems do you manufacture?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    We manufacture a range of refrigeration systems, including industrial chillers,
                                    commercial refrigeration units, and custom solutions tailored to specific needs.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do I choose the right refrigeration system for my business?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Our team will assess your specific requirements, including production volume and
                                    space constraints, to recommend the most suitable system.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What are the benefits of custom refrigeration systems?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Custom systems are designed to meet your exact specifications, ensuring optimal
                                    performance, efficiency, and integration with your existing operations.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Do you offer maintenance services for your refrigeration systems?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Yes, we provide comprehensive maintenance services to ensure your refrigeration
                                    systems operate efficiently and remain in top condition.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    How can I request a quote for a refrigeration system?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Contact us through our website or customer service, and provide details about your
                                    needs. We’ll prepare a customized quote for you.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What is the typical lead time for manufacturing and installing a refrigeration
                                    system?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Lead times vary depending on the project size. Generally, it ranges from 3 to 6
                                    months from design to installation.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Are your refrigeration systems energy-efficient?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Yes, our systems are designed with energy efficiency in mind, helping you reduce
                                    operational costs and environmental impact.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    Can you retrofit refrigeration systems into existing facilities?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Absolutely. We can retrofit our systems into existing setups, ensuring minimal
                                    disruption and optimal performance.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
<!-- FAQs Start -->


<?php
// get_sidebar();
get_footer();