<?php

/**
 * Bootstraps the theme
 * @package mytheme
 */

namespace MYTHEME\Inc;

use MYTHEME\Inc\Traits\Singleton;

class MYTHEME{

    use Singleton;

    protected function __construct(){
        //Load class.
        assets::get_instance();
        menus::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /*Actions*/
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme(){
        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );

        /**
         * Register Image size
         */
        add_image_size('featured-image', 350, 200, true);

        add_theme_support( 'custom-logo', [
            'header-text'          => ['site-title', 'site-description'],
            'height'               => 50,
            'width'                => 200,
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true
        ] );

        add_theme_support( 'custom-background', [
            'default-color' => '#fff',
            'default-image' => '',
            'default-repeat'     => 'no-repeat',
        ]);

        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('automatic-feed-links');
        add_theme_support(
            'html5', array(
                'comment-list',
                'comment-form',
                'search-form',
                'gallery',
                'caption',
                'style',
                'script'
                ));
        add_editor_style();
        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');

        global $content_width;
        if( ! isset($content_width )){
            $content_width = 1240;
        }



    }
}



?>