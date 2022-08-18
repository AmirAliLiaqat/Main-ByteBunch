<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ByteBunch
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="sidebar">
	<div class="widget bg-white mb-4 p-3 widget_search">
		<?php
			get_search_form();
		?>
	</div><!--widget-->
	<div class="widget bg-white mb-4 p-3 newsletter ">
		<h3 class="widget_title">SUBSCRIBE</h3>
		<form action="#" method="post" class="subscribe_form">
			<p>Sign up to be the first to know our newest products, updates and events.</p>
			<input type="email" value="" class="form-control mb-2" placeholder="Email Address" name="email" required>
			<input type="submit" class="subscribe w-100 text-uppercase" value="Subscribe">
			<div class="ajax_loader_div">
				<span class="ajax_loader d-none">
					Processing... <img src="https://test.bytebunch.com/wp-content/themes/bbblog/images/loadingAnimation.gif" alt="" style="width: 100%;margin-top:5px;">
				</span>
				<span class="ajax_message"></span>
			</div><!--ajax_loader_div-->
		</form>
	</div><!--widget-->
	<div class="widget bg-white mb-4 p-3 tags">
		<h3 class="widget_title">Tags</h3>
		<div class="tagcloud">
			<?php 
				$tags = get_tags(array(
				'taxonomy' => 'post_tag',
				'orderby' => 'name',
				'hide_empty' => false // for development
				)); 

				if($tags) {
					foreach ($tags as $tag):
					echo $output = '<a href="'. get_term_link($tag).'">'. $tag->name .'</a>';
					endforeach;
				}
			?>
		</div><!--tagcloud-->
	</div><!--widget-->
	<div class="widget mb-4 tabs">
            <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                <li class="nav-item border-0" role="presentation">
                    <button class="nav-link active border-0" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Recent Posts</button>
                </li>
                <li class="nav-item border-0" role="presentation">
                    <button class="nav-link border-0" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Popular Posts</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active p-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <ul id="slider-id" class="slider-class list-unstyled">
                        <?php
                            $recent_posts = wp_get_recent_posts(array(
                                'numberposts' => 4,
                                'post_status' => 'publish'
                            ));
                            foreach( $recent_posts as $post_item ) : ?>
                                <li>
                                    <div class="recent_posts">
                                        <span class="widgettitle">
                                            <a href="<?php echo get_permalink($post_item['ID']) ?>">
                                            <?php echo $post_item['post_title'] ?>
                                            </a>
                                        </span>
                                        <span class="post_meta"><?php echo $post_item['post_date']; ?></span>
                                    </div><!--recent_posts-->
                                </li>
                        <?php endforeach; ?>
                    </ul>
                </div><!--tab-pane-->
                <div class="tab-pane fade p-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <ul id="slider-id" class="slider-class list-unstyled">
                        <?php
                            $recent_posts = wp_get_recent_posts(array(
                                'numberposts' => 4,
                                'post_status' => 'publish'
                            ));
                            foreach( $recent_posts as $post_item ) : ?>
                                <li>
                                    <div class="recent_posts">
                                        <span class="widgettitle">
                                            <a href="<?php echo get_permalink($post_item['ID']) ?>">
                                            <?php echo $post_item['post_title'] ?>
                                            </a>
                                        </span>
                                        <span class="post_meta"><?php echo $post_item['post_date']; ?></span>
                                    </div><!--recent_posts-->
                                </li>
                        <?php endforeach; ?>
                    </ul>
                </div><!--tab-pane-->
            </div><!--tab-content-->
        </div><!--widget-->
</aside>
