<?php
/**
 * Enqueue theme menus
 * @package mytheme
 */
namespace MYTHEME\Inc;

use MYTHEME\Inc\Traits\Singleton;

class menus{

    use Singleton;

    protected function __construct(){
        //Load class.
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /*Actions*/
    add_action('init', [$this, 'register_menus']);
    }
    public function register_menus(){
        register_nav_menus([
            'mytheme-header-menu' => esc_html__( 'Header Menu', 'mytheme' ),
            'mytheme-footer-menu' => esc_html__( 'Footer Menu', 'mytheme' ),
        ]);
    }
    public function get_menu_id($location){
        //Get all the locations
        $locations = get_nav_menu_locations();

        // Get object id by location
        $menu_id = $locations[$location];

        return ! empty($menu_id) ? $menu_id : '';
    }

    public function get_child_menu_items($menu_array, $parent_id){
        $child_menus = [];

        if(! empty($menu_array) && is_array($menu_array)){
            foreach ($menu_array as $menu ) {
                if(intval($menu->menu_item_parent) === $parent_id){
                    array_push($child_menus, $menu);
                }
            }
        }
        return $child_menus;
    }
    // public function get_grand_child_items($grand_menu_array, $child_id){
    //     $grand_child_menus = [];

    //     if(! empty($grand_menu_array) && is_array($grand_menu_array)){
    //         foreach ($grand_menu_array as $child_menu) {
    //             if(intval($child_menu->menu_item_parent) === $child_id){
    //                 array_push($grand_child_menus, $child_menu);
    //             }
    //         }
    //     }
    //     return $grand_child_menus;

    // }

}

?>