<?php
/**
 * Template Name: Contact
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ByteBunch
 */

get_header();
?>

    <section class="contact-area">
        <div class="contact_us_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3404.6525990683112!2d74.35811671542261!3d31.423696259052836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391907f981d3f509%3A0x45c363073ca58a20!2sByteBunch!5e0!3m2!1sen!2s!4v1640074953441!5m2!1sen!2s" 
            width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div><!--contact_us_map-->
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-md-5 contact_us_form text-center bg-white my-5 py-3">
                    <h2>Get in Touch</h2>
                    <p>Please fill out the form below and we will get back to you within 1-2 business days. We look forward to serving you!</p>
                    <form action="" method="post"> 
                        <input type="text" name="user_name" class="form-control mb-3" placeholder="Name*" value="" required> 
                        <input type="text" name="user_subject" class="form-control mb-3" placeholder="Subject" value="" required> 
                        <input type="email" name="user_email" class="form-control mb-3" placeholder="Email*" value="">
                        <textarea name="user_message" id="" cols="30" rows="5" class="form-control mb-3" placeholder="Message*" required></textarea>
                        <button type="submit" class="btn-blue text-uppercase btn-transparent">Submit</button>
                    </form>
                </div><!--col-12-->
            </div><!--row-->
        </div><!--container-->
    </section><!--contact-area-->

<?php
get_footer();
?>