<?php

    function spiky_blooms_enqueue_scripts() {
        wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');
        wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/5dfbc71075.js', array(), null, true);
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap', array(), null);
        wp_enqueue_style('theme-styles', get_stylesheet_uri());
        wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/custom.css', array('theme-styles'), '1.0');
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
    }

    add_action('wp_enqueue_scripts', 'spiky_blooms_enqueue_scripts');

    function spiky_blooms_setup() {
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'spiky-blooms'),
        ));
    }

    add_action('after_setup_theme', 'spiky_blooms_setup');
    
    add_filter('show_admin_bar', '__return_false');

