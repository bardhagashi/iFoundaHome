<?php /* Template name: Costum Search */
    get_header();
?>

<?php 

    if($_GET['search_text'] && $empty($_GET['search_text']))
    {
        $text = $_GET['search_text'];
    }
    
    if($_GET['type'])
    {
        $type = $_GET['type'];
    }

    if($_GET['location'])
    {
        $location = $_GET['location'];
    }
    if($_GET['status'])
    {
        $status = $_GET['status'];
    }
    if($_GET['bedrooms'])
    {
        $bedrooms = $_GET['bedrooms'];
    }
    if($_GET['bathrooms'])
    {
        $bathrooms = $_GET['bathrooms'];
    }
    if($_GET['minPrice'])
    {
        $minPrice = $_GET['minPrice'];
    }

     var_dump($minPrice);
    // if($_GET['maxPrice'])
    // {
    //     $maxPrice = $_GET['maxPrice'];
    // }
    // if($_GET['minGarages'])
    // {
    //     $minGarages = $_GET['minGarages'];
    // }
    // if($_GET['agent'])
    // {
    //     $agent = $_GET['agent'];
    // }
    // if($_GET['minArea'])
    // {
    //     $minArea = $_GET['minArea'];
    // }
    // if($_GET['maxArea'])
    // {
    //     $maxArea = $_GET['maxArea'];
    // }
?>

<div class="container">
    <?php
$args = array( 'category_name' => "$type, $location, $status, $bedrooms, $minPrice");
        array(
            'numberposts' => -1,
            'post-type' => 'post',
            'meta_query' => array(
                'relation' => 'OR',
                array(
                    'key' => 'price',
                    'value'		=> "$minPrice",
			        'compare'	=> '>'
                )
            )
        );

    
	// 'numberposts'	=> -1,
	// 'post_type'		=> 'post',
	// 'meta_query'	=> array(
	// 	'relation'		=> 'OR',
		// array(
		// 	'key'		=> 'price',
		// 	'value'		=> "$minPrice",
		// 	'compare'	=> '>'
        // ),
		// array(
		// 	'key'		=> 'price',
		// 	'value'		=> "$maxPrice",
		// 	'compare'	=> '<'
        // ),

		
$myposts = get_posts( $args );

foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <div>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <?php the_category();?>
        <p><?php the_field('bedrooms'); ?></p>
        <p><?php the_field('bathrooms'); ?></p>
        <p><?php the_field('area'); ?></p>
    </div>
    <?php endforeach; 
wp_reset_postdata();

?>
</div>



<?php get_footer(); ?>