<?php
/**
 * Single Post Template.
 *
 * @package ByteBunch
*/
get_header();
?>

    <!-------------------- Section Start -------------------->
    <section class="blog-section p-3">
        <main>
            <div class="container">
                <div class="row my-4">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-8">
                                <?php
                                    if(have_posts()) {
                                        while(have_posts()) {
                                            the_post();
                                ?>
                                <article class="bg-white mb-4">
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
                                        <p><?php the_content(); ?></p>
                                        <div class="post_tags"><?php the_tags(); ?></div>
                                        <div class="d-flex">Categorised in: <?php the_category(); ?></div>
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
                                    }
                                ?>
                                <?php 
                                    $comments =  get_comments( array( 'post_id' => get_the_ID() ) );
                                    foreach ($comments as $comment) : ?>
                                        <div class="show_comment bg-white p-3 pb-0 my-2">
                                            <div class="comment_head d-flex my-3">
                                                <div class="profile">
                                                    <img src="<?php echo THEME_DIR_URI; ?>/images/profile_placeholder.png" class="comment_user_profile"> 	&nbsp;&nbsp;&nbsp;
                                                </div><!--profile-->
                                                <div class="details">
                                                    <a href="" class="fst-italic link"><?php echo $comment->comment_author; ?></a>
                                                    <p>
                                                        <?php echo get_comment_date( 'F j, Y' ); ?> at
                                                        <?php echo get_comment_time( 'h:s a' ); ?>
                                                    </p>
                                                </div><!--details-->
                                            </div><!--comment_head-->
                                            <div class="comment_content">
                                                <?php echo $comment->comment_content; ?>
                                            </div><!--comment_content-->
                                            <div class="comment_footer text-end">
                                                <a href="" class="blue-btn mb-0">Reply</a>
                                            </div><!--comment_footer-->
                                        </div><!--show_comment-->
                                <?php endforeach; ?>
                                <div class="comment_section bg-white p-3 pb-0 mt-4">
                                    <?php comment_form(); ?>
                                </div><!--comment_section-->
                            </div><!--col-md-8-->
                            <div class="col-md-4">
                                <?php get_sidebar(); ?>
                            </div><!--col-md-4-->
                        </div><!--row-->
                    </div><!--col-md-12-->
                </div><!--row-->
            </div><!--container-->
       </main>
    </section>
    <!-------------------- Section End -------------------->

<?php
get_footer();
?>