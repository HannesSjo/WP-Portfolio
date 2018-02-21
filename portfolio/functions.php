<?php
require_once('class-wp-bootstrap-navwalker.php');

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}

add_action( 'init', 'wpb_custom_new_menu' );
// Register Nav walker
require_once('class-wp-bootstrap-navwalker.php');

//Theme support
function pf_theme_setup(){
  //Nav menus

  add_theme_support('post-thumbnails');

  //Nav Menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));
}

add_action('after_setup_theme', 'pf_theme_setup');

//Excerpt LengthException
function set_excerpt_length(){
  return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');

function create_post_type() {
  register_post_type( 'acme_product',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );

//Customizer File
require get_template_directory(). '/inc/customizer.php';
