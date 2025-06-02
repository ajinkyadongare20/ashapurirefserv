<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ashapurirefserv
 */

?>

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S1RJG7LDC5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-S1RJG7LDC5');
    </script>
    <meta charset="utf-8">
    <title> Best Refrigeration company in Pune | Ashapuri Refrigeration </title>
    <meta name="description"
        content="Ashapuri is a leading refrigeration company in pune known for its high-quality, energy-efficient cooling solutions.Enquire now!">
    <meta name="keywords"
        content=" refrigeration company in pune, turnkey solution, cold storage near me, cold storages,cold storage business,cold storage warehouses, cold storage near me">
    <link rel="canonical" href="https://www.ashapurirefserv.com/index.html">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" rel="icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/Asfrev Logo.jpg" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Font Stylesheet Montserrat -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <a href="index.html" class="navbar-brand">
                    <img src="<?php bloginfo('template_directory'); ?>/img/Asfrev Logo.jpg" alt="Button Image"
                        class="animated slideInDown">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">



                <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'container' => false,
                            'container_class' => '',
                            'menu_class' => 'navbar-nav ms-auto',
                            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'depth' => 3,
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                    ?>



                    <!-- <div class="navbar-nav ms-auto">
                        <a href="index.html" class="nav-item nav-link active">HOME</a>
                        <a href="about.html" class="nav-item nav-link">ABOUT</a>
                        <a href="service.html" class="nav-item nav-link">SERVICES</a>
                        <div class="dropdown nav-item">
                            <button class="dropdown-toggle border-0 bg-transparent pe-4 rounded py-2 py-lg-0 px-0"
                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" style="color: rgba(255, 255, 255, 0.8);">
                                PROJECTS
                            </button>
                            <div class="dropdown-menu dropdown-menu-end shadow-lg rounded border-0 mt-2"
                                aria-labelledby="dropdownMenuButton"
                                style="background-color: #f8f9fa; min-width: 250px;">

                                <a class="dropdown-item py-3 px-4 text-dark fw-semibold"
                                    href="cold_chain_logistics.html">
                                    <i class="fas fa-snowflake me-2 text-primary"></i> Cold Chain and Logistics
                                </a>

                                <a class="dropdown-item py-3 px-4 text-dark fw-semibold"
                                    href="fisheries_food_processing.html">
                                    <i class="fas fa-cheese me-2 text-primary"></i> Fisheries & Food Processing
                                </a>

                                <a class="dropdown-item py-3 px-4 text-dark fw-semibold" href="pharmaceutical.html">
                                    <i class="fas fa-prescription-bottle-alt me-2 text-primary"></i> Pharmaceutical
                                </a>

                            </div>
                        </div>
                        <a href="product.html" class="nav-item nav-link">PRODUCT</a>
                        <a href="awards.html" class="nav-item nav-link">AWARDS</a>
                        <a href="contact.html" class="nav-item nav-link">CONTACT</a>
                    </div> -->
                    <butaton type="button" class="btn text-white p-0 d-none d-lg-block" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <div class="clearfix"></div>