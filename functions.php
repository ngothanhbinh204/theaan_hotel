<?php

/**
 * theann-hotel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theann-hotel
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function theann_hotel_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on theann-hotel, use a find and replace
		* to change 'theann-hotel' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('theann-hotel', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'theann-hotel'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'theann_hotel_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'theann_hotel_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theann_hotel_content_width()
{
	$GLOBALS['content_width'] = apply_filters('theann_hotel_content_width', 640);
}
add_action('after_setup_theme', 'theann_hotel_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theann_hotel_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'theann-hotel'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'theann-hotel'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'theann_hotel_widgets_init');

/**
 * Enqueue scripts and styles.
 */

function theann_hotel_assets()
{
	// Enqueue theme style
	wp_enqueue_style('theann-hotel-style', get_stylesheet_directory_uri() . '/dist/css/style.min.css', array(), _S_VERSION);

	// Enqueue Foundation (nếu cần)
	if (is_front_page()) {
		wp_enqueue_style('foundation-css', 'https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/css/foundation.min.css');
		wp_enqueue_script('foundation-js', 'https://cdn.jsdelivr.net/npm/foundation-sites@6.7.5/dist/js/foundation.min.js', array('jquery'), '', true);
	}

	// Enqueue Navigation Script
	wp_enqueue_script('theann-hotel-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	// Enqueue comment-reply nếu có bình luận mở
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'theann_hotel_assets');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
// require_once get_template_directory() . '/wordpress-integration.php';


function theann_hotel_enqueue_styles()
{
	wp_enqueue_style('theann-style', get_stylesheet_directory_uri() . '/dist/css/style.min.css');
}
add_action('wp_enqueue_scripts', 'theann_hotel_enqueue_styles');


// function register_my_menus()
// {
// 	register_nav_menus(array(
// 		'primary' => __('Primary Menu'),
// 		'footer'  => __('Footer Menu'),
// 		'sidebar' => __('Sidebar Menu')
// 	));
// }
// add_action('after_setup_theme', 'register_my_menus');



function theme_setup()
{
	// Add theme support
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

	// Register navigation menus
	register_nav_menus(array(
		'primary-menu' => __('Primary Menu', 'theme'),
	));
}
add_action('after_setup_theme', 'theme_setup');

function theme_scripts()
{
	// Enqueue styles
	wp_enqueue_style('theme-style', get_stylesheet_uri());

	// Enqueue JavaScript
	wp_enqueue_script(
		'main-js',
		get_template_directory_uri() . './assets/js/main.js',
		array(),
		'1.0.0',
		true
	);

	// Pass menu data to JavaScript
	$menu_items = wp_get_nav_menu_items('primary-menu');
	$menu_data = convert_menu_items_to_tree($menu_items);

	wp_localize_script(
		'main-js',
		'menuData',
		$menu_data
	);
}
add_action('wp_enqueue_scripts', 'theme_scripts');

function convert_menu_items_to_tree($items, $parent_id = 0)
{
	$branch = array();

	foreach ($items as $item) {
		if ($item->menu_item_parent == $parent_id) {
			$children = convert_menu_items_to_tree($items, $item->ID);
			$menu_item = array(
				'id' => $item->ID,
				'label' => $item->title,
				'url' => $item->url
			);

			if (!empty($children)) {
				$menu_item['children'] = $children;
			}

			$branch[] = $menu_item;
		}
	}

	return $branch;
}