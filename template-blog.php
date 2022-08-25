<?php
/**
 * Template Name: Blog
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
                            <?php
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                $all_posts = new WP_Query( array(
                                    'post_type' => 'post', 
                                    'posts_per_page' => 5,
                                    'paged' => $paged,
                                    )
                                ); 
                                if($all_posts->have_posts()) {
                                    while($all_posts->have_posts()) {
                                        $all_posts->the_post();
                            ?>
                            <article class="mb-4 bg-white">
                                <div class="post-header">
                                    <div class="time text-center">
                                        <span class="date d-block"><?php the_date('j'); ?></span>
                                        <span class="months"><?php echo get_the_date('F'); ?></span>
                                    </div><!--time-->
                                    <div class="title">
                                        <h2>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h2>
                                        <span class="author mb-3">Written By <?php the_author_posts_link(); ?></span>
                                    </div><!--title-->
                                </div><!--post-header-->
                                <div class="post-content">
                                <p> 
                                    <?php the_excerpt(); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="blue-btn">Read More</a>
                                </div><!--post-content-->
                                <div class="post-footer">
                                    <span class="facebook_share">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php site_url(); ?>/<?php the_permalink(); ?>">
                                            <img src="<?php echo THEME_DIR_URI; ?>/images/facebook_like.png"/>
                                        </a>
                                    </span>
                                    <span class="twitter_share">
                                        <a href="https://twitter.com/intent/tweet?original_referer=<?php site_url(); ?>/&ref_src=twsrc%5Etfw&text=&tw_p=tweetbutton&url=<?php site_url(); ?>/<?php the_permalink(); ?>">
                                            <img src="<?php echo THEME_DIR_URI; ?>/images/tweet.png"/>
                                        </a>
                                    </span>
                                    <span class="linkedin_share hidden-xs">
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php site_url(); ?>/<?php the_permalink(); ?>/&title=&summary=1.%20Hit%20%E2%80%9CWindows%20Key%20+%20R%E2%80%9D%20to%20open%20the%20run%20dialogue%20box.%202.%20Enter%C2%A0diskpart%C2%A0and%20click%20%E2%80%9COK%E2%80%9D%20to%20open%20a%20black%20command%20prompt%20window.%20%E2%80%9Clist%20disk%E2%80%9D%20(It%20displays%20all%20the%20disks%20of%20your%20computer.%20)%20%E2%80%9Csel%20disk%200%E2%80%9D%20(...">
                                            <img src="<?php echo THEME_DIR_URI; ?>/images/linked_share.png"/>
                                        </a>
                                    </span>
                                    <span class="google_share hidden-xs">
                                        <a href="https://plus.google.com/share?url=<?php site_url(); ?>/<?php the_permalink(); ?>">
                                            <img src="<?php echo THEME_DIR_URI; ?>/images/google-plus-icon.png"/>
                                        </a>
                                    </span>
                                    <span class="post_comments">
                                        <a href="" class="link"><?php echo get_comments_number(); ?> comment<?php echo get_comments_number() > 1 ? 's' : ''; ?></a>
                                    </span>
                                </div><!--post-footer-->
                            </article>
                            <?php 
                                    }
                                } else {
                                    echo 'Sorry, no posts found.';
                                }
                            ?>
                            <?php wp_reset_postdata(); ?>
                            <div class="pagination">
                                <?php 
                                    echo paginate_links( array(
                                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                        'total'        => $all_posts->max_num_pages,
                                        'current'      => max( 1, get_query_var( 'paged' ) ),
                                        'format'       => '?paged=%#%',
                                        'show_all'     => false,
                                        'type'         => 'plain',
                                        'end_size'     => 2,
                                        'mid_size'     => 1,
                                        'prev_next'    => true,
                                        'prev_text'    => sprintf( '<i></i> %1$s', __( '« Previous', 'text-domain' ) ),
                                        'next_text'    => sprintf( '%1$s <i></i>', __( 'Next »', 'text-domain' ) ),
                                        'add_args'     => false,
                                        'add_fragment' => '',
                                    ) );
                                ?>
                            </div><!--pagination-->
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
