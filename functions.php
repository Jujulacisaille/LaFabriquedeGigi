<?php 

add_action('wp_enqueue_scripts', 'load_scripts_and_style');



function load_scripts_and_style()
{
  $template_directory_uri = get_template_directory_uri();
  wp_enqueue_style('theme-style', $template_directory_uri . '/style.css', [], filemtime(get_template_directory() . '/style.css'));

  if (file_exists(get_template_directory() . '/dist/main.css')) {
    wp_enqueue_style('styles-bundle', $template_directory_uri . '/dist/main.css', [], filemtime(get_template_directory() . '/dist/main.css'));
  }
  
  if (file_exists(get_template_directory() . '/dist/main.js')) {
    wp_enqueue_script('js-bundle', $template_directory_uri . '/dist/main.js', [], filemtime(get_template_directory() . '/dist/main.js'), true);
  }
  
  wp_localize_script('js-bundle', 'WP', array(
    'root' => esc_url_raw(rest_url()),
    'nonce' => wp_create_nonce(),
    'base' => get_site_url(),
    'publicPath' => $template_directory_uri . "/dist/",
  ));
 
}

//Ajouter une page option
acf_add_options_page();

function p($args){
  echo '<pre>';
  var_dump($args);
  echo '</pre>';
}


function d($args){
  p($args);
  die();
}
add_image_size('mini-thumbnail',145 ,145 ,false);
add_image_size('pic-category',537 ,473 ,false);
add_image_size('pic-customer',323 ,403 ,false);
