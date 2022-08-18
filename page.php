<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ByteBunch
 */

get_header();
?>

	<section class="blog-section p-3">
        <div class="container">
            <div class="row my-4">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 page_left_content">
							<?php require_once 'template-parts/content-article.php'; ?>
                        </div><!--col-xs-12-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <?php get_sidebar(); ?>
                        </div><!--col-xs-12-->
                    </div><!--row-->
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section>

<?php
get_footer();
