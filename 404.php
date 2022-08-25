<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ByteBunch
 */
?>

<head>
    <?php wp_head(); ?>
</head>

    <?php if(is_404()) : ?>
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
    </header>
    <?php endif; ?>

<div class="container text-center my-5">
    <img src="<?php echo THEME_DIR_URI ?>/images/404.png">
    <div class="page-content">
        <h2><i>Page Not Found</i></h2>
        <p><i>It looks like nothing was found at this location. Maybe try a search?</i></p>
        <?php echo get_search_form(); ?>
    </div><!-- .page-content -->
    <p><a href="http://localhost/wordpress/" class="link">&#8592 Back to Homepage</a></p>
</div><!--container-->

<?php
get_footer();
