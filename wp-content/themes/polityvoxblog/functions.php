<?php 
// Register Nav Walker class_alias
if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
  // file does not exist... return an error.
  return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
  // file exists... require it.
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
}
// Theme Support
function wpb_theme_setup()
{
  add_theme_support('post-thumbnails');
  
  // Nav menus
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'polityvoxblog')
  ));
}

add_action('after_setup_theme', 'wpb_theme_setup');

// Excerpt Length Control
function set_excerpt_length()
{
  return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');