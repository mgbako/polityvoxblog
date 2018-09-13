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

// Widget Locations
function wpb_init_widgets($id) {
  register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title">',
    'after_title' => '</h4>'
  ));

  register_sidebar(array(
    'name' => 'Footer1',
    'id' => 'footer1',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title weight-light">',
    'after_title' => '</h4>'
  ));

  register_sidebar(array(
    'name' => 'Footer2',
    'id' => 'footer2',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title weight-light">',
    'after_title' => '</h4>'
  ));

  register_sidebar(array(
    'name' => 'Footer3',
    'id' => 'footer3',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widget-title weight-light">',
    'after_title' => '</h4>'
  ));

  register_sidebar(array(
    'name' => 'Copyright',
    'id' => 'copyright',
    'before_widget' => '<div class="footer-bottom-inner center">',
    'after_widget' => '</div>'
  ));
  
}

add_action('widgets_init', 'wpb_init_widgets');