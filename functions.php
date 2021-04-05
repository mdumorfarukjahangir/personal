<?php

require_once( get_theme_file_path( "/widgets/social-icons-widget.php" ) );
require_once( get_theme_file_path("/inc/tgm.php"));


if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'personal_setup' ) ) :
	function personal_setup() {
		load_theme_textdomain( 'personal', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'personal' ),
			)
		);
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
		add_theme_support(
			'custom-background',
			apply_filters(
				'personal_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		register_nav_menus(array(
			"top-menu"=>__("Top Menu","personal"),
			"footer-menu"=>__("Footer Menu","personal"),
			// "footer-middle"=>__("Footer Middle Menu","philosophy"),
			// "footer-right"=>__("Footer Right Menu","philosophy"),
		 ));


	}
endif;
add_action( 'after_setup_theme', 'personal_setup' );


function personal_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'personal_content_width', 640 );
}
add_action( 'after_setup_theme', 'personal_content_width', 0 );

/**
 * Register widget area.
 */
function personal_widgets_init() {

	register_sidebar( array(
        'name'          => esc_html__( 'Footer Social', 'personal' ),
        'id'            => 'footersocial',
        'description'   => esc_html__( 'Social media link ', 'personal' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
        'name'          => esc_html__( 'Contact form', 'personal' ),
        'id'            => 'contactform',
        'description'   => esc_html__( 'Contact form section', 'personal' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
	register_sidebar( array(
        'name'          => esc_html__( 'Copywrite Section', 'personal' ),
        'id'            => 'copywritesection',
        'description'   => esc_html__( 'Copywrite Section', 'personal' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
 
}
add_action( 'widgets_init', 'personal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function personal_scripts() {
	wp_enqueue_style( 'personal-style', get_stylesheet_uri());
	wp_enqueue_style( 'animate-css', get_theme_file_uri( "/css/animate.min.css" ) );
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri( "/css/bootstrap.min.css" ) );
	wp_enqueue_style( 'cubeportfolio-css', get_theme_file_uri( "/css/cubeportfolio.min.css" ) );
	wp_enqueue_style( 'font-awesome-css', get_theme_file_uri( "/css/font-awesome.css" ) );
	wp_enqueue_style( 'fancybox-css', get_theme_file_uri( "/css/jquery.fancybox.min.css" ) );
	wp_enqueue_style( 'magnific-css', get_theme_file_uri( "/css/magnific-popup.min.css" ) );
	wp_enqueue_style( 'carousel-css', get_theme_file_uri( "/css/owl-carousel.min.css" ) );
	wp_enqueue_style( 'slicknav-css', get_theme_file_uri( "/css/slicknav.min.css" ) );
	wp_enqueue_style( 'lightbox-css', get_theme_file_uri( "/css/lightbox.min.css" ) );
	wp_enqueue_style( 're-css', get_theme_file_uri( "/css/documents.css" ) );
	wp_enqueue_style( 'reset-css', get_theme_file_uri( "/css/reset.css" ) );
	wp_enqueue_style( 'responsive-css', get_theme_file_uri( "/css/responsive.css" ) );
	

	wp_enqueue_script( 'jquerymigrate-js', get_theme_file_uri( "/js/jquery-migrate-3.0.0.js" ) , array("jquery"),null, true);
	wp_enqueue_script( 'popper-js', get_theme_file_uri( "/js/popper.min.js" ) , array("jquery"),null, true);
 
	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri( "/js/bootstrap.min.js" ) , array("jquery"),null, true);
 
	wp_enqueue_script( 'modernizr-js', get_theme_file_uri( "/js/modernizr.min.js" ) , array("jquery"),null, true);
 
	wp_enqueue_script( 'scrollup-js', get_theme_file_uri( "/js/scrollup.js" ) , array("jquery"),null, true);
 
	wp_enqueue_script( 'fancybox-js', get_theme_file_uri( "/js/jquery-fancybox.min.js" ) , array("jquery"),null, true);
 
	wp_enqueue_script( 'cubeportfolio-js', get_theme_file_uri( "/js/cubeportfolio.min.js" ) , array("jquery"),null, true);
 
	wp_enqueue_script( 'slicknav-js', get_theme_file_uri( "/js/slicknav.min.js" ) , array("jquery"),null, true);
 
	wp_enqueue_script( 'carousel-js', get_theme_file_uri( "/js/owl-carousel.min.js" ) , array("jquery"),null, true);
 
	wp_enqueue_script( 'easing-js', get_theme_file_uri( "/js/easing.js" ) , array("jquery"),null, true);
	wp_enqueue_script( 'lightbox-js', get_theme_file_uri( "/js/lightbox.min.js" ) , array("jquery"),null, true);
 
	wp_enqueue_script( 'magnific-js', get_theme_file_uri( "/js/magnific-popup.min.js" ) , array("jquery"),null, true);
 
	wp_enqueue_script( 'active-js', get_theme_file_uri( "/js/active.js" ) , array("jquery"),null, true);


}
add_action( 'wp_enqueue_scripts', 'personal_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

 

/**
 * Functions which enhance the theme by hooking into WordPress.
 */

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

 

add_post_type_support( 'main_slider', 'thumbnail' ); 

// Register Custom Post Type biography
function create_biography_cpt() {

	$labels = array(
		'name' => _x( 'Biography', 'Post Type General Name', 'personal' ),
		'singular_name' => _x( 'biography', 'Post Type Singular Name', 'personal' ),
		'menu_name' => _x( 'Biography', 'Admin Menu text', 'personal' ),
		'name_admin_bar' => _x( 'biography', 'Add New on Toolbar', 'personal' ),
		'parent_item_colon' => __( 'Parent biography:', 'personal' ),
		'edit_item' => __( 'Edit biography', 'personal' ),
		'update_item' => __( 'Update biography', 'personal' ),
		'not_found' => __( 'Not found', 'personal' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'personal' ),
		'featured_image' => __( 'Biography Image', 'personal' ),
		'set_featured_image' => __( 'Set featured image', 'personal' ),
		'remove_featured_image' => __( 'Remove biography image', 'personal' ),
		'use_featured_image' => __( 'Use as featured image', 'personal' ),
		'insert_into_item' => __( 'Insert into biography', 'personal' ),
		'uploaded_to_this_item' => __( 'Uploaded to this biography', 'personal' ),
	);
	$args = array(
		'label' => __( 'biography', 'personal' ),
		'description' => __( 'Biography Secction ', 'personal' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-welcome-write-blog',
		'supports' => array('title', 'editor', 'thumbnail',  'excerpt'),
		'taxonomies' => array(),
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'biography', $args );
	

}
add_action( 'init', 'create_biography_cpt', 0 );


// Popular post 
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

// Register Custom Post Type v_and_m
function create_vandm_cpt() {

	$labels = array(
		'name' => _x( 'Vision & Mission', 'Post Type General Name', 'personal' ),
		'singular_name' => _x( 'v_and_m', 'Post Type Singular Name', 'personal' ),
		'menu_name' => _x( 'Vision & Mission', 'Admin Menu text', 'personal' ),
		'name_admin_bar' => _x( 'v_and_m', 'Add New on Toolbar', 'personal' ),
		'archives' => __( 'v_and_m Archives', 'personal' ),
		'attributes' => __( 'v_and_m Attributes', 'personal' ),
		'parent_item_colon' => __( 'Parent v_and_m:', 'personal' ),
		'all_items' => __( 'All Vision & Mission', 'personal' ),
		'add_new_item' => __( 'Add New v_and_m', 'personal' ),
		'add_new' => __( 'Add New', 'personal' ),
		'new_item' => __( 'New v_and_m', 'personal' ),
		'edit_item' => __( 'Edit v_and_m', 'personal' ),
		'update_item' => __( 'Update v_and_m', 'personal' ),
		'view_item' => __( 'View v_and_m', 'personal' ),
		'view_items' => __( 'View Vision & Mission', 'personal' ),
		'search_items' => __( 'Search v_and_m', 'personal' ),
		'not_found' => __( 'Not found', 'personal' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'personal' ),
		'insert_into_item' => __( 'Insert into v_and_m', 'personal' ),
		'uploaded_to_this_item' => __( 'Uploaded to this v_and_m', 'personal' ),
		'items_list' => __( 'Vision & Mission list', 'personal' ),
		'items_list_navigation' => __( 'Vision & Mission list navigation', 'personal' ),
		'filter_items_list' => __( 'Filter Vision & Mission list', 'personal' ),
	);
	$args = array(
		'label' => __( 'v_and_m', 'personal' ),
		'description' => __( 'Vission and Mission for Personal website', 'personal' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-lightbulb',
		'supports' => array('title', 'editor', 'excerpt'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'vandm', $args );

}
add_action( 'init', 'create_vandm_cpt', 0 );




// Register Custom Post Type image_gallery
function create_imagegallery_cpt() {

	$labels = array(
		'name' => _x( 'Gallery Image', 'Post Type General Name', 'personal' ),
		'singular_name' => _x( 'Gallery Image', 'Post Type Singular Name', 'personal' ),
		'menu_name' => _x( 'Image Gallery', 'Admin Menu text', 'personal' ),
		'name_admin_bar' => _x( 'image_gallery', 'Add New on Toolbar', 'personal' ),
		'archives' => __( 'image_gallery Archives', 'personal' ),
		'attributes' => __( 'image_gallery Attributes', 'personal' ),
		'parent_item_colon' => __( 'Parent image_gallery:', 'personal' ),
		'all_items' => __( 'All Images', 'personal' ),
		'add_new_item' => __( 'Add New Image', 'personal' ),
		'add_new' => __( 'Add New Image', 'personal' ),
		'new_item' => __( 'New image_gallery', 'personal' ),
		'edit_item' => __( 'Edit image_gallery', 'personal' ),
		'update_item' => __( 'Update image_gallery', 'personal' ),
		'view_item' => __( 'View image_gallery', 'personal' ),
		'view_items' => __( 'View image_galleries', 'personal' ),
		'search_items' => __( 'Search image_gallery', 'personal' ),
		'not_found' => __( 'Not found', 'personal' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'personal' ),
		'featured_image' => __( 'Gallery Image', 'personal' ),
		'set_featured_image' => __( 'Set Gallery image', 'personal' ),
		'remove_featured_image' => __( 'Remove Gallery image', 'personal' ),
		'use_featured_image' => __( 'Use as Gallery image', 'personal' ),
		'insert_into_item' => __( 'Insert into image_gallery', 'personal' ),
		'uploaded_to_this_item' => __( 'Uploaded to this image_gallery', 'personal' ),
		'items_list' => __( 'image_galleries list', 'personal' ),
		'items_list_navigation' => __( 'image_galleries list navigation', 'personal' ),
		'filter_items_list' => __( 'Filter image_galleries list', 'personal' ),
	);
	$args = array(
		'label' => __( 'image_gallery', 'personal' ),
		'description' => __( 'Image Gallery ', 'personal' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-image',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'imagegallery', $args );

}
add_action( 'init', 'create_imagegallery_cpt', 0 );

// Register Custom Post Type document
function create_document_cpt() {

	$labels = array(
		'name' => _x( 'Documents', 'Post Type General Name', 'personal' ),
		'singular_name' => _x( 'Document', 'Post Type Singular Name', 'personal' ),
		'menu_name' => _x( 'Document', 'Admin Menu text', 'personal' ),
		'name_admin_bar' => _x( 'Document', 'Add New on Toolbar', 'personal' ),
		'archives' => __( 'document Archives', 'personal' ),
		'attributes' => __( 'document Attributes', 'personal' ),
		'parent_item_colon' => __( 'Parent document:', 'personal' ),
		'all_items' => __( 'All documents', 'personal' ),
		'add_new_item' => __( 'Add New document', 'personal' ),
		'add_new' => __( 'Add New Document', 'personal' ),
		'new_item' => __( 'New document', 'personal' ),
		'edit_item' => __( 'Edit document', 'personal' ),
		'update_item' => __( 'Update document', 'personal' ),
		'view_item' => __( 'View document', 'personal' ),
		'view_items' => __( 'View documents', 'personal' ),
		'search_items' => __( 'Search document', 'personal' ),
		'not_found' => __( 'Not found', 'personal' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'personal' ),
		'featured_image' => __( 'Featured Image', 'personal' ),
		'set_featured_image' => __( 'Set featured image', 'personal' ),
		'remove_featured_image' => __( 'Remove featured image', 'personal' ),
		'use_featured_image' => __( 'Use as featured image', 'personal' ),
		'insert_into_item' => __( 'Insert into document', 'personal' ),
		'uploaded_to_this_item' => __( 'Uploaded to this document', 'personal' ),
		'items_list' => __( 'documents list', 'personal' ),
		'items_list_navigation' => __( 'documents list navigation', 'personal' ),
		'filter_items_list' => __( 'Filter documents list', 'personal' ),
	);
	$args = array(
		'label' => __( 'Document', 'personal' ),
		'description' => __( 'Upload file for document section ', 'personal' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-media-spreadsheet',
		'supports' => array('title', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'document', $args );

}
add_action( 'init', 'create_document_cpt', 0 );


// Register Custom Post Type Event
function create_event_cpt() {

	$labels = array(
		'name' => _x( 'Events', 'Post Type General Name', 'personal' ),
		'singular_name' => _x( 'Event', 'Post Type Singular Name', 'personal' ),
		'menu_name' => _x( 'Events', 'Admin Menu text', 'personal' ),
		'name_admin_bar' => _x( 'Event', 'Add New on Toolbar', 'personal' ),
		'archives' => __( 'Event Archives', 'personal' ),
		'attributes' => __( 'Event Attributes', 'personal' ),
		'parent_item_colon' => __( 'Parent Event:', 'personal' ),
		'all_items' => __( 'All Events', 'personal' ),
		'add_new_item' => __( 'Add New Event', 'personal' ),
		'add_new' => __( 'Add New', 'personal' ),
		'new_item' => __( 'New Event', 'personal' ),
		'edit_item' => __( 'Edit Event', 'personal' ),
		'update_item' => __( 'Update Event', 'personal' ),
		'view_item' => __( 'View Event', 'personal' ),
		'view_items' => __( 'View Events', 'personal' ),
		'search_items' => __( 'Search Event', 'personal' ),
		'not_found' => __( 'Not found', 'personal' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'personal' ),
		'featured_image' => __( 'Event Image', 'personal' ),
		'set_featured_image' => __( 'Set Event image', 'personal' ),
		'remove_featured_image' => __( 'Remove Event image', 'personal' ),
		'use_featured_image' => __( 'Use as Event image', 'personal' ),
		'insert_into_item' => __( 'Insert into Event', 'personal' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Event', 'personal' ),
		'items_list' => __( 'Events list', 'personal' ),
		'items_list_navigation' => __( 'Events list navigation', 'personal' ),
		'filter_items_list' => __( 'Filter Events list', 'personal' ),
	);
	$args = array(
		'label' => __( 'Event', 'personal' ),
		'description' => __( 'Events for personal website ', 'personal' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-businessperson',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'event', $args );

}
add_action( 'init', 'create_event_cpt', 0 );
// Register Custom Post Type Contact Info 
function create_contactinfo_cpt() {

	$labels = array(
		'name' => _x( 'Contact Info', 'Post Type General Name', 'personal' ),
		'singular_name' => _x( 'Contact Info ', 'Post Type Singular Name', 'personal' ),
		'menu_name' => _x( 'Contact Info', 'Admin Menu text', 'personal' ),
		'name_admin_bar' => _x( 'Contact Info ', 'Add New on Toolbar', 'personal' ),
		'archives' => __( 'Contact Info  Archives', 'personal' ),
		'attributes' => __( 'Contact Info  Attributes', 'personal' ),
		'parent_item_colon' => __( 'Parent Contact Info :', 'personal' ),
		 
		'add_new_item' => __( 'Add New Contact Info ', 'personal' ),
		'add_new' => __( 'Add New', 'personal' ),
		'new_item' => __( 'New Contact Info ', 'personal' ),
		'edit_item' => __( 'Edit Contact Info ', 'personal' ),
		'update_item' => __( 'Update Contact Info ', 'personal' ),
		'view_item' => __( 'View Contact Info ', 'personal' ),
		'view_items' => __( 'View Contact Info-s', 'personal' ),
		'search_items' => __( 'Search Contact Info ', 'personal' ),
		'not_found' => __( 'Not found', 'personal' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'personal' ),
		'insert_into_item' => __( 'Insert into Contact Info ', 'personal' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Contact Info ', 'personal' ),
		'items_list' => __( 'Contact Info-s list', 'personal' ),
		'items_list_navigation' => __( 'Contact Info-s list navigation', 'personal' ),
		'filter_items_list' => __( 'Filter Contact Info-s list', 'personal' ),
	);
	$args = array(
		'label' => __( 'Contact Info ', 'personal' ),
		'description' => __( 'Contact information for Contact Page ', 'personal' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-id',
		'supports' => array('title'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'contactinfo', $args );

}
add_action( 'init', 'create_contactinfo_cpt', 0 );



function property_gallery_add_metabox(){
	add_meta_box(
		'post_custom_gallery',
		'Gallery',
		'property_gallery_metabox_callback',
		'mlgallerys', // Change post type name
		'normal',
		'core'
	);
}
add_action( 'admin_init', 'property_gallery_add_metabox' );




// Register Custom Post Type ML Gallery
function create_mlgallerys_cpt() {

	$labels = array(
		'name' => _x( 'ML Galleries', 'Post Type General Name', 'personal' ),
		'singular_name' => _x( 'ML Gallery', 'Post Type Singular Name', 'personal' ),
		'menu_name' => _x( 'ML Galleries', 'Admin Menu text', 'personal' ),
		'name_admin_bar' => _x( 'ML Gallery', 'Add New on Toolbar', 'personal' ),
		'archives' => __( 'ML Gallery Archives', 'personal' ),
		'attributes' => __( 'ML Gallery Attributes', 'personal' ),
		'parent_item_colon' => __( 'Parent ML Gallery:', 'personal' ),
		'all_items' => __( 'All ML Galleries', 'personal' ),
		'add_new_item' => __( 'Add New ML Gallery', 'personal' ),
		'add_new' => __( 'Add New', 'personal' ),
		'new_item' => __( 'New ML Gallery', 'personal' ),
		'edit_item' => __( 'Edit ML Gallery', 'personal' ),
		'update_item' => __( 'Update ML Gallery', 'personal' ),
		'view_item' => __( 'View ML Gallery', 'personal' ),
		'view_items' => __( 'View ML Galleries', 'personal' ),
		'search_items' => __( 'Search ML Gallery', 'personal' ),
		'not_found' => __( 'Not found', 'personal' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'personal' ),
		'featured_image' => __( 'Featured Image', 'personal' ),
		'set_featured_image' => __( 'Set featured image', 'personal' ),
		'remove_featured_image' => __( 'Remove featured image', 'personal' ),
		'use_featured_image' => __( 'Use as featured image', 'personal' ),
		'insert_into_item' => __( 'Insert into ML Gallery', 'personal' ),
		'uploaded_to_this_item' => __( 'Uploaded to this ML Gallery', 'personal' ),
		'items_list' => __( 'ML Galleries list', 'personal' ),
		'items_list_navigation' => __( 'ML Galleries list navigation', 'personal' ),
		'filter_items_list' => __( 'Filter ML Galleries list', 'personal' ),
	);
	$args = array(
		'label' => __( 'ML Gallery', 'personal' ),
		'description' => __( '', 'personal' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'mlgallerys', $args );

}
add_action( 'init', 'create_mlgallerys_cpt', 0 );

function property_gallery_metabox_callback(){
	wp_nonce_field( basename(__FILE__), 'sample_nonce' );
	global $post;
	$gallery_data = get_post_meta( $post->ID, 'gallery_data', true );
	?>
	<div id="gallery_wrapper">
		<div id="img_box_container">
		<?php 
		if ( isset( $gallery_data['image_url'] ) ){
			for( $i = 0; $i < count( $gallery_data['image_url'] ); $i++ ){
			?>
			<div class="gallery_single_row dolu">
			  <div class="gallery_area image_container ">
				<img class="gallery_img_img" src="<?php esc_html_e( $gallery_data['image_url'][$i] ); ?>" height="55" width="55" onclick="open_media_uploader_image_this(this)"/>
				<input type="hidden"
						 class="meta_image_url"
						 name="gallery[image_url][]"
						 value="<?php esc_html_e( $gallery_data['image_url'][$i] ); ?>"
				  />
			  </div>
			  <div class="gallery_area">
				<span class="button remove" onclick="remove_img(this)" title="Remove"/><i class="fas fa-trash-alt"></i></span>
			  </div>
			  <div class="clear" />
			</div> 
			</div>
			<?php
			}
		}
		?>
		</div>
		<div style="display:none" id="master_box">
			<div class="gallery_single_row">
				<div class="gallery_area image_container" onclick="open_media_uploader_image(this)">
					<input class="meta_image_url" value="" type="hidden" name="gallery[image_url][]" />
				</div> 
				<div class="gallery_area"> 
					<span class="button remove" onclick="remove_img(this)" title="Remove"/><i class="fas fa-trash-alt"></i></span>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="add_gallery_single_row">
		  <input class="button add" type="button" value="+" onclick="open_media_uploader_image_plus();" title="Add image"/>
		</div>
	</div>
	<?php
}

function property_gallery_styles_scripts(){
    global $post;
    if( 'mlgallerys' != $post->post_type )
        return;
    ?>  
    <style type="text/css">
	.gallery_area {
		float:right;
	}
	.image_container {
		float:left!important;
		width: 100px;
		background: url('https://i.hizliresim.com/dOJ6qL.png');
		height: 100px;
		background-repeat: no-repeat;
		background-size: cover;
		border-radius: 3px;
		cursor: pointer;
	}
	.image_container img{
		height: 100px;
		width: 100px;
		border-radius: 3px;
	}
	.clear {
		clear:both;
	}
	#gallery_wrapper {
		width: 100%;
		height: auto;
		position: relative;
		display: inline-block;
	}
	#gallery_wrapper input[type=text] {
		width:300px;
	}
	#gallery_wrapper .gallery_single_row {
		float: left;
		display:inline-block;
		width: 100px;
		position: relative;
		margin-right: 8px;
		margin-bottom: 20px;
	}
	.dolu {
		display: inline-block!important;
	}
	#gallery_wrapper label {
		padding:0 6px;
	}
	.button.remove {
		background: none;
		color: #f1f1f1;
		position: absolute;
		border: none;
		top: 4px;
		right: 7px;
		font-size: 1.2em;
		padding: 0px;
		box-shadow: none;
	}
	.button.remove:hover {
		background: none;
		color: #fff;
	}
	.button.add {
		background: #c3c2c2;
		color: #ffffff;
		border: none;
		box-shadow: none;
		width: 100px;
		height: 100px;
		line-height: 100px;
		font-size: 4em;
	}
	.button.add:hover, .button.add:focus {
		background: #e2e2e2;
		box-shadow: none;
		color: #0f88c1;
		border: none;
	}
    </style>
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> -->
    <script type="text/javascript">
        function remove_img(value) {
            var parent=jQuery(value).parent().parent();
            parent.remove();
        }
	var media_uploader = null;
	function open_media_uploader_image(obj){
		media_uploader = wp.media({
			frame:    "post", 
			state:    "insert", 
			multiple: false
		});
		media_uploader.on("insert", function(){
			var json = media_uploader.state().get("selection").first().toJSON();
			var image_url = json.url;
			var html = '<img class="gallery_img_img" src="'+image_url+'" height="55" width="55" onclick="open_media_uploader_image_this(this)"/>';
			console.log(image_url);
			jQuery(obj).append(html);
			jQuery(obj).find('.meta_image_url').val(image_url);
		});
		media_uploader.open();
	}
	function open_media_uploader_image_this(obj){
		media_uploader = wp.media({
			frame:    "post", 
			state:    "insert", 
			multiple: false
		});
		media_uploader.on("insert", function(){
			var json = media_uploader.state().get("selection").first().toJSON();
			var image_url = json.url;
			console.log(image_url);
			jQuery(obj).attr('src',image_url);
			jQuery(obj).siblings('.meta_image_url').val(image_url);
		});
		media_uploader.open();
	}

	function open_media_uploader_image_plus(){
		media_uploader = wp.media({
			frame:    "post", 
			state:    "insert", 
			multiple: true 
		});
		media_uploader.on("insert", function(){

			var length = media_uploader.state().get("selection").length;
			var images = media_uploader.state().get("selection").models

			for(var i = 0; i < length; i++){
				var image_url = images[i].changed.url;
				var box = jQuery('#master_box').html();
				jQuery(box).appendTo('#img_box_container');
				var element = jQuery('#img_box_container .gallery_single_row:last-child').find('.image_container');
				var html = '<img class="gallery_img_img" src="'+image_url+'" height="55" width="55" onclick="open_media_uploader_image_this(this)"/>';
				element.append(html);
				element.find('.meta_image_url').val(image_url);
				console.log(image_url);		
			}
		});
		media_uploader.open();
	}
	jQuery(function() {
            jQuery("#img_box_container").sortable();
        });
    </script>
    <?php
}
add_action( 'admin_head-post.php', 'property_gallery_styles_scripts' );
add_action( 'admin_head-post-new.php', 'property_gallery_styles_scripts' );

function property_gallery_save( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'sample_nonce' ] ) && wp_verify_nonce( $_POST[ 'sample_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
			return;
	}
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	// Correct post type
	if ( 'mlgallerys' != $_POST['post_type'] ) // here you can set the post type name
		return;

	if ( $_POST['gallery'] ){

		// Build array for saving post meta
		$gallery_data = array();
		for ($i = 0; $i < count( $_POST['gallery']['image_url'] ); $i++ ){
			if ( '' != $_POST['gallery']['image_url'][$i]){
				$gallery_data['image_url'][]  = $_POST['gallery']['image_url'][ $i ];
			}
		}

		if ( $gallery_data ) 
			update_post_meta( $post_id, 'gallery_data', $gallery_data );
		else 
			delete_post_meta( $post_id, 'gallery_data' );
	} 
	// Nothing received, all fields are empty, delete option
	else{
		delete_post_meta( $post_id, 'gallery_data' );
	}
}
add_action( 'save_post', 'property_gallery_save' );






 