<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ByteBunch
 */

get_header();
?>

<!-- <head>
    <?php //wp_head(); ?>
</head> -->

<div class="container text-center my-5">
    <img src="<?php echo THEME_DIR_URI ?>/images/404.png">
    <div class="page-content">
        <h2><i>Page Not Found</i></h2>
        <p><i>It looks like nothing was found at this location. Maybe try a search?</i></p>
        <?php get_search_form(); ?>
    </div><!-- .page-content -->
    <p><a href="http://localhost/wordpress/" class="link">&#8592 Back to Homepage</a></p>
</div><!--container-->

<?php
get_footer();
