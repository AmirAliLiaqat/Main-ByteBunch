<?php
/**
 * The main template file
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
    <section class="content content-home">
        <div class="container services-section">
            <div class="row align-items-end">
                <div class="col-lg-5 col-md-12">
                    <h2>Start-to-end website development agency</h2>
                    <p>ByteBunch has been providing technology solutions to solve specific business problems. We specialize in providing customized solutions to our customers based on their specific business needs. We have specialized team having expertise in Web Applications development and business software solutions such as CRM. We help you boost your business through our ready software solutions.</p>
                    <p class="mb-4">We can build any type or size website you require, from small custom designed websites to highly advanced online stores. We also offer lots of help and advice along the way, so don’t stress on the off chance that you are not a web master, we have you secured. Not just this but we also give basic training for the best way to utilize your website.</p>
                    <a href="services.php" class="btn-transparent btn-blue">SERVICES</a>
                </div><!--col-lg-5-->
                <div class="col-lg-6 col-md-12 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="#" class="home-services-item first-item">
                                <h5 class="services-title">Wordpress Development Services</h5>
                                <p>ByteBunch takes pride in offering Wordpress CMS development services to a wide range of clients, ranging from large scale industries to small scale enterprises.</p> 
                            </a>
                            <a href="#" class="home-services-item second-item">
                                <h5 class="services-title">PHP Development Services</h5>
                                <p>We provide expert PHP programming services for developing scale-able PHP applications from simple to complex web solutions based on your specific requirements.</p> 
                            </a>
                        </div><!--col-lg-6-->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <a href="#" class="home-services-item active">
                                <h5 class="services-title">E-Commerce Solutions</h5>
                                <p>In this tech-savvy age, where everything is available on a single click, getting into an e-commerce business has become an ideal step to increase business revenues.</p> 
                            </a>
                            <a href="#" class="home-services-item">
                                <h5 class="services-title">Ruby Development Services</h5>
                                <p>Since 2014, Ruby on Rails developers we have been helping software companies/start-ups to deliver web applications faster &amp; at a lower cost. Over the years, we have matured to become expert.</p> 
                            </a>
                        </div><!--col-lg-6-->
                    </div><!--row-->
                </div><!--col-lg-5-->
            </div><!--row-->
        </div><!--container-->
    </section>

    <!-- Portfolio Section -->
    <section class="portfolio-section py-5 my-5">
        <div class="container text-center">
            <h2 class="mb-4">PORTFOLIO</h2>
            <p>We at ByteBunch love endless possibilities web technologies. Project to project we have developed, designed, and customized a variety of work. Technology is our specialty, but we always develop our projects based on the needs of our clients. Take a look at our work and see if our experience relates to some of your business goals.</p>
            <div class="row">
                <?php
                    $portfolio = new WP_Query( array(
                        'post_type' => 'portfolio',
                        'posts_per_page' => '6',
                        'order' => 'ASC'
                    ) );

                    if($portfolio->have_posts()) {
                        while($portfolio->have_posts()) {
                            $id = 1;
                            $portfolio->the_post();
                ?>
                <div class="col-md-4 col-sm-6 portfolio-item justify-content-center mb-4">
                    <a href="#" class="portfolio-link" data-bs-toggle="modal" data-bs-target="#portfolio-item-1"> 
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive"> 
                    </a>
                    <div class="portfolio-caption text-center">
                        <h4 class="text-dark"><?php the_title(); ?></h4>
                        <p class="text-muted fst-italic text-center">Web Development Services</p>
                    </div><!--portfolio-caption-->
                </div><!--col-md-4-->
                <?php 
                        }
                    }
                ?>
            </div><!--row-->
        </div><!--container-->
    </section>

    <!-- Modal Boxes -->
    <div class="portfolio-modal modal fade" id="portfolio-item-1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog m-0" role="document">
            <div class="modal-content pb-5">
                <div class="modal-header border-0">
                    <a type="button" class="btn-close pt-5" data-bs-dismiss="modal" aria-label="Close" style="font-size: 48px; padding-right: 35px;"></a>
                </div><!--modal-header-->
                <div class="container text-center">
                    <?php
                        // $portfolio = new WP_Query( array(
                        //     'post_type' => 'portfolio',
                        //     'posts_per_page' => '6',
                        //     'order' => 'ASC'
                        // ) );

                        // if($portfolio->have_posts()) {
                        //     while($portfolio->have_posts()) {
                        //         $portfolio->the_post();
                    ?>
                        <div class="modal-body">
                            <h2 class="mb-5"><?php the_title(); ?></h2> 
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive" alt="<?php the_title(); ?>"> 
                            <p class="mt-4">You can preview 
                                <a href="#" rel="nofollow" target="_blank">here</a>.
                            </p> 
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                                Close Project
                            </button>
                        </div><!--modal-body-->
                    <?php 
                        //     }
                        // }
                    ?>
                </div><!--container-->
            </div><!--modal-content-->
        </div><!--modal-dialog-->
    </div><!--portfolio-modal-->

    
    <!-- Our Team Section -->
    <section class="our-team-section my-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Team</h2>
            <div class="row my-4">
                <?php
                    $team = new WP_Query( array(
                        'post_type' => 'team',
                        'posts_per_page' => '10',
                        'order' => 'ASC'
                    ) );

                    if($team->have_posts()) {
                        while($team->have_posts()) {
                            $team->the_post();
                ?>
                <div class="col-md-6">
                    <div class="team mb-4 <?php echo get_post_meta( $post->ID,  'is_active', true ); ?>">
                        <div class="team_head d-flex my-3">
                            <div class="profile">
                                <?php the_post_thumbnail(); ?>
                            </div><!--profile-->
                            <div class="description">
                                <strong><b><?php the_title(); ?></b></strong> <br>
                                <small><i><?php echo get_post_meta( $post->ID,  'team_designation', true ); ?></i></small>
                                <div class="social-links">
                                    <a href="<?php echo get_post_meta( $post->ID,  'team_facebook_url', true ); ?>"><i class="fab fa-facebook-f"></i></i></a>
                                    <a href="<?php echo get_post_meta( $post->ID,  'team_twitter_url', true ); ?>"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo get_post_meta( $post->ID,  'team_linkedin_url', true ); ?>"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="<?php echo get_post_meta( $post->ID,  'team_github_url', true ); ?>"><i class="fab fa-github"></i></a>
                                </div><!--social-links-->
                            </div><!--description-->
                        </div><!--team_head-->
                        <div class="team_content my-3">
                            <?php the_content(); ?>
                        </div><!--team_content-->
                    </div><!--team-->
                </div><!--col-md-6-->
                <?php 
                        }
                    }
                ?>
            </div><!--row-->
        </div><!--container-->
    </section>

<?php
get_footer();
