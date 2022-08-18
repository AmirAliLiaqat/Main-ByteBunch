<?php
/**
 * ByteBunch functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ByteBunch
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if( ! defined('THEME_DIR_URI')) {
	define( 'THEME_DIR_URI', get_template_directory_uri() );
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bytebunch_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bytebunch_content_width', 640 );
}
add_action( 'after_setup_theme', 'bytebunch_content_width', 0 );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
require_once 'inc/add-theme-supports.php';

/**
 * Enqueue scripts and styles.
 */
require_once 'inc/enqueue.php';

/**
 * Register widget area.
 */
require_once 'inc/widgets.php';

/**
 * Register Meta Boxes.
 */
require_once 'inc/meta-boxes.php';

/**
 * Register Custom Post Types.
 */
require_once 'inc/custom-post-types.php';

/**
 * Customizer additions.
 */
require_once 'inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require_once 'inc/jetpack.php';
}

/**
 * Implement the Custom Header feature.
 */
require_once 'inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require_once 'inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require_once 'inc/template-functions.php';

require_once 'inc/metabox-image-uploader.php';

// Metabox_Image_Uploader::register_scripts();