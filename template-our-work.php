<?php
/**
 * Template Name: Our Work
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

    <!-- Portfolio Section -->
    <section class="portfolio-section py-5 border-bottom">
        <div class="container text-center">
            <div class="row">
                <?php
                    $portfolio = new WP_Query( array(
                        'post_type' => 'portfolio',
                        'order_by'=> 'post_id',
                        'order' => 'ASC'
                    ) );

                    if($portfolio->have_posts()) {
                        while($portfolio->have_posts()) {
                            $id = 1;
                            $portfolio->the_post();
                ?>
                <div class="col-md-4 col-sm-6 portfolio-item justify-content-center mb-4">
                    <a href="#" class="portfolio-link" data-bs-toggle="modal" data-bs-target="#portfolio-item-<?php the_ID(); ?>">
                        <?php
                            if (class_exists('MultiPostThumbnails')) {                              
                                // Loops through each feature image and grabs thumbnail URL
                                $image_name = 'secondary-image';  // sets image name as secondary-image-1, secondary-image-2 etc.
                                if (MultiPostThumbnails::has_post_thumbnail('portfolio', $image_name)) { 
                                    $image_id = MultiPostThumbnails::get_post_thumbnail_id( 'portfolio', $image_name, $post->ID );  // use the MultiPostThumbnails to get the image ID
                                    $image_thumb_url = wp_get_attachment_image_src( $image_id);  // define thumb src based on image ID
                                    $image_secondary_url = wp_get_attachment_image_src( $image_id,'secondary-image' ); // define full size src based on image ID
                                    $attr = array(
                                        'class' => "img-responsive",      // set custom class
                                        'rel' => $image_thumb_url[0],   // sets the url for the image thumbnails size
                                        'src' => $image_secondary_url[0], // sets the url for the full image size 
                                    );                                                                                      
                                    // Use wp_get_attachment_image instead of standard MultiPostThumbnails to be able to tweak attributes
                                    $image = wp_get_attachment_image( $image_id, 'secondary-image', false, $attr );                     
                                    echo $image;
                                }                     
                                
                            }; // end if MultiPostThumbnails
                        ?>
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
    <?php
        $portfolio = new WP_Query( array(
            'post_type' => 'portfolio',
            'order_by'=> 'post_id',
            'order' => 'ASC'
        ) );

        if($portfolio->have_posts()) {
            while($portfolio->have_posts()) {
                $portfolio->the_post();
    ?>
    <div class="portfolio-modal modal fade" id="portfolio-item-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog m-0" role="document">
            <div class="modal-content pb-5">
                <div class="modal-header border-0">
                    <a type="button" class="btn-close pt-5" data-bs-dismiss="modal" aria-label="Close" style="font-size: 48px; padding-right: 35px;"></a>
                </div><!--modal-header-->
                <div class="container text-center">
                    <div class="modal-body">
                        <h2 class="mb-5"><?php the_title(); ?></h2> 
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive" alt="<?php the_title(); ?>"> 
                        <p class="mt-4">You can preview 
						    <?php $url = get_post_meta($post->ID, 'site_url', true); ?>
                            <a href="<?php echo $url; ?>" rel="nofollow" target="_blank">here</a>.
                        </p> 
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                            Close Project
                        </button>
                    </div><!--modal-body-->
                </div><!--container-->
            </div><!--modal-content-->
        </div><!--modal-dialog-->
    </div><!--portfolio-modal-->
    <?php 
            }
        }
    ?>

<?php
get_footer();
?>