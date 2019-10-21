<?php
/**
 * test_task functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package test_task
 */
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
function my_scripts_method() {
    // отменяем зарегистрированный jQuery
    // вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
}
if ( ! function_exists( 'test_task_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function test_task_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on test_task, use a find and replace
		 * to change 'test_task' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'test_task', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'test_task' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'test_task_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'test_task_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function test_task_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'test_task_content_width', 640 );
}
add_action( 'after_setup_theme', 'test_task_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function test_task_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'test_task' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'test_task' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'test_task_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function test_task_scripts() {
	wp_enqueue_style( 'test_task-style', get_stylesheet_uri() );

	wp_enqueue_script( 'test_task-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'test_task-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'test_task_scripts' );

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function load_bootstrap()
{
    wp_enqueue_style( 'bootstrap_min_css', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap_min_js', get_stylesheet_directory_uri() . '/libs/bootstrap/js/bootstrap.min.js');

}
add_action('wp_enqueue_scripts', 'load_bootstrap');

function load_scripts() //тут остальні скріпти і стилі
{
    wp_enqueue_style( 'owl_carousel_min_css', get_template_directory_uri() . '/libs/owl-carousel/assets/owl.carousel.min.css');
    wp_enqueue_style('media_css', get_stylesheet_directory_uri() . '/css/media.css');
    wp_enqueue_style('fons_css', get_stylesheet_directory_uri() . '/css/fons.css');
    wp_enqueue_style( 'owl_theme_default_min_css', get_template_directory_uri() . '/libs/owl-carousel/assets/owl.theme.default.min.css');
    wp_enqueue_script('owl_carousel_min_js', get_stylesheet_directory_uri() . '/libs/owl-carousel/owl.carousel.min.js');
    wp_enqueue_script('spincrement', get_stylesheet_directory_uri() . '/js/jquery.spincrement.min.js');
    wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js');
}
add_action('wp_enqueue_scripts', 'load_scripts');

add_action('init', 'sennza_register_cpt_testimonial');
function sennza_register_cpt_testimonial()
{
    $args = array(
        'public' => true,
        'query_var' => 'testimonial',
        'rewrite' => array(
            'slug' => 'testimonials',
            'with_front' => false
        ),
        'supports' => array(
            'title',
            'editor',
            'author',
            'thumbnail',
            'revisions'
        ),
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
            'add_new' => 'Add New Testimonial',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'new_item' => 'New Testimonial',
            'view_item' => 'View Testimonial',
            'search_items' => 'Search Testimonials',
            'not_found' => 'No testimonials found',
            'not_found_in_trash' => 'No testimonials found in Trash',
        ),
    );
    register_post_type('testimonial', $args);
}


