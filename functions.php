<?php   

if ( ! function_exists( 'wpdevtheme_setup' ) ) :

function wpdevtheme_setup() {

    load_theme_textdomain( 'wpdevtheme', get_template_directory() . '/languages' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
      'primary' => __( 'Primary Menu', 'wpdevtheme' ),
    ) );
 
    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}
endif;
add_action( 'after_setup_theme', 'wpdevtheme_setup' );

// Load Stylesheets and Javascript
function wpdevtheme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
   
    wp_enqueue_style( 'wpdevtheme-bootstrap', get_template_directory_uri() . '/dist/css/bootstrap.min.css', array(), '4.1', 'all');
    wp_enqueue_style( 'wpdevtheme-custom', get_template_directory_uri() . '/dist/css/app.css', array(), '1.0', 'all');
   
    wp_enqueue_script( 'script', get_template_directory_uri() . '/dist/js/bootstrap.min.js', array ( 'jquery' ), 4.1, true);
   
      if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
      }
  }
  add_action( 'wp_enqueue_scripts', 'wpdevtheme_scripts' );

  function themename_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }
   add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

// Register Custom Navigation Walker
require_once get_template_directory() . '/classes/class-wp-bootstrap-navwalker.php';