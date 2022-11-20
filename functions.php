<?php
/**
 * Theme functions
 * 
 * @package mytheme
 */



if(! defined('MYTHEME_DIR_PATH')){
    define('MYTHEME_DIR_PATH', untrailingslashit( get_template_directory()));
}
if(! defined('MYTHEME_DIR_URI')){
    define('MYTHEME_DIR_URI', untrailingslashit( get_template_directory_uri()));
}



require_once MYTHEME_DIR_PATH . '/inc/helpers/autoloader.php';
require_once MYTHEME_DIR_PATH . '/inc/helpers/template-tags.php';


function mytheme_get_instance(){
    \MYTHEME\Inc\MYTHEME::get_instance();
}
mytheme_get_instance();


function mytheme_enqueue_scripts(){


}
 add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
?>