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
        wp_enqueue_script('getDayAndDatejs', get_template_directory_uri().'/js/getDayAndDate.js', array(), '1.0.0', true);
        wp_enqueue_script('hideAndShowLoginRegisterjs', get_template_directory_uri().'/js/hideAndShowLoginRegister.js', array(), '1.0.0', true);
        
        

    }
    
    add_action('wp_enqueue_scripts', "ifoundahome_script_enqueue");

    if( file_exists( get_stylesheet_directory(). '/fields.php' ))
    {
        require_once get_stylesheet_directory(). '/fields.php';
    }
    else
    {
        require_once TEMPLATEPATH . '/fields.php';
    }

    function ifoundahome_theme_setup() {

        add_theme_support('menus');
        

        register_nav_menu('primary', 'Primary Header Navigation');
        register_nav_menu('secondary', 'Footer Navigation');
        
    }
    add_action('init', 'ifoundahome_theme_setup');
    add_theme_support( 'post-formats' );
    
    if ( ! function_exists( 'post_pagination' ) ) :
        function post_pagination() {
          global $wp_query;
          $pager = 999999999; // need an unlikely integer
      
             echo paginate_links( array(
                  'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages
             ) );
        }
     endif;

     add_action( 'init', 'custom_bootstrap_slider' );
     add_action( 'after_setup_theme', 'umbrella_theme_setup' ); 
     function umbrella_theme_setup()
     { add_theme_support('post-thumbnails'); 
    }
/**
 * Register a Custom post type for.
 */
function custom_bootstrap_slider() {
	$labels = array(
		'name'               => _x( 'Slider', 'post type general name'),
		'singular_name'      => _x( 'Slide', 'post type singular name'),
		'menu_name'          => _x( 'Bootstrap Slider', 'admin menu'),
		'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Slide'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Slide'),
		'edit_item'          => __( 'Edit Slide'),
		'view_item'          => __( 'View Slide'),
		'all_items'          => __( 'All Slide'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Slide'),
		'parent_item_colon'  => __( 'Parent Slide:'),
		'not_found'          => __( 'No Slide found.'),
		'not_found_in_trash' => __( 'No Slide found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-star-half',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	);

	register_post_type( 'slider', $args );
}
?>