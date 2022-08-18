<?php
/**
 * Template Name: Services
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

    <!-- Services Section -->
    <section class="content-area mt-5 mb-3 services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="#" class="home-services-item">
                        <h5 class="services-title">Wordpress Development Services</h5>
                        <p>ByteBunch takes pride in offering Wordpress CMS development services to a wide range of clients, ranging from large scale industries to small scale enterprises. Our dedicated Wordpress experts are highly experienced in core Wordpress framework, Wordpress website development, Wordpress theme designing and other Wordpress customization services to offer you stairway to your dreams!</p> 
                    </a>
                    <a href="#" class="home-services-item">
                        <h5 class="services-title">PHP Development Services</h5>
                        <p>The PHP expert team at ByteBunch are proficient in LAMP developer stack. We provide expert PHP programming services for developing scale-able PHP applications from simple to complex web solutions based on your specific requirements. As expert PHP development company, we work in advanced PHP development services & also PHP frameworks i.e. CodeIgnitor, Laravel.</p> 
                    </a>
                </div><!--col-lg-6-->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <a href="#" class="home-services-item active">
                        <h5 class="services-title">E-Commerce Solutions</h5>
                        <p>In this tech-savvy age, where everything is available on a single click, getting into an e-commerce business has become an ideal step to increase business revenues, establishing new markets and increase customer loyalty! ByteBunch is here to turn you idea on to an e-commerce website, which is user-friendly and captivating enough to hit your customers with a creative splash!</p> 
                    </a>
                    <a href="#" class="home-services-item">
                        <h5 class="services-title">Ruby Development Services</h5>
                        <p>Since 2010, Ruby on Rails developers we have been helping software companies/start-ups to deliver web applications faster & at a lower cost. Over the years, we have matured to become expert Ruby on Rails development team. Our Rails developers follow the famous SCRUM methodology, but open to other methodologies applied by our clients.</p> 
                    </a>
                </div><!--col-lg-6-->
            </div><!--row-->
        </div><!--container-->
    </section>

<?php    
get_footer();
?>