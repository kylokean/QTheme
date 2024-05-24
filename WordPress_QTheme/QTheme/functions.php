<?php
/**
 * QTheme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package QTheme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function qtheme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on QTheme, use a find and replace
		* to change 'qtheme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'qtheme', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'qtheme' ),
			'menu-2' => esc_html__( 'Footer', 'qtheme' ),
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
			'qtheme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

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

	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-zoom' );
}
add_action( 'after_setup_theme', 'qtheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function qtheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'qtheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'qtheme_content_width', 0 );



/**
 * Enqueue scripts and styles.
 */
function qtheme_scripts() {
	wp_enqueue_style( 'qtheme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'qtheme-style', 'rtl', 'replace' );

	// wp_enqueue_script( 'qtheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'qtheme_scripts' );

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






/* ======== KYL 2022 theme options ========== */


/**
 * REDUX framework connection 2022
 */
require get_template_directory() . '/inc/redux-config.php';


/**
 * Register Header widget area.
 *
 */
function qtheme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header widget area 1', 'qtheme' ),
			'id'            => 'header_widgetarea_1',
			'description'   => esc_html__( 'Add widgets here.', 'qtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


	register_sidebar(
		array(
			'name'          => esc_html__( 'Header widget area 2', 'qtheme' ),
			'id'            => 'header_widgetarea_2',
			'description'   => esc_html__( 'Add widgets here.', 'qtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);


	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget area 1', 'qtheme' ),
			'id'            => 'footer_widgetarea_1',
			'description'   => esc_html__( 'Add widgets here.', 'qtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget area 2', 'qtheme' ),
			'id'            => 'footer_widgetarea_2',
			'description'   => esc_html__( 'Add widgets here.', 'qtheme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);	
}
add_action( 'widgets_init', 'qtheme_widgets_init' );




/* CSS styles for MobileMenu*/
add_action('wp_enqueue_scripts', 'qtheme_mobmenu');
function qtheme_mobmenu() {
    wp_register_style( 'myqtheme-mobmenu_css', get_template_directory_uri() . '/mobile-menu/mobile-menu-v1/mobmenu1.css' );
    wp_enqueue_style( 'myqtheme-mobmenu_css' );

	wp_enqueue_script('myqtheme-mobmenu_js', get_template_directory_uri() . '/mobile-menu/mobile-menu-v1/mobmenu1.js', array('jquery'), '3.6.0');	

}


// add_action( 'admin_head', 'callback_for_setting_up_scripts' );


// Site Logo on the WP login page
// Want to use Redux Framework variables? Set Global variable inside function first. 

function my_login_logo() { 
	global $kylthemeoptions;
	if (!empty ($kylthemeoptions['header-logo']['url']) ) {
	?>
	    <style type="text/css">
	        #login h1 a, .login h1 a {
			background-image: url(<?php echo $kylthemeoptions['header-logo']['url']; ?> );
			height:65px;
			width:320px;
			background-repeat: no-repeat;
	       	background-size: auto;
	        }
	    </style>
	<?php 
		} 
	}
add_action( 'login_enqueue_scripts', 'my_login_logo' );

//Custom logo URL on WP login page
function login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'login_logo_url' );

//Custom logo Title on WP login page
function login_logo_url_title() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_header_text', 'login_logo_url_title' );





// =========== Custom Functions ============== 

/**
 * Register Additional Header widget area.
 *
 */
// function qtheme_widgets_init2() {
// 	register_sidebar(
// 		array(
// 			'name'          => esc_html__( 'Header widget area 3', 'qtheme' ),
// 			'id'            => 'header_widgetarea_3',
// 			'description'   => esc_html__( 'Add widgets here.', 'qtheme' ),
// 			'before_widget' => '<section id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</section>',
// 			'before_title'  => '<h2 class="widget-title">',
// 			'after_title'   => '</h2>',
// 		)
// 	);
	
// }
// add_action( 'widgets_init', 'qtheme_widgets_init2' );



// load wordpress dashicons font
function ww_load_dashicons(){
     wp_enqueue_style('dashicons');
 }
 add_action('wp_enqueue_scripts', 'ww_load_dashicons');


// add arrow down/up into submenu
function arrows_in_menus( $item_output, $item, $depth, $args ) {

	if( in_array( 'menu-item-has-children', $item->classes ) ) {
		$arrow = 0 == $depth ? '<i class="dashicons dashicons-arrow-down-alt2"></i>' : '<i class="dashicons dashicons-arrow-right-alt2"></i>';
		// $item_output = str_replace( '</a>', $arrow . '</a>', $item_output );
		$item_output = str_replace( '</a>', '</a>' . $arrow, $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'arrows_in_menus', 10, 4 );