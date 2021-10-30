<?php 

  register_nav_menus(
    array('primary-menu' => 'Top Menu')
     );


  add_theme_support('post-thumbnails');
  add_image_size( 'gClassy-image-size', 640, 999 );
  add_theme_support ('custom-header');
  add_theme_support( 'title-tag' );


  
  function gClassy_style() {
    wp_enqueue_style( 'gClassy', get_stylesheet_uri() );
  }
  add_action( 'wp_enqueue_scripts', 'gClassy_style' );
  

  function gClassy_sidebar() {
    register_sidebar( array(
        'name' => __( 'Primary Sidebar', 'gClassy' ),
        'id'   => 'sidebar-1',
    ) );
  }
   
  add_action( 'widgets_init', 'gClassy_sidebar' );


  function gclassy_news() {
   
    register_post_type( 'news',
          array(
              'labels' => array(
                  'name' => __( 'News' ),
                  'singular_name' => __( 'News' )
              ),
              'public' => true,
              'has_archive' => true,
              'rewrite' => array('slug' => 'news'),
              'show_in_rest' => true,
   
          )
      );
  }
  add_action( 'init', 'gclassy_news' );


  function gclassy_blog() {
   
    register_post_type( 'auto-blog',
          array(
              'labels' => array(
                  'name' => __( 'Auto Blog' ),
                  'singular_name' => __( 'Blog' )
              ),
              'public' => true,
              'has_archive' => true,
              'rewrite' => array('slug' => 'auto-blog'),
              'show_in_rest' => true,
   
          )
      );
  }
  add_action( 'init', 'gclassy_blog' );
  

 
    
?>

