<?php
/**
 * The main template file
 * Template Name: Contact
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
                <h1 class="display-4 text-white mb-4">Contact Us</h1>
            </div>
            <div class="col-lg-6 align-self-start text-start text-lg-start my-0 my-lg-5">
                <p class="text-white my-4">Get in touch with Ashapuri Refrigeration
                    Manufacturing! We're here to assist with your refrigeration needs. Reach out for
                    inquiries, support, or customized solutions. Our team is ready to provide prompt and
                    reliable assistance for your business.</p>
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


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-3 py-lg-5">
        <div class="mx-auto text-center" style="max-width: 500px;">
            <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Contact Us</div> -->
            <h1 class="mb-4">Get in Touch with Our Team</h1>
        </div>
        <div class="row pt-2 pt-lg-5">
            <div class="col-lg-7">
                <?php echo do_shortcode('[contact-form-7 id="a66ca81" title="Contact form 1"]'); ?>
            </div>

            <div class="col-lg-5 pt-5 pt-lg-0">
                <div class="maps">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12406.871679295358!2d73.8568268!3d18.4782417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c14b82850e6f%3A0x506c4c97a227c599!2sFlat+No.+102%2C+Plot+No.+B%2F6%2C+Sneh-Sagar%2C+Chandrika+Society%2C+Chandralok+Hospital+Lane%2C+Bibwewadi%2C+Pune%2C+Maharashtra+411037!5e0!3m2!1sen!2sin!4v1706007251123!5m2!1sen!2sin"
                        width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<?php
// get_sidebar();
get_footer();