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
        wp_enqueue_style('ribbonstyle', get_template_directory_uri() . '/css/ribbon.scss');
        wp_enqueue_style('ribbonstylecss', get_template_directory_uri() . '/css/ribbon.css');
        wp_enqueue_style('ribbonstylecssmap', get_template_directory_uri() . '/css/ribbon.css.map');
        
        wp_enqueue_script('bootstrapScript', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array('jquery'), '', true);
        wp_enqueue_script('bootstrapScript1', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js', array('jquery'), '', true);
        wp_enqueue_script('customjs', get_template_directory_uri().'/js/ifoundahome.js', array(), '1.0.0', true);
        wp_enqueue_script('getDayAndDatejs', get_template_directory_uri().'/js/getDayAndDate.js', array(), '1.0.0', true);
        wp_enqueue_script('hideAndShowLoginRegisterjs', get_template_directory_uri().'/js/hideAndShowLoginRegister.js', array(), '1.0.0', true);
        wp_enqueue_script( 'parallax', get_template_directory_uri() . '/js/parallax.js', array(), '1.0.0', true );
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
    add_theme_support( 'post-formats', array('quote', 'video', 'gallery', 'image'));
    
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

     function sale_custom_post_type(){

        $labels = array(
            'name' => 'Sales',
            'singular_name' => 'Sales',
            'add_new' => 'Add Item',
            'all_items' => 'All Items',
            'add_new_item' => 'Add Item',
            'edit_item' => 'Edit Item',
            'new_item' => 'New Item',
            'view_item' => 'View Item',
            'search_item' => 'Search Item',
            'not_found' => 'No Item Found',
            'not_found_in_trash' => 'No Item Found In Trash',
            'parent_item_colon' => 'Parent Item'
        );
      $args = array(
          'labels' => $labels,
          'public' => true,
          'has_archive' => true,
          'publicly_queryable' => true,
          'query_var' => true,
          'rewrite' => true,
          'capability_type' => 'post',
          'hierarchical' => false,
          'supports' => array(
              'title',
              'editor',
              'excerpt',
              'thumbnail',
              'revisions',
              'comments'
          ), 
          'taxonomies' => array('category', 'post_tag'),
          'menu_position' => 5,
          'exclude_from_search' => false
      );
      register_post_type('sales', $args);
     }
     add_action('init', 'sale_custom_post_type');
     add_theme_support('post-thumbnails');
 function setup_types() {
    register_post_type('mytype', array(
        'label' => __('My type'),
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'revisions' ),
        'show_ui' => true,
    ));
}
add_action('init', 'setup_types');

function rent_custom_post_type(){

    $labels = array(
        'name' => 'Rent',
        'singular_name' => 'Rent',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Item',
        'not_found' => 'No Item Found',
        'not_found_in_trash' => 'No Item Found In Trash',
        'parent_item_colon' => 'Parent Item'
    );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
          'title',
          'editor',
          'excerpt',
          'thumbnail',
          'revisions',
          'comments'
      ), 
      'taxonomies' => array('category', 'post_tag'),
      'menu_position' => 6,
      'exclude_from_search' => false
  );
  register_post_type('rent', $args);
 }
 add_action('init', 'rent_custom_post_type');
 add_theme_support('post-thumbnails');

function news_custom_post_type(){

    $labels = array(
        'name' => 'News and Updates',
        'singular_name' => 'News',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Item',
        'not_found' => 'No Item Found',
        'not_found_in_trash' => 'No Item Found In Trash',
        'parent_item_colon' => 'Parent Item'
    );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
          'title',
          'editor',
          'excerpt',
          'thumbnail',
          'revisions',
          'comments'
      ), 
      'taxonomies' => array('category', 'post_tag'),
      'menu_position' => 7,
      'exclude_from_search' => false
  );
  register_post_type('news', $args);
 }
 add_action('init', 'news_custom_post_type');
 add_theme_support('post-thumbnails');

 function home_widget_setup(){
     register_sidebar( array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Standard Sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
        ) 
     );
 }
 add_action('widgets_init','home_widget_setup');

 function agents_custom_post_type(){

    $labels = array(
        'name' => 'Agents',
        'singular_name' => 'Agents',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Item',
        'not_found' => 'No Item Found',
        'not_found_in_trash' => 'No Item Found In Trash',
        'parent_item_colon' => 'Parent Item'
    );
  $args = array(
      'labels' => $labels,
      'public' => true,
      'has_archive' => true,
      'publicly_queryable' => true,
      'query_var' => true,
      'rewrite' => true,
      'capability_type' => 'post',
      'hierarchical' => false,
      'supports' => array(
          'title',
          'editor',
          'excerpt',
          'thumbnail',
          'revisions',
          'comments'
      ), 
      'taxonomies' => array('category', 'post_tag'),
      'menu_position' => 8,
      'exclude_from_search' => false
  );
  register_post_type('agents', $args);
 }
 add_action('init', 'agents_custom_post_type');
 add_theme_support('post-thumbnails');
?>