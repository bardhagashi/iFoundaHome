<?php

    require_once get_template_directory().'/class-wp-bootstrap-navwalker.php';

    function ifoundahome_script_enqueue() {

        wp_enqueue_style('headerstyle', get_template_directory_uri().'/css/header.css', array(), '1.0.0', 'all');

        wp_enqueue_style('footerstyle', get_template_directory_uri().'/css/footer.css', array(), '1.0.0', 'all');
        wp_enqueue_style('bootstrapStyle', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('bootstrapStyle1', 'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css', array(), '1.0.0', 'all');

        wp_enqueue_style('buttonstyle', get_template_directory_uri().'/css/buttonToTop.css', array(), '1.0.0', 'all');
        wp_enqueue_style('bootstrapStyle2', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '1.0.0', 'all');

        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/home.css');

        
        wp_enqueue_script('bootstrapScript', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array('jquery'), '', true);
        wp_enqueue_script('bootstrapScript1', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js', array('jquery'), '', true);
        wp_enqueue_script('customjs', get_template_directory_uri().'/js/ifoundahome.js', array(), '1.0.0', true);

    }
    add_action('wp_enqueue_scripts', "ifoundahome_script_enqueue");

    function ifoundahome_theme_setup() {

        add_theme_support('menus');

        register_nav_menu('primary', 'Primary Header Navigation');
        register_nav_menu('secondary', 'Footer Navigation');
        
    }
    add_action('init', 'ifoundahome_theme_setup');

?>