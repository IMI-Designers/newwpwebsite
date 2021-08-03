<?php
/**
 * website functions and definitions
 *
 * @package WordPress
 * @subpackage website
 * @since website 1.0
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since website 1.0
 */
 load_theme_textdomain( 'website' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'website' ),
		'header'  => __( 'Header menu', 'website' ),
		'footer'  => __( 'Footer menu', 'website' ),
	) );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );
	/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */
 
add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}

});
</script>
<?php
}
/*
* Creating a function to create widget
*/
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'website' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'website' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

/*
* Creating a function to create our slider
*/

function slider_post_type() {
	$labels = array(
		'name'                => _x( 'Slider', 'Post Type General Name', 'website' ),
		'singular_name'       => _x( 'slider', 'Post Type Singular Name', 'website' ),
		'menu_name'           => __( 'slider', 'website' ),
		'parent_item_colon'   => __( 'Parent slider', 'website' ),
		'all_items'           => __( 'All slider', 'website' ),
		'view_item'           => __( 'View slider', 'website' ),
		'add_new_item'        => __( 'Add New slider', 'website' ),
		'add_new'             => __( 'Add New', 'website' ),
		'edit_item'           => __( 'Edit slider', 'website' ),
		'update_item'         => __( 'Update slider', 'website' ),
		'search_items'        => __( 'Search slider', 'website' ),
		'not_found'           => __( 'Not Found', 'website' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'website' ),
	);
	$args = array(
		'label'               => __( 'Slider', 'website' ),
		'description'         => __( 'Slider news and reviews', 'website' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_post_type', 0 );



// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');
/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'add_excerpt_support_for_pages' );
/**
 * Add Subtitle in admin post
 *
 * @param WP_Post $post Post object.
 *
 * @return void
 */
function subtitle( $post ) {

	if ( ! in_array( $post->post_type, [ 'post', 'page' ], true ) ) {
		return;
	}

	// The subtitle field.
	$_stitle = sanitize_text_field( get_post_meta( $post->ID, '_subtitle', true ) );
	
    echo '<div class="inside">';
	echo '<div id="edit-slug-box" class="hide-if-no-js">';
	echo '<label for="subtitle"><strong>' . __( 'Sub Title: ' ) . '</strong></label>';
    echo '<input type="text" name="subtitle" id="subtitle" value="' .  $_stitle . '" size="30" spellcheck="true" autocomplete="off" />';
	echo '</div>';
    echo '</div>';	
}

//features
function features_post_type() {

	$labels = array(
		'name'                => _x( 'features', 'Post Type General Name', 'website' ),
		'singular_name'       => _x( 'features', 'Post Type Singular Name', 'website' ),
		'menu_name'           => __( 'features', 'website' ),
		'parent_item_colon'   => __( 'Parent features', 'website' ),
		'all_items'           => __( 'All features', 'website' ),
		'view_item'           => __( 'View features', 'website' ),
		'add_new_item'        => __( 'Add New features', 'website' ),
		'add_new'             => __( 'Add New', 'website' ),
		'edit_item'           => __( 'Edit features', 'website' ),
		'update_item'         => __( 'Update features', 'website' ),
		'search_items'        => __( 'Search features', 'website' ),
		'not_found'           => __( 'Not Found', 'website' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'website' ),
	);
	$args = array(
		'label'               => __( 'features', 'website' ),
		'description'         => __( 'features news and reviews', 'website' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'features', $args );
}
add_action( 'init', 'features_post_type', 0 );

//aboutus
function aboutus_post_type() {

	$labels = array(
		'name'                => _x( 'aboutus', 'Post Type General Name', 'website' ),
		'singular_name'       => _x( 'aboutus', 'Post Type Singular Name', 'website' ),
		'menu_name'           => __( 'aboutus', 'website' ),
		'parent_item_colon'   => __( 'Parent aboutus', 'website' ),
		'all_items'           => __( 'All aboutus', 'website' ),
		'view_item'           => __( 'View aboutus', 'website' ),
		'add_new_item'        => __( 'Add New aboutus', 'website' ),
		'add_new'             => __( 'Add New', 'website' ),
		'edit_item'           => __( 'Edit aboutus', 'website' ),
		'update_item'         => __( 'Update aboutus', 'website' ),
		'search_items'        => __( 'Search aboutus', 'website' ),
		'not_found'           => __( 'Not Found', 'website' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'website' ),
	);
	$args = array(
		'label'               => __( 'aboutus', 'website' ),
		'description'         => __( 'aboutus news and reviews', 'website' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'aboutus', $args );
}
add_action( 'init', 'aboutus_post_type', 0 );

//services
function services_post_type() {

	$labels = array(
		'name'                => _x( 'services', 'Post Type General Name', 'website' ),
		'singular_name'       => _x( 'services', 'Post Type Singular Name', 'website' ),
		'menu_name'           => __( 'services', 'website' ),
		'parent_item_colon'   => __( 'Parent services', 'website' ),
		'all_items'           => __( 'All services', 'website' ),
		'view_item'           => __( 'View services', 'website' ),
		'add_new_item'        => __( 'Add New services', 'website' ),
		'add_new'             => __( 'Add New', 'website' ),
		'edit_item'           => __( 'Edit services', 'website' ),
		'update_item'         => __( 'Update services', 'website' ),
		'search_items'        => __( 'Search services', 'website' ),
		'not_found'           => __( 'Not Found', 'website' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'website' ),
	);
	$args = array(
		'label'               => __( 'services', 'website' ),
		'description'         => __( 'services news and reviews', 'website' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'services', $args );
}
add_action( 'init', 'services_post_type', 0 );

//cta
function cta_post_type() {

	$labels = array(
		'name'                => _x( 'cta', 'Post Type General Name', 'website' ),
		'singular_name'       => _x( 'cta', 'Post Type Singular Name', 'website' ),
		'menu_name'           => __( 'cta', 'website' ),
		'parent_item_colon'   => __( 'Parent cta', 'website' ),
		'all_items'           => __( 'All cta', 'website' ),
		'view_item'           => __( 'View cta', 'website' ),
		'add_new_item'        => __( 'Add New cta', 'website' ),
		'add_new'             => __( 'Add New', 'website' ),
		'edit_item'           => __( 'Edit cta', 'website' ),
		'update_item'         => __( 'Update cta', 'website' ),
		'search_items'        => __( 'Search cta', 'website' ),
		'not_found'           => __( 'Not Found', 'website' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'website' ),
	);
	$args = array(
		'label'               => __( 'cta', 'website' ),
		'description'         => __( 'cta news and reviews', 'website' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'cta', $args );
}
add_action( 'init', 'cta_post_type', 0 );

//flexcard01
function flexcard01_post_type() {

	$labels = array(
		'name'                => _x( 'flexcard01', 'Post Type General Name', 'website' ),
		'singular_name'       => _x( 'flexcard01', 'Post Type Singular Name', 'website' ),
		'menu_name'           => __( 'flexcard01', 'website' ),
		'parent_item_colon'   => __( 'Parent flexcard01', 'website' ),
		'all_items'           => __( 'All flexcard01', 'website' ),
		'view_item'           => __( 'View flexcard01', 'website' ),
		'add_new_item'        => __( 'Add New flexcard01', 'website' ),
		'add_new'             => __( 'Add New', 'website' ),
		'edit_item'           => __( 'Edit flexcard01', 'website' ),
		'update_item'         => __( 'Update flexcard01', 'website' ),
		'search_items'        => __( 'Search flexcard01', 'website' ),
		'not_found'           => __( 'Not Found', 'website' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'website' ),
	);
	$args = array(
		'label'               => __( 'flexcard01', 'website' ),
		'description'         => __( 'flexcard01 news and reviews', 'website' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'flexcard01', $args );
}
add_action( 'init', 'flexcard01_post_type', 0 );

//teamsec
function teamsec_post_type() {

	$labels = array(
		'name'                => _x( 'teamsec', 'Post Type General Name', 'website' ),
		'singular_name'       => _x( 'teamsec', 'Post Type Singular Name', 'website' ),
		'menu_name'           => __( 'teamsec', 'website' ),
		'parent_item_colon'   => __( 'Parent teamsec', 'website' ),
		'all_items'           => __( 'All teamsec', 'website' ),
		'view_item'           => __( 'View teamsec', 'website' ),
		'add_new_item'        => __( 'Add New teamsec', 'website' ),
		'add_new'             => __( 'Add New', 'website' ),
		'edit_item'           => __( 'Edit teamsec', 'website' ),
		'update_item'         => __( 'Update teamsec', 'website' ),
		'search_items'        => __( 'Search teamsec', 'website' ),
		'not_found'           => __( 'Not Found', 'website' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'website' ),
	);
	$args = array(
		'label'               => __( 'teamsec', 'website' ),
		'description'         => __( 'teamsec news and reviews', 'website' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'teamsec', $args );
}
add_action( 'init', 'teamsec_post_type', 0 );


//teamssubsec
function teamssubsec_post_type() {

	$labels = array(
		'name'                => _x( 'teamssubsec', 'Post Type General Name', 'website' ),
		'singular_name'       => _x( 'teamssubsec', 'Post Type Singular Name', 'website' ),
		'menu_name'           => __( 'teamssubsec', 'website' ),
		'parent_item_colon'   => __( 'Parent teamssubsec', 'website' ),
		'all_items'           => __( 'All teamssubsec', 'website' ),
		'view_item'           => __( 'View teamssubsec', 'website' ),
		'add_new_item'        => __( 'Add New teamssubsec', 'website' ),
		'add_new'             => __( 'Add New', 'website' ),
		'edit_item'           => __( 'Edit teamssubsec', 'website' ),
		'update_item'         => __( 'Update teamssubsec', 'website' ),
		'search_items'        => __( 'Search teamssubsec', 'website' ),
		'not_found'           => __( 'Not Found', 'website' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'website' ),
	);
	$args = array(
		'label'               => __( 'teamssubsec', 'website' ),
		'description'         => __( 'teamssubsec news and reviews', 'website' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'teamssubsec', $args );
}
add_action( 'init', 'teamssubsec_post_type', 0 );


//accordiondg1
function accordiondg1_post_type() {

	$labels = array(
		'name'                => _x( 'accordiondg1', 'Post Type General Name', 'website' ),
		'singular_name'       => _x( 'accordiondg1', 'Post Type Singular Name', 'website' ),
		'menu_name'           => __( 'accordiondg1', 'website' ),
		'parent_item_colon'   => __( 'Parent accordiondg1', 'website' ),
		'all_items'           => __( 'All accordiondg1', 'website' ),
		'view_item'           => __( 'View accordiondg1', 'website' ),
		'add_new_item'        => __( 'Add New accordiondg1', 'website' ),
		'add_new'             => __( 'Add New', 'website' ),
		'edit_item'           => __( 'Edit accordiondg1', 'website' ),
		'update_item'         => __( 'Update accordiondg1', 'website' ),
		'search_items'        => __( 'Search accordiondg1', 'website' ),
		'not_found'           => __( 'Not Found', 'website' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'website' ),
	);
	$args = array(
		'label'               => __( 'accordiondg1', 'website' ),
		'description'         => __( 'accordiondg1 news and reviews', 'website' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'accordiondg1', $args );
}
add_action( 'init', 'accordiondg1_post_type', 0 );

//mySwiperslider
function mySwiperslider_post_type() {

	$labels = array(
		'name'                => _x( 'mySwiperslider', 'Post Type General Name', 'website' ),
		'singular_name'       => _x( 'mySwiperslider', 'Post Type Singular Name', 'website' ),
		'menu_name'           => __( 'mySwiperslider', 'website' ),
		'parent_item_colon'   => __( 'Parent mySwiperslider', 'website' ),
		'all_items'           => __( 'All mySwiperslider', 'website' ),
		'view_item'           => __( 'View mySwiperslider', 'website' ),
		'add_new_item'        => __( 'Add New mySwiperslider', 'website' ),
		'add_new'             => __( 'Add New', 'website' ),
		'edit_item'           => __( 'Edit mySwiperslider', 'website' ),
		'update_item'         => __( 'Update mySwiperslider', 'website' ),
		'search_items'        => __( 'Search mySwiperslider', 'website' ),
		'not_found'           => __( 'Not Found', 'website' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'website' ),
	);
	$args = array(
		'label'               => __( 'mySwiperslider', 'website' ),
		'description'         => __( 'mySwiperslider news and reviews', 'website' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'mySwiperslider', $args );
}
add_action( 'init', 'mySwiperslider_post_type', 0 );

/**
 * Save Subtitle
 *
 * @param int     $post_ID Post ID.
 * @param WP_Post $post    Post object.
 * @param bool    $update  Whether this is an existing post being updated or not.
 *
 * @return void
 */
function save_subtitle( $post_ID, $post, $update ) {

	if ( ! in_array( $post->post_type, [ 'post', 'page' ], true ) ) {
		return;
	}

	// Prevent to execute twice.
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return;
	}

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

	// Get the subtitle value from $_POST.
	$_stitle = filter_input( INPUT_POST, 'subtitle', FILTER_SANITIZE_STRING );

	if ( $update ) {
		// Update the post meta.
		update_post_meta( $post_ID, '_subtitle', sanitize_text_field( $_stitle ) );
	} else if ( ! empty ( $_stitle ) ) {
		// Add unique post meta.
		add_post_meta( $post_ID, '_subtitle', sanitize_text_field( $_stitle ), true );
	}
}

add_action( 'edit_form_after_title', 'subtitle', 20 );
add_action( 'wp_insert_post', 'save_subtitle', 20, 3 );

