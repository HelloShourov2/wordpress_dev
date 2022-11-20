<?php
/**
 * Enqueue theme assets
 * @package mytheme
 */
namespace MYTHEME\Inc;

use MYTHEME\Inc\Traits\Singleton;

class assets{

    use Singleton;

    protected function __construct(){
        //Load class.
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /*Actions*/
    add_action('wp_enqueue_scripts', [$this, 'register_styles']);
    add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles(){
        // Register styles
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime( MYTHEME_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', MYTHEME_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');
        wp_register_style('main-css', MYTHEME_DIR_URI . '/assets/src/library/css/main.css', [], filemtime( MYTHEME_DIR_PATH . '/assets/src/library/css/main.css'), 'all');

        // Enqueue styles
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('main-css');
    }
    
    public function register_scripts(){
        // Register Js
        wp_register_script( 'main-js', MYTHEME_DIR_URI . '/assets/main.js', [], filemtime( MYTHEME_DIR_PATH . '/assets/main.js'), true );

        wp_register_script( 'bootstrap-js', MYTHEME_DIR_URI . '/assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false, true );

        // Enqueue Js
        wp_enqueue_script( 'main-js' );
        wp_enqueue_script( 'bootstrap-js' );
    } 
}

?>