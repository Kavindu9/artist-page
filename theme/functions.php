<?php


if ( ! defined( 'NOVA_MALDIVES_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'NOVA_MALDIVES_VERSION', '1.0.1' );
}

// Register post types / cmb / metaboxes
require_once __DIR__ . '/app/types.php';
require_once __DIR__ . '/app/cmb2/init.php';
require_once __DIR__ . '/app/fields.php';




// Cleanup wp_head
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version
remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links
remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)
remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0); // Remove shortlink

// hides admin bar
// function hide_admin_bar(){ return false; }
// add_filter( 'show_admin_bar', 'hide_admin_bar' );

// theme setup
// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 640;

// Register Theme Features
function nova_theme_features()  {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_image_size('thumbi', 760, 872, true); 


	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );

}
add_action( 'after_setup_theme', 'nova_theme_features' );


/**
 * Specify JS bundle path.
 *
 * @return void
 */
/**
 * Enqueue scripts and styles.
 */
function nova_maldives_scripts() {
	wp_enqueue_style( 'nova-maldives-style', get_stylesheet_uri(), array(), NOVA_MALDIVES_VERSION );
	wp_enqueue_script( 'nova-maldives-script', get_template_directory_uri() . '/js/script.min.js', array(), NOVA_MALDIVES_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nova_maldives_scripts' );

function wp_nova_load_scripts() {
	wp_enqueue_script( 'xmain', get_template_directory_uri() . '/js/main.js?v=01.1' );
}
add_action( 'wp_footer', 'wp_nova_load_scripts' );





/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string $key     Options array key
 * @param  mixed  $default Optional default value
 * @return mixed           Option value
 */
function nova_get_option( $key = '', $default = false ) {
    if ( function_exists( 'cmb2_get_option' ) ) {
        // Use cmb2_get_option as it passes through some key filters.
        return cmb2_get_option( 'nova_settings', $key, $default );
    }

    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option( 'nova_settings', $default );

    $val = $default;

    if ( 'all' == $key ) {
        $val = $opts;
    } elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
        $val = $opts[ $key ];
    }

    return $val;
}

function nova_category_id_class($classes) {
    global $post;
    foreach((get_the_category($post->ID)) as $category)
        $classes[] = $category->category_nicename;
    return $classes;
}
add_filter('post_class', 'nova_category_id_class');

?>