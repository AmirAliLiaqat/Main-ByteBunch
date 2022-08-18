<?php

    if(have_posts()) {
        while(have_posts()) {
            the_post();
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
                <img src="<?php echo get_template_directory_uri(); ?>/images/facebook_like.png"/>
            </a>
        </span>
        <span class="twitter_share">
            <a href="https://twitter.com/intent/tweet?original_referer=<?php site_url(); ?>/&ref_src=twsrc%5Etfw&text=&tw_p=tweetbutton&url=<?php site_url(); ?>/<?php the_permalink(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tweet.png"/>
            </a>
        </span>
        <span class="linkedin_share hidden-xs">
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php site_url(); ?>/<?php the_permalink(); ?>/&title=&summary=1.%20Hit%20%E2%80%9CWindows%20Key%20+%20R%E2%80%9D%20to%20open%20the%20run%20dialogue%20box.%202.%20Enter%C2%A0diskpart%C2%A0and%20click%20%E2%80%9COK%E2%80%9D%20to%20open%20a%20black%20command%20prompt%20window.%20%E2%80%9Clist%20disk%E2%80%9D%20(It%20displays%20all%20the%20disks%20of%20your%20computer.%20)%20%E2%80%9Csel%20disk%200%E2%80%9D%20(...">
                <img src="<?php echo get_template_directory_uri(); ?>/images/linked_share.png"/>
            </a>
        </span>
        <span class="google_share hidden-xs">
            <a href="https://plus.google.com/share?url=<?php site_url(); ?>/<?php the_permalink(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/images/google-plus-icon.png"/>
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
<?php wp_reset_postdata(); ?>
<div class="pagination mb-3">
    <?php echo paginate_links(); ?>
</div><!--pagination-->