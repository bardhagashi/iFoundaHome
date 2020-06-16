<?php

    function ifoundahome_script_enqueue() {

        wp_enqueue_style('footerstyle', get_template_directory_uri().'/css/footer.css', array(), '1.0.0', 'all');
        wp_enqueue_style('bootstrap1', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('bootstrap2', 'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('buttonstyle', get_template_directory_uri().'/css/buttonToTop.css', array(), '1.0.0', 'all');
        wp_enqueue_style('bootstrap6', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '1.0.0', 'all');
        wp_enqueue_style('bootstrap7', 'https://fonts.googleapis.com/css?family=Merriweather:400,900,900i', array(), '1.0.0', 'all');
        wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/home.css');

        
        wp_enqueue_script('bootstrap4', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array('jquery'), '', true);
        wp_enqueue_script('bootstrap5', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js', array('jquery'), '', true);
        wp_enqueue_script('customjs', get_template_directory_uri().'/js/ifoundahome.js', array(), '1.0.0', true);
        wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css%27');
        wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
        wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
        wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true );

    }
    add_action('wp_enqueue_scripts', "ifoundahome_script_enqueue");

    function ifoundahome_theme_setup() {

        add_theme_support('menus');

        register_nav_menu('secondary', 'Footer Navigation');
        
    }
    add_action('init', 'ifoundahome_theme_setup');

?>