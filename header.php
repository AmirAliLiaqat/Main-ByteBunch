<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ByteBunch
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<!-------------------- Header Start -------------------->
	<header>
        <nav class="navbar navbar-expand-lg navbar-light navbar-primary">
          <div class="container">
              <?php the_custom_logo(); ?>
            <button
              class="navbar-toggler" type="button" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <?php 
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
              ?>
            </div><!--collapse navbar-collapse-->
          </div><!--container-->
        </nav>
		<?php 
			if(is_front_page() && is_home()) {
		?>
		<img src="<?php echo get_template_directory_uri(); ?>/images/bg-bottom.svg" class="bottom-bg">
		<section class="welcome-area">
			<div class="container">
				<div class="row header-row">
					<div class="col-lg-6 col-md-12 mb-5">
						<h2 class="mb-4">Check out our recent websites we're working on.</h2>
						<p class="mb-4">We design and develop websites that delight your users and grow your business. Enterprise-grade development combined with outstanding design development.</p>
						<a href="our-work.php" class="btn-transparent btn-white text-uppercase">All Works</a>
					</div><!--col-lg-6-->
					<div class="col-lg-5 col-md-12 mb-5 offset-lg-1">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-3">
								<?php //$url = get_post_meta($post->ID, 'site_url', true); ?>
								<?php //$value = get_post_meta($post->ID, 'miu_images', true); ?>
								<a href="https://dev.bytebunch.com/bioinnovation.com/" class="app-item">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon_bioinnovation.jpg" class="img-fluid">
								</a>
							</div><!--col-lg-3-->
							<div class="col-lg-3 col-md-3 col-sm-3 col-3">
								<a href="https://dev.bytebunch.com/induscover/" class="app-item">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon_induscover.jpg" class="img-fluid">
								</a>
							</div><!--col-lg-3-->
							<div class="col-lg-3 col-md-3 col-sm-3 col-3">
								<a href="https://makewilleasy.com/" class="app-item">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon-make-will-easy.jpg" class="img-fluid">
								</a>
							</div><!--col-lg-3-->
							<div class="col-lg-3 col-md-3 col-sm-3 col-3">
								<a href="https://test.bytebunch.com/" class="app-item">
									<img src="<?php echo get_template_directory_uri(); ?>/images/bytebunch-icon.jpg" class="img-fluid">
								</a>
							</div><!--col-lg-3-->
							<div class="col-lg-3 col-md-3 col-sm-3 col-3">
								<a href="https://dev.bytebunch.com/readingrescuers.com/" class="app-item">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon-rr.jpg" class="img-fluid">
								</a>
							</div><!--col-lg-3-->
							<div class="col-lg-3 col-md-3 col-sm-3 col-3">
								<a href="https://dev.bytebunch.com/gadzoog.com/" class="app-item">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon-gadzoog.jpg" class="img-fluid">
								</a>
							</div><!--col-lg-3-->
							<div class="col-lg-3 col-md-3 col-sm-3 col-3">
								<a href="https://dev.bytebunch.com/carmeup.com/" class="app-item">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon-carmeup.jpg" class="img-fluid">
								</a>
							</div><!--col-lg-3-->
							<div class="col-lg-3 col-md-3 col-sm-3 col-3">
								<a href="https://dev.bytebunch.com/flexjobspot.nl/" class="app-item">
									<img src="<?php echo get_template_directory_uri(); ?>/images/icon-flexjobspot.jpg" class="img-fluid">
								</a>
							</div><!--col-lg-3-->
						</div><!--row-->
					</div><!--col-lg-6-->
				</div><!--row-->
			</div><!--container-->
		</section>
		<?php } else { ?>
		<div class="container single-page-template text-center py-5">
            <h2 class="text-white mb-4"><?php the_title(); ?></h2>
            <div class="header-links">
                <a href="<?php echo get_site_url(); ?>">Home</a>&nbsp;&nbsp;   >  &nbsp;  <?php the_title(); ?>
            </div><!--header-links-->
        </div><!--container-->
		<?php } ?>
    </header>
    <!-------------------- Header End -------------------->
