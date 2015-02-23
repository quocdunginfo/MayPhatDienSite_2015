<?php
/**
 * Twenty Fifteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage mpd_2015
 * @since mpd_2015 1.0
 */
//register sidebar
//WIDGET
function mpd2015_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Primary Sidebar', 'twentyfourteen' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Main sidebar that appears on the left.', 'twentyfourteen' ),
            //'before_widget' => '<aside id="%1$s" class="widget %2$s" style="width: 250px; margin-right: 100px">',
            //'before_widget' => '<div id="%1$s" class="widget %2$s">',
            //'after_widget'  => '</div>',
            //'before_title'  => '<h5 class="widget-title">',
            //'after_title'   => '</h5>'
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Footer Sidebar', 'twentyfourteen2' ),
            'id'            => 'sidebar-2',
            'description'   => __( 'Footer sidebar that appears on the left.', 'twentyfourteen2' ),
            //'before_widget' => '<aside id="%1$s" class="widget %2$s" style="width: 250px; margin-right: 100px">',
            //'before_widget' => '<div id="%1$s" class="widget %2$s">',
            //'after_widget'  => '</div>',
            //'before_title'  => '<h5 class="widget-title">',
            //'after_title'   => '</h5>'
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Right menu - Gioi thieu', 'twentyfourteen3' ),
            'id'            => 'sidebar-right-menu',
            'description'   => __( 'Introduction layout - Right menu - Gioi thieu', 'twentyfourteen3' ),
            //'before_widget' => '<aside id="%1$s" class="widget %2$s" style="width: 250px; margin-right: 100px">',
            //'before_widget' => '<div id="%1$s" class="widget %2$s">',
            //'after_widget'  => '</div>',
            //'before_title'  => '<h5 class="widget-title">',
            //'after_title'   => '</h5>'
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Right menu - Tuyen dung', 'twentyfourteen4' ),
            'id'            => 'sidebar-right-menu-tuyendung',
            'description'   => __( 'Introduction layout - Right menu - Tuyen dung', 'twentyfourteen4' ),
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Right menu - Dich vu', 'twentyfourteen5' ),
            'id'            => 'sidebar-right-menu-dichvu',
            'description'   => __( 'Introduction layout - Right menu - Dich vu', 'twentyfourteen5' ),
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Footer menu 1', 'twentyfourteen6' ),
            'id'            => 'sidebar-footer-menu-1',
            'description'   => __( 'Footer menu 1', 'twentyfourteen6' ),
        )
    );
    register_sidebar(
        array(
            'name'          => __( 'Footer menu 2', 'twentyfourteen7' ),
            'id'            => 'sidebar-footer-menu-2',
            'description'   => __( 'Footer menu 2', 'twentyfourteen7' ),
        )
    );
}
add_action( 'widgets_init', 'mpd2015_widgets_init' );

//force nable menu
// This theme uses wp_nav_menu() in two locations.
//add_theme_support( 'menus' );
/*register_nav_menus( array(
    'main_menu' => 'Main nenu',
    'introduction_layout_menu' => 'Introduction Layout menu'
) );*/

//layout
require_once('/_layouts/introduction.php');