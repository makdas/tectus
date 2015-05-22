<?php
/**
 * Tectus functions and definitions
 *
 * @package Tectus
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'tectus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tectus_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Tectus, use a find and replace
	 * to change 'tectus' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'tectus', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'tectus' ),
		) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
		) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'tectus_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
		) ) );
}
endif; // tectus_setup
add_action( 'after_setup_theme', 'tectus_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function tectus_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tectus' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
		) );
}
add_action( 'widgets_init', 'tectus_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tectus_scripts() {
	wp_enqueue_style( 'tectus-style', get_stylesheet_uri() );

	wp_enqueue_script( 'tectus-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'tectus-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tectus_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/*naude*/

require_once('wp_bootstrap_navwalker.php');

function tectus_enqueue_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script("tectus", get_stylesheet_directory_uri()."/js/tectus.js");
	wp_enqueue_script("bootstrap", get_stylesheet_directory_uri()."/bootstrap/js/bootstrap.min.js");
}

if(!is_admin()){
	add_action('wp_enqueue_scripts', 'tectus_enqueue_scripts');
}





//[products]
function products_func( $atts ){
	global $post;

	$products = get_field('product');

	foreach($products as $product){

		if($post->ID != 82){?>

		<div class="product">
			<div class="box">
				<table class="">
					<tr>
						<td class="productinfo" width="70%">
							<div class="boxpadding">
								<h3><?php echo $product['title']; ?></h3>
								<div class="row">
									<div class="col-sm-7">								
										<div class="descrip"><?php echo $product['description']; ?></div>
									</div>
									<div class="col-sm-5">
										<img src="<?php echo get_stylesheet_directory_uri();?>/images/products2_icon.png" />
									</div>
								</div>
							</div>

						</td>
						<td class="extras extras2">
						<img product="<?php echo $product['title']; ?>" class="enquireimg" data-toggle="modal" data-target="#myModal" src="<?php echo get_stylesheet_directory_uri();?>/images/enquire.png" />
							<h4>ENQUIRE ABOUT THIS PRODUCT</h4>
						</td>
					</tr>

				</table>
			</div>
		</div>


		<?php }

		else { ?>

		<div class="product">
			<div class="box">
				<table>
					<tr>
						<td rowspan="2" class="productinfo" width="70%">
							<div class="boxpadding">
								<h3><?php echo $product['title']; ?></h3>
								<div class="row">
									<div class="col-sm-7">								
										<div class="descrip"><?php echo $product['description']; ?></div>
									</div>
									<div class="col-sm-5">
										<img src="<?php echo $product['image']['url']; ?>" />
									</div>
								</div>
							</div>

						</td>
						<td class="extras firstextra" height="50%">
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/techspec.png" />
							<h4>DOWNLOAD TECH SPEC</h4>
						</td>
					</tr>
					<tr>
						<td class="extras">
						<img  product="<?php echo $product['title']; ?>" class="enquireimg" data-toggle="modal" data-target="#myModal" src="<?php echo get_stylesheet_directory_uri();?>/images/enquire.png" />
							<h4>ENQUIRE ABOUT THIS PRODUCT</h4>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<?php }
	}?>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Enquire About this Product</h4>
				</div>
				<div class="modal-body">
					<?php echo do_shortcode('[ninja_forms id=5]' ); ?>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<?php 
	//return "foo and bar";
}
add_shortcode( 'products', 'products_func' );