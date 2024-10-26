<?php
//CSS読み込み
function add_stylesheet() {  
  wp_enqueue_style (
    'slick', get_template_directory_uri().'/slick/slick.css', array('main')
  );
  wp_enqueue_style (
    'slick-theme', get_template_directory_uri().'/slick/slick-theme.css', array('slick')
  );
  wp_enqueue_style (
   'main', get_template_directory_uri().'/css/style.css', array()
  );
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

//JS読み込み
function add_script() {
	wp_deregister_script('jquery');
	wp_enqueue_script(
    'jquery',  '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', ''
  );
  wp_register_script(
    'slick', get_template_directory_uri().'/slick/slick.min.js', array()
  );
  wp_enqueue_script(
    'original', get_template_directory_uri().'/js/script.js', array('slick')
  );
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support('post-thumbnails');






function show_page_number() {
 global $wp_query;
 $paged = get_query_var('paged');
 echo $paged;
}