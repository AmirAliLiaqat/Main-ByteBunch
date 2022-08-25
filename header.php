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
              <?php 
			  	if(has_custom_logo()) {
					the_custom_logo();
				} else { ?>
					<a class="navbar-brand" href="<?php echo get_site_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.svg" class="logo-img d-lg-inline-block d-none">
						<img src="<?php echo get_template_directory_uri(); ?>/images/logo-black.svg" class="logo-img d-inline-block d-lg-none">
					</a>
				<?php }
			   ?>
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
			if(is_home() && is_front_page()) {
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
							<?php
								$portfolio = new WP_Query( array(
									'post_type' => 'portfolio',
									'posts_per_page' => '8',
									'order' => 'ASC'
								) );

								if($portfolio->have_posts()) :
									while($portfolio->have_posts()) :
										$portfolio->the_post();
							?>
							<div class="col-lg-3 col-md-3 col-sm-3 col-3">
								<?php $url = get_post_meta($post->ID, 'site_url', true); ?>
								<?php 
									$value = get_post_meta($post->ID, 'miu_images', true); 
									$images = unserialize($value); 
									foreach ($images as $image) {
										$image;
									}
								?>
								<a href="<?php if(! empty($url)) { echo $url; } else { ''; } ?>" class="app-item">
									<img src="<?php if(! empty($image)) { echo $image; } else { echo 'http://localhost/wordpress/wp-content/uploads/2022/06/profile_placeholder.png'; } ?>" class="img-fluid">
								</a>
							</div><!--col-lg-3-->
							<?php 
									endwhile;
								endif;
							?>
						</div><!--row-->
					</div><!--col-lg-6-->
				</div><!--row-->
			</div><!--container-->
		</section>
		<?php } else { 
			if(is_author()) {
				echo '';
			} elseif(is_tag()) {
				echo '';
			} elseif(is_category()) {
				echo '';
			} else {	
		?>
		<div class="container single-page-template text-center py-5">
            <h2 class="text-white mb-4"><?php the_title(); ?></h2>
            <div class="header-links">
                <a href="<?php echo get_site_url(); ?>">Home</a>&nbsp;&nbsp;   >  &nbsp;  <?php the_title(); ?>
            </div><!--header-links-->
        </div><!--container-->
		<?php } } ?>
    </header>
    <!-------------------- Header End -------------------->
