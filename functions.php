<?php


	/* # Themes Script
    ================================================== */
    function theme_scripts() {
        wp_enqueue_script('whatever', get_template_directory_uri() .'/js/whatever.js', array('jquery'));
        wp_enqueue_script('flexslider', get_template_directory_uri() .'/js/jquery.flexslider.js', array('jquery'));
        wp_enqueue_script('flickr', get_template_directory_uri() .'/js/jquery.flickrush.js', array('jquery'));
    }

    add_action('init', 'theme_scripts');

    /* # End Themes Script
    ================================================== */

    /* # Themes Menu
    ================================================== */
    // Check menu functions
    if (function_exists('wp_nav_menu')) {
        function wp_my_menus () {
            //Register Menu for Theme
            register_nav_menus (array ('primary-menu' => __('Main Menu'),
                                       'second-menu' => __('Second Menu')));
        }
    }

    add_action('init', 'wp_my_menus');

    /* # End Themes Menu
    ================================================== */

    // Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
     register_sidebar(array(
     'name' => 'Sidebar Widgets',
     'id' => 'sidebar-widgets',
     'description' => 'These are widgets for the sidebar.',
     'before_widget' => '<div id="%1$s" class="widget %2$s">',
     'after_widget' => '</div>',
     'before_title' => '<h2>',
     'after_title' => '</h2>'
     ));
    }

    // Theme Support Thumbnail
    add_theme_support( 'post-thumbnails' ); 


?>