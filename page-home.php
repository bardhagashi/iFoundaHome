<!-- Back to top button -->


<?php
/*
Template Name: Home Page Template
*/ ?>
<a class="buttonToTop"></a>
<?php get_header(); ?>
<div class="sad">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/firstpic.jpg"
                    alt="First slide">
                <div class="first-card">
                    <h3> <a href="#" class="title">
                            Home in Merrick Way </a></h3>
                    <div class="price">For Sale</div>
                    <span class="priceInDollars"> $540,000 </span>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/secondpic.jpg"
                    alt="Second slide">
                <div class="second-card">
                    <h3> <a href="#" class="title">
                            Villa on Grand Avenue </a></h3>
                    <div class="price">For Rent</div>
                    <span class="priceInDollars"> $4,750 Monthly </span>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/thirdpic.jpg"
                    alt="Third slide">
                <div class="third-card">
                    <h3> <a href="#" class="title">
                            Home in Coral Gables </a></h3>
                    <div class="price">For Sale</div>
                    <span class="priceInDollars"> $850,000 </span>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="form">
        <form class="form-style" name="form" method="POST" action="form.php" id="myForm">
            <div class="top">
                <h3 id="title">Let Us Call You! </h3>
                <p>To help you choose your property </p>
            </div>
            <div class="first-row">
                <div class="col">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name">
                </div>
                <div class="column">
                    <input type="tel" id="phone" class="form-control" placeholder="Your Number">
                </div>
            </div>
            <div class="second-row">
                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
            </div>
            <div class="third-row">
                ​<textarea id="message" name="message" rows="4" placeholder="Tell us about desired property"></textarea>
            </div>
            <div class="fourth-row">
                <div class="form-check">
                    <p><b>GDPR Agreement *</b></p>
                    <p><input type="checkbox" required /> I consent to having this website store my submitted
                        information so they can respond to my inquiry.</p>
                </div>
            </div>
            <div class="fifth-row">
                <button type="submit" name="submit" id="submit">Submit</button>
                <?php include 'form.php'; ?>
            </div>
        </form>

        <div class="box arrow-right">
            <span class="phone_icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                    <path
                        d="M18.3 15.3c-0.4 0-0.6 0.2-0.7 0.3l-1.5 1.5c0 0-0.1 0-0.2 0 -0.8 0-2.6-0.9-4.3-2.6 -2.3-2.3-2.8-4.3-2.6-4.5l1.5-1.5c1-1-0.8-3-1.9-4.1C8.1 3.8 6.3 2.1 5.2 2.1c-0.4 0-0.6 0.2-0.7 0.3l-3 3c-0.9 0.9-0.6 2.6 0.9 5.1 1.3 2.2 3.4 4.7 5.8 7.2C11.9 21.3 16.7 25 19.3 25h0c0.7 0 1.1-0.3 1.3-0.5l3-3c1-1-0.8-3-1.9-4.1C21.2 16.9 19.4 15.3 18.3 15.3zM19.5 23.4C19.5 23.5 19.4 23.5 19.3 23.5c-1.5 0-5.5-2.4-9.9-6.8 -2.4-2.4-4.4-4.8-5.6-6.9C2.3 7.5 2.4 6.6 2.6 6.5l2.8-2.8c0.4 0.2 1.2 0.7 2.2 1.7 1 1 1.5 1.8 1.7 2.2L7.9 8.9c-1.4 1.4 0.4 4.4 2.6 6.6 1.9 1.9 4 3.1 5.3 3.1 0.7 0 1.1-0.3 1.3-0.5l1.3-1.3c0.4 0.2 1.2 0.7 2.2 1.7 1 1 1.5 1.8 1.7 2.2L19.5 23.4z"
                        class="a"></path>
                    <path
                        d="M22.5 3.5C20.8 1.9 18.7 1 16.3 1c0 0 0 0 0 0 -0.4 0-0.7 0.3-0.7 0.8s0.3 0.8 0.8 0.8c0 0 0 0 0 0 1.9 0 3.7 0.7 5.1 2.1C22.8 5.9 23.5 7.7 23.5 9.7c0 0.4 0.3 0.8 0.8 0.8s0.8-0.3 0.8-0.7C25 7.3 24.1 5.2 22.5 3.5z"
                        class="a"></path>
                    <path
                        d="M15.4 5.5c0 0 0 0 0 0 1.4 0 2.7 0.5 3.7 1.5 1 1 1.5 2.3 1.5 3.7 0 0.4 0.3 0.8 0.8 0.8s0.8-0.3 0.8-0.7c0-1.8-0.7-3.5-2-4.7 -1.3-1.3-2.9-2-4.7-2 0 0 0 0 0 0 -0.4 0-0.7 0.3-0.7 0.8S14.9 5.5 15.4 5.5z"
                        class="a"></path>
                    <path
                        d="M14.4 8.4c0 0 0 0 0 0 0.9 0 1.7 0.3 2.3 0.9 0.6 0.6 0.9 1.4 0.9 2.3 0 0.4 0.3 0.8 0.8 0.8s0.8-0.3 0.8-0.7c0-1.3-0.5-2.4-1.4-3.3C16.8 7.4 15.6 6.9 14.4 6.9c0 0 0 0 0 0 -0.4 0-0.7 0.3-0.7 0.8S14 8.4 14.4 8.4z"
                        class="a"></path>
                </svg>
            </span>
        </div>
    </div>
</div>
<?php include('filter-post.php'); ?>
<div class="container-1">
    <div class="properties--title">
        <h6 class="top--recent">Recent</h6>
        <h3>Properties</h3>
        <p class="top--paragraph">Check out some of our latest features</p>
    </div>

    <?php
    if(is_front_page()) {
        $paged = (get_query_var('page')) ? get_query_var('page') : 1;
    }else {
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    }
       query_posts(array(
           'post_type' => 'post',
           'paged' => $paged,
           'posts_per_page' => 3,
           'category_name' => 'uncategorized' 
       ));
        
       if ( have_posts() ) :  while ( have_posts() ) : the_post();  ?>

    <div class="row-11">

        <div class="column-1">
            <div class="thumbnail-img" class="image--property">
                <?php the_post_thumbnail( 'large');  ?>
                <p><?php the_content();?>
                    <div class="overlay">
                        <div class="middle"> <a href="<?php the_permalink() ?>" class="view--properties">View
                                Properties</a></div>
                    </div>
                </p>
            </div>

            <?php if ( get_field( 'is_featured' ) ): ?>
            <div class="box-1 featured arrow-right-1">
                <span class="featured_icon">
                    Featured
                </span>
            </div>
            <?php else: ?>
            <?php endif; ?>
            <div class="column--container">
                <h5><a href="<?php the_permalink() ?>"><?php the_field('post_title');?></a></h5>
                <p class="post--description"><?php the_field('post_description');?></p>
                <div class="properties">
                    <div class="bedroom">
                        <p>Bedrooms</p>
                        <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path
                                d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z"
                                transform="translate(-1108 -593)"></path>

                        </svg>
                        <?php the_field('bedrooms');?>
                    </div>
                    <div class="bathroom">
                        <p>Bathrooms</p>
                        <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24"
                            viewBox="0 0 23.69 24">
                            <path
                                d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z"
                                transform="translate(-1196.31 -593)"></path>
                        </svg>
                        <?php the_field('bathrooms');?>
                    </div>
                    <div class="area">
                        <p>Area</p>
                        <svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px"
                            viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                            <g>
                                <circle cx="2" cy="2" r="2"></circle>
                            </g>
                            <g>
                                <circle cx="2" cy="22" r="2"></circle>
                            </g>
                            <g>
                                <circle cx="22" cy="2" r="2"></circle>
                            </g>
                            <rect x="1" y="1" width="2" height="22"></rect>
                            <rect x="1" y="1" width="22" height="2"></rect>
                            <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
	c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"></path>
                        </svg>
                        <?php the_field('area');?>
                    </div>
                </div>
                <div class="sale--price">
                    <p class="price-for"><?php the_field('price_for');?></p>
                    <p class="home--price"><?php the_field('price');?></p>
                </div>
            </div>
        </div>
    </div>

    <?php endwhile; ?>
    <div class="pagination"><?php
     post_pagination();?> </div>
    <?php endif;
    ?>
</div>
<div class="properties-title">
    <h6 class="top--recent">Check Out</h6>
    <h2>Featured Properties</h2>
    <p class="top--paragraph">View list of our short listed properties</p>
</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" id="style-c2">
        <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/1.jpg"
                alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.jpg">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/images/3.jpg"
                alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="properties-title">
    <h6 class="top--recent">Properties</h6>
    <h2>For Sale</h2>
    <p class="top--paragraph">Check out latest properties for sale.</p>
</div>
<div class="container-2">
    <?php
   if(is_front_page()) {
    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
}else {
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
}
   query_posts(array(
       'post_type' => 'sales',
       'paged' => $paged,
       'posts_per_page' => 3 
   ));
// $args = array('post_type' => 'sales', 'posts_per_page' => 3);
// $loop = new WP_Query( $args );
    if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row-12">
        <div class="column-2">
            <div class="header-img">
                <div class="media-for-sale">
                    <div class="camera-property-picture">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                            <style type="text/css">
                            .st0 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                            }
                            </style>
                            <path class="st0"
                                d="M3 5h12c1.1 0 2 0.9 2 2v8c0 1.1-0.9 2-2 2H3c-1.1 0-2-0.9-2-2V7C1 5.9 1.9 5 3 5zM7.7 1h2.8c0.8-0.2 1.7 0.4 1.8 1.2 0 0 0 0.1 0 0.1L13 5H5l0.7-2.7C5.9 1.4 6.8 0.8 7.7 1zM9 7.4c2.2 0 4 1.8 4 4s-1.8 4-4 4 -4-1.8-4-4S6.8 7.4 9 7.4zM9 9c1.3 0 2.4 1.1 2.4 2.4s-1.1 2.4-2.4 2.4 -2.4-1.1-2.4-2.4S7.7 9 9 9L9 9zM8.2 2.6h1.6c0.4 0 0.8 0.4 0.7 0.9 0 0.4-0.3 0.7-0.7 0.7H8.2c-0.4 0-0.8-0.3-0.9-0.7 0-0.4 0.3-0.8 0.7-0.9C8.1 2.6 8.2 2.6 8.2 2.6z">
                            </path>
                        </svg>
                    </div>
                    <p class="media-number"><?php the_field('number_of_pictures_provided')?></p>
                </div>
                <div class="media-video-for-sale">
                    <div class="camera-for-sale-video">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                            <style type="text/css">
                            .st0 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                            }
                            </style>
                            <path class="st0"
                                d="M4 1h10c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H4c-1.7 0-3-1.3-3-3V4C1 2.3 2.3 1 4 1zM3.4 2.6c0.4 0 0.8 0.4 0.8 0.8V5c0 0.4-0.4 0.8-0.8 0.8C3 5.8 2.6 5.4 2.6 5c0 0 0 0 0 0V3.4C2.6 3 3 2.6 3.4 2.6L3.4 2.6zM11.2 9.2c0.1-0.1 0.2-0.2 0.1-0.4 0-0.1-0.1-0.1-0.1-0.1L7.1 5.9C7 5.8 7 5.8 6.9 5.8c-0.2 0-0.3 0.1-0.3 0.3v5.9c0 0.2 0.1 0.3 0.3 0.3 0.1 0 0.1 0 0.2-0.1L11.2 9.2zM3.4 7.4c0.4 0 0.8 0.4 0.8 0.8l0 0v1.6c0 0.4-0.4 0.8-0.8 0.8 -0.4 0-0.8-0.4-0.8-0.8 0 0 0 0 0 0V8.2C2.6 7.8 3 7.4 3.4 7.4zM3.4 12.2c0.4 0 0.8 0.4 0.8 0.8l0 0v1.6c0 0.4-0.4 0.8-0.8 0.8 -0.4 0-0.8-0.4-0.8-0.8 0 0 0 0 0 0V13C2.6 12.6 3 12.2 3.4 12.2 3.4 12.2 3.4 12.2 3.4 12.2zM14.6 2.6c0.4 0 0.8 0.4 0.8 0.8l0 0V5c0 0.4-0.4 0.8-0.8 0.8S13.8 5.4 13.8 5V3.4C13.8 3 14.2 2.6 14.6 2.6L14.6 2.6zM14.6 7.4c0.4 0 0.8 0.4 0.8 0.8l0 0v1.6c0 0.4-0.4 0.8-0.8 0.8s-0.8-0.4-0.8-0.8V8.2C13.8 7.8 14.2 7.4 14.6 7.4zM14.6 12.2c0.4 0 0.8 0.4 0.8 0.8l0 0v1.6c0 0.4-0.4 0.8-0.8 0.8s-0.8-0.4-0.8-0.8V13C13.8 12.6 14.2 12.2 14.6 12.2 14.6 12.2 14.6 12.2 14.6 12.2z">
                            </path>
                        </svg>
                    </div>
                    <p class="media-video-number"><?php the_field('number_of_videos_provided')?></php>
                </div>
                <?php if ( get_field( 'featured_property' ) ): ?>
                <div class="featured-ribbon">
                    <svg class="star-style" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                        <style type="text/css">
                        .st0 {
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                        }
                        </style>
                        <path class="st0"
                            d="M7.4 2.4c0-0.2 0.2-0.3 0.4-0.4 0.1 0 0.3 0 0.5 0 0.2 0.1 0.3 0.2 0.4 0.4l1.5 3.1L13.4 6c0.2 0 0.4 0.1 0.5 0.3C14 6.4 14 6.6 14 6.8c0 0.2-0.1 0.4-0.2 0.5l-2.4 2.4 0.6 3.4c0 0.2 0 0.4-0.1 0.5 -0.2 0.3-0.6 0.4-0.9 0.2l0 0 -3-1.5 -2.9 1.6c-0.3 0.2-0.7 0.1-0.9-0.2l0 0C4 13.5 4 13.3 4 13.1l0.6-3.4L2.2 7.3C2.1 7.2 2 7 2 6.8s0-0.4 0.2-0.5C2.3 6.1 2.4 6 2.6 6l3.3-0.5L7.4 2.4z">
                        </path>
                    </svg>
                </div>
                <?php else:
                endif; ?>
                <?php if(get_field('hot_property')):?>
                <div class="hot-ribbon">
                    <svg class="hot-ribbon-style" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                        <style type="text/css">
                        .st0 {
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                        }
                        </style>
                        <path class="st0"
                            d="M12 10c0.1 2.1-1.6 3.9-3.8 4C8.1 14 8 14 8 14c-2.2-0.1-3.9-1.8-4-4 0.2-3.5 5-3 3-8 0-0.1 1 1 2 2 1 0.9 1.9 2.4 0 5 0 0.1-2.3 2 0 2 0 0 2 0 2-3C11.7 8.4 12.1 9.2 12 10L12 10z">
                        </path>
                    </svg>
                </div>
                <?php else:
                    endif;?>
                <div class="thumbnail-img" class="image-property">
                    <?php the_post_thumbnail( 'large');  ?>
                    <p><?php the_content();?>
                        <div class="agent">
                            <?php 
                            $image = get_field('agent_image');
                            ?>
                            <div class="agent-img">
                                <img class="image-agent" src="<?php echo $image;?>" />
                            </div>
                            <div class="agent-name"><?php the_field('agent_name')?></div>
                            <div class="for-sale-div">
                                For Sale
                            </div>
                        </div>
                    </p>
                </div>
            </div>
            <div class="column--container">
                <h5><a href="<?php the_permalink() ?>"><?php the_field('for_sale_property_title');?></a></h5>
                <p class="post--description">Added: <?php the_time( 'F, j, Y' );?></p>
                <div class="properties">
                    <div class="bedroom">
                        <p>Bedrooms</p>
                        <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path
                                d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z"
                                transform="translate(-1108 -593)"></path>

                        </svg>
                        <?php the_field('for_sale_property_bedrooms');?>
                    </div>
                    <div class="bathroom">
                        <p>Bathrooms</p>
                        <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24"
                            viewBox="0 0 23.69 24">
                            <path
                                d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z"
                                transform="translate(-1196.31 -593)"></path>
                        </svg>
                        <?php the_field('for_sale_property_bathrooms');?>
                    </div>
                    <div class="area">
                        <p>Area</p>
                        <svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px"
                            viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                            <g>
                                <circle cx="2" cy="2" r="2"></circle>
                            </g>
                            <g>
                                <circle cx="2" cy="22" r="2"></circle>
                            </g>
                            <g>
                                <circle cx="22" cy="2" r="2"></circle>
                            </g>
                            <rect x="1" y="1" width="2" height="22"></rect>
                            <rect x="1" y="1" width="22" height="2"></rect>
                            <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
	c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"></path>
                        </svg>
                        <?php the_field('for_sale_property_area');?>
                    </div>
                </div>
                <div class="sale--price">
                    <p class="price-for"><?php the_field('for_sale_property');?></p>
                    <p class="home-price"><?php the_field('for_sale_property_price');?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile;   ?>
    <div class="for-sale-pagination"><?php
    post_pagination();?> </div>
    <?php endif; ?>
</div>
<div class="properties-title">
    <h6 class="top--recent">Properties</h6>
    <h2>For Rent</h2>
    <p class="top--paragraph">Check out latest properties for rent.</p>
</div>

<div class="container-2">
    <?php
   if(is_front_page()) {
    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
}else {
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
}
   query_posts(array(
       'post_type' => 'rent',
       'paged' => $paged,
       'posts_per_page' => 3 
   ));
    if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row-12">
        <div class="column-2">
            <div class="header-img">
                <div class="media-for-sale">
                    <div class="camera-property-picture">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                            <style type="text/css">
                            .st0 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                            }
                            </style>
                            <path class="st0"
                                d="M3 5h12c1.1 0 2 0.9 2 2v8c0 1.1-0.9 2-2 2H3c-1.1 0-2-0.9-2-2V7C1 5.9 1.9 5 3 5zM7.7 1h2.8c0.8-0.2 1.7 0.4 1.8 1.2 0 0 0 0.1 0 0.1L13 5H5l0.7-2.7C5.9 1.4 6.8 0.8 7.7 1zM9 7.4c2.2 0 4 1.8 4 4s-1.8 4-4 4 -4-1.8-4-4S6.8 7.4 9 7.4zM9 9c1.3 0 2.4 1.1 2.4 2.4s-1.1 2.4-2.4 2.4 -2.4-1.1-2.4-2.4S7.7 9 9 9L9 9zM8.2 2.6h1.6c0.4 0 0.8 0.4 0.7 0.9 0 0.4-0.3 0.7-0.7 0.7H8.2c-0.4 0-0.8-0.3-0.9-0.7 0-0.4 0.3-0.8 0.7-0.9C8.1 2.6 8.2 2.6 8.2 2.6z">
                            </path>
                        </svg>
                    </div>
                    <p class="media-number"><?php the_field('pictures_provided')?></p>
                </div>
                <div class="media-video-for-sale">
                    <div class="camera-for-sale-video">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                            <style type="text/css">
                            .st0 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                            }
                            </style>
                            <path class="st0"
                                d="M4 1h10c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H4c-1.7 0-3-1.3-3-3V4C1 2.3 2.3 1 4 1zM3.4 2.6c0.4 0 0.8 0.4 0.8 0.8V5c0 0.4-0.4 0.8-0.8 0.8C3 5.8 2.6 5.4 2.6 5c0 0 0 0 0 0V3.4C2.6 3 3 2.6 3.4 2.6L3.4 2.6zM11.2 9.2c0.1-0.1 0.2-0.2 0.1-0.4 0-0.1-0.1-0.1-0.1-0.1L7.1 5.9C7 5.8 7 5.8 6.9 5.8c-0.2 0-0.3 0.1-0.3 0.3v5.9c0 0.2 0.1 0.3 0.3 0.3 0.1 0 0.1 0 0.2-0.1L11.2 9.2zM3.4 7.4c0.4 0 0.8 0.4 0.8 0.8l0 0v1.6c0 0.4-0.4 0.8-0.8 0.8 -0.4 0-0.8-0.4-0.8-0.8 0 0 0 0 0 0V8.2C2.6 7.8 3 7.4 3.4 7.4zM3.4 12.2c0.4 0 0.8 0.4 0.8 0.8l0 0v1.6c0 0.4-0.4 0.8-0.8 0.8 -0.4 0-0.8-0.4-0.8-0.8 0 0 0 0 0 0V13C2.6 12.6 3 12.2 3.4 12.2 3.4 12.2 3.4 12.2 3.4 12.2zM14.6 2.6c0.4 0 0.8 0.4 0.8 0.8l0 0V5c0 0.4-0.4 0.8-0.8 0.8S13.8 5.4 13.8 5V3.4C13.8 3 14.2 2.6 14.6 2.6L14.6 2.6zM14.6 7.4c0.4 0 0.8 0.4 0.8 0.8l0 0v1.6c0 0.4-0.4 0.8-0.8 0.8s-0.8-0.4-0.8-0.8V8.2C13.8 7.8 14.2 7.4 14.6 7.4zM14.6 12.2c0.4 0 0.8 0.4 0.8 0.8l0 0v1.6c0 0.4-0.4 0.8-0.8 0.8s-0.8-0.4-0.8-0.8V13C13.8 12.6 14.2 12.2 14.6 12.2 14.6 12.2 14.6 12.2 14.6 12.2z">
                            </path>
                        </svg>
                    </div>
                    <p class="media-video-number"><?php the_field('videos_provided')?></php>
                </div>
                <?php if ( get_field( 'featured_for_rent_property' ) ): ?>
                <div class="featured-ribbon">
                    <svg class="star-style" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                        <style type="text/css">
                        .st0 {
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                        }
                        </style>
                        <path class="st0"
                            d="M7.4 2.4c0-0.2 0.2-0.3 0.4-0.4 0.1 0 0.3 0 0.5 0 0.2 0.1 0.3 0.2 0.4 0.4l1.5 3.1L13.4 6c0.2 0 0.4 0.1 0.5 0.3C14 6.4 14 6.6 14 6.8c0 0.2-0.1 0.4-0.2 0.5l-2.4 2.4 0.6 3.4c0 0.2 0 0.4-0.1 0.5 -0.2 0.3-0.6 0.4-0.9 0.2l0 0 -3-1.5 -2.9 1.6c-0.3 0.2-0.7 0.1-0.9-0.2l0 0C4 13.5 4 13.3 4 13.1l0.6-3.4L2.2 7.3C2.1 7.2 2 7 2 6.8s0-0.4 0.2-0.5C2.3 6.1 2.4 6 2.6 6l3.3-0.5L7.4 2.4z">
                        </path>
                    </svg>
                </div>
                <?php else:
                endif; ?>
                <?php if(get_field('trending_for_rent_property')):?>
                <div class="hot-ribbon">
                    <svg class="hot-ribbon-style" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                        <style type="text/css">
                        .st0 {
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                        }
                        </style>
                        <path class="st0"
                            d="M12 10c0.1 2.1-1.6 3.9-3.8 4C8.1 14 8 14 8 14c-2.2-0.1-3.9-1.8-4-4 0.2-3.5 5-3 3-8 0-0.1 1 1 2 2 1 0.9 1.9 2.4 0 5 0 0.1-2.3 2 0 2 0 0 2 0 2-3C11.7 8.4 12.1 9.2 12 10L12 10z">
                        </path>
                    </svg>
                </div>
                <?php else:
                    endif;?>
                <div class="thumbnail-img" class="image-property">
                    <?php the_post_thumbnail( 'large');  ?>
                    <p><?php the_content();?>
                        <div class="property-type-description">
                            <div class="property-type"><?php the_field('property_type');?></div>
                            <div class="for-rent-div">For Rent</div>
                        </div>
                </div>
                </p>
            </div>
            <div class="column--container">
                <h5><a href="<?php the_permalink() ?>"><?php the_field('for_rent_property_title');?></a></h5>
                <p class="post--description">Added: <?php the_time( 'F, j, Y' );?></p>
                <div class="properties">
                    <div class="bedroom">
                        <p>Bedrooms</p>
                        <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path
                                d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z"
                                transform="translate(-1108 -593)"></path>

                        </svg>
                        <?php the_field('for_rent_bedrooms');?>
                    </div>
                    <div class="bathroom">
                        <p>Bathrooms</p>
                        <svg class="rh_svg" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24"
                            viewBox="0 0 23.69 24">
                            <path
                                d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z"
                                transform="translate(-1196.31 -593)"></path>
                        </svg>
                        <?php the_field('for_rent_bathrooms');?>
                    </div>
                    <div class="area">
                        <p>Area</p>
                        <svg class="rh_svg" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px"
                            viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                            <g>
                                <circle cx="2" cy="2" r="2"></circle>
                            </g>
                            <g>
                                <circle cx="2" cy="22" r="2"></circle>
                            </g>
                            <g>
                                <circle cx="22" cy="2" r="2"></circle>
                            </g>
                            <rect x="1" y="1" width="2" height="22"></rect>
                            <rect x="1" y="1" width="22" height="2"></rect>
                            <path opacity="0.5" d="M23,20.277V1h-2v19.277C20.7,20.452,20.452,20.7,20.277,21H1v2h19.277c0.347,0.596,0.984,1,1.723,1
    c1.104,0,2-0.896,2-2C24,21.262,23.596,20.624,23,20.277z"></path>
                        </svg>
                        <?php the_field('for_rent_area');?>
                    </div>
                </div>
                <div class="sale--price">
                    <p class="price-for"><?php the_field('for_rent');?></p>
                    <p class="home-price"><?php the_field('for_rent_price');?></p>
                </div>
                <?php $agentimage = get_field('for_rent_agent_picture');?>
                <div class="for-rent-agents">
                    <div> <img class="image-agent" src="<?php echo $agentimage;?>" /></div>
                    <div class="for-rent-agent-name"><?php the_field('for_rent_agent_name');?></div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile;   ?>
    <div class="for-sale-pagination"><?php
    post_pagination();?> </div>
    <?php endif; ?>
</div>
<div class="elementor-widget-container">
    <section class="rh_elementor_widget rh_section__cta_elementor rh_cta--featured_elementor parallax"
        style="background-size: auto; background-image: url(&quot;http://modern.b-cdn.net/wp-content/uploads/2019/07/cta-bg.jpg&quot;); background-position: center 39px;">
        <div class="wrapper-section-contents_elementor">
            <div class="rh_cta__wrap_elementor">
                <p class="rh_cta__title">Buy or Sell</p>
                <h3 class="rh_cta__quote">Looking to Buy a new property or Sell an existing one? RealHomes provides an
                    awesome solution!</h3>
                <div class="rh_cta__btns_elementor">
                    <a href="#" class="cta_elementor_first_button cta_elementor_button">Submit Property</a>
                    <a href="#" class="cta_elementor_second_button cta_elementor_button">Browse Properties</a>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="properties-title">
    <h6 class="top--recent">Meet Our</h6>
    <h2>Agents</h2>
    <p class="top--paragraph">Get in touch with our real estate experts.
    </p>
</div>
<div class="container-2">
    <?php query_posts(array(
    'post_type' => 'agents',
    'posts_per_page' => 4,
    ));
    if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="column-3">
        <div class="agent-section">
            <div class="agent-section-picture"> <?php the_post_thumbnail( 'large');  ?>
                <?php the_content();?></div>
            <div>
                <h5><a href=" <?php the_permalink() ?>" class="agent-section-name"><?php the_field('agent_name');?></a>
                </h5>
            </div>

            <div class=" agent-section-number"><?php the_field('agent_phone_number');?>
            </div>
            <div class="agent-section-email"><?php the_field('agent_email');?></div>
            <div class="agent-section-property">
                <p class="ls-style"><?php the_field('number_of_listed_properties');?></p>
                <p>Listed Properties
                </p>
            </div>
        </div>
    </div>
    <?php endwhile;
                endif;
                ?>
</div>
<div class="quote-news">
    <div class="top-separator"></div>
    <div class="quote-section">
        <div class="quote-marks-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="205" height="141" viewBox="0 0 205 141">
                <g>
                    <path class="mobile-height"
                        d="M69.8 60.7C82.9 69.1 89.4 80.4 89.4 94.7 89.4 108.9 85.2 120.1 76.8 128.3 68.4 136.4 57.9 140.5 45.3 140.5 32.7 140.5 22.1 136.5 13.5 128.6 4.8 120.7 0.5 110.3 0.5 97.5 0.5 84.6 4.7 72.1 13.1 60L54.4 0.5 97.1 0.5 69.8 60.7ZM176.9 60.7C190 69.1 196.5 80.4 196.5 94.7 196.5 108.9 192.3 120.1 183.9 128.3 175.5 136.4 165 140.5 152.4 140.5 139.8 140.5 129.2 136.5 120.6 128.6 111.9 120.7 107.6 110.3 107.6 97.5 107.6 84.6 111.8 72.1 120.2 60L161.5 0.5 204.2 0.5 176.9 60.7Z">
                    </path>
                </g>
            </svg>
        </div>
        <blockquote class="quote">This is genuinely the best theme I have ever bought in terms of super easy &
            clear
            instructions to
            follow. I have been a web designer for over 18 years now. The theme is fantastic, flexible and
            simply
            excellent
            to use. I cannot recommend enough!
        </blockquote>
        <div class="quote-marks-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="205" height="141" viewBox="0 0 205 141">
                <g>
                    <path
                        d="M69.8 60.7C82.9 69.1 89.4 80.4 89.4 94.7 89.4 108.9 85.2 120.1 76.8 128.3 68.4 136.4 57.9 140.5 45.3 140.5 32.7 140.5 22.1 136.5 13.5 128.6 4.8 120.7 0.5 110.3 0.5 97.5 0.5 84.6 4.7 72.1 13.1 60L54.4 0.5 97.1 0.5 69.8 60.7ZM176.9 60.7C190 69.1 196.5 80.4 196.5 94.7 196.5 108.9 192.3 120.1 183.9 128.3 175.5 136.4 165 140.5 152.4 140.5 139.8 140.5 129.2 136.5 120.6 128.6 111.9 120.7 107.6 110.3 107.6 97.5 107.6 84.6 111.8 72.1 120.2 60L161.5 0.5 204.2 0.5 176.9 60.7Z">
                    </path>
                </g>
            </svg>
        </div>
    </div>
    <div class="bottom-separator"></div>
</div>
<div class="properties-title">
    <h6 class="top--recent">Check out recent</h6>
    <h2>News & Updates</h2>
    <p class="top--paragraph">From real estate industry and beyond.
    </p>
</div>
<div class="container-2">
    <?php query_posts(array(
    'post_type' => 'news',
    ));
    if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="row-12">
        <div class="column-2">
            <?php the_content();?>
            <div class="column--container">
                <p class="post--description">Added: <?php the_time( 'F, j, Y' );?></p>
                <h5><a href="<?php the_permalink() ?>"><?php the_field('news_title');?></a></h5>
                <p class="news"><?php the_field('news_description');?></p>
                <p><?php the_field('news_by');?></p>
            </div>
        </div>
    </div>
    <?php endwhile;
endif;?>
</div>
<div class="properties-title">
    <h6 class="top--recent">Amazing</h6>
    <h2>Features</h2>
    <p class="top--paragraph">Test featured from elementor.
    </p>
</div>
<div class="amazing-features">
    <div class="feature-box-1">
        <figure class="elementor-image-box-img"><img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-1.png" title="icon-feature-6.png"
                alt="icon-feature-6.png"></figure>
        <h5 class="feature-title">Live Customizer</h5>
        <p class="feature-description">To help you configure and customize stuff around your website without going into
            code. You can customize the
            price format to any currency in the world. You can customize the URL slugs to your required ones.</p>
    </div>
    <div class="feature-box-1">
        <figure class="elementor-image-box-img"><img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-2.png"
                title="icon-design-variation-1.png" alt="icon-design-variation-1.png"></figure>
        <h5 class="feature-title">Design Variations</h5>
        <p class="feature-description">Real Homes theme includes two major design variations. You can use the classic or
            modern look based on your
            choice.</p>
    </div>
    <div class="feature-box-1">
        <figure class="elementor-image-box-img"><img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-3.png"
                title="icon-design-variation-1.png" alt="icon-design-variation-1.png"></figure>
        <h5 class="feature-title">Advance Search</h5>
        <p class="feature-description">Real Homes includes advanced properties search feature that is powerful and fully
            customizable to fulfill
            various needs. You can select which fields you want to display and what data will be displayed in those
            fields.</p>
    </div>
</div>
<div class="amazing-features">
    <div class="feature-box-1">
        <figure class="elementor-image-box-img"><img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-4.png" title="icon-feature-6.png"
                alt="icon-feature-6.png"></figure>
        <h5 class="feature-title">Google & OpenStreet Maps</h5>
        <p class="feature-description">Real Homes includes Google Maps API integration that enables you to display
            Google map with properties markers on search results page, properties display pages, property detail page,
            home page and taxonomy archive pages.</p>
    </div>
    <div class="feature-box-1">
        <figure class="elementor-image-box-img"><img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-5.png"
                title="icon-design-variation-1.png" alt="icon-design-variation-1.png"></figure>
        <h5 class="feature-title">Member Support</h5>
        <p class="feature-description">You can provide user registration, login and forgot password features on your
            site to let users access member only features. Social login feature allow you to integrate any social
            network with your website for user login and registration.</p>
    </div>
    <div class="feature-box-1">
        <figure class="elementor-image-box-img"><img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-6.png"
                title="icon-design-variation-1.png" alt="icon-design-variation-1.png"></figure>
        <h5 class="feature-title">Front End Property Submit</h5>
        <p class="feature-description">Real Homes provides front end property submit template and related
            configurations. So you can restrict certain level of users from accessing administrator dashboard and
            provide them an interface on front end to submit properties.</p>
    </div>
</div>
<div class="elementor-container elementor-column-gap-no">
    <div class="elementor-row">
        <div class="elementor-element elementor-element-77d3ec2d elementor-column elementor-col-100 elementor-top-column"
            data-id="77d3ec2d" data-element_type="column">
            <div class="elementor-column-wrap  elementor-element-populated">
                <div class="elementor-widget-wrap">
                    <div class="elementor-element elementor-element-4da04955 elementor-widget elementor-widget-ere-cta-two-widget"
                        data-id="4da04955" data-element_type="widget" data-widget_type="ere-cta-two-widget.default">
                        <div class="elementor-widget-container">
                            <section
                                class="rh_elementor_widget rh_section__cta_elementor_two rh_cta--featured_elementor parallax"
                                style="background-size: auto; background-image: url(&quot;http://modern.b-cdn.net/wp-content/uploads/2019/07/cta-above-footer.jpg&quot;); background-position: center -1px;">


                                <div class="elementor_overlay_cta_1"></div>
                                <div class="wrapper-section-contents_elementor">
                                    <div class="rh_cta__wrap_elementor">

                                        <p class="rh_cta__title">Looking for More?</p>

                                        <h3 class="rh_cta__quote">Talk to our experts or Browse through more properties.
                                        </h3>

                                        <div class="rh_cta__btns_elementor_two">

                                            <a href="#"
                                                class="cta_two_elementor_first_button cta_two_elementor_button">Get In
                                                Touch</a>

                                            <a href="#"
                                                class="cta_two_elementor_second_button cta_two_elementor_button">Browse
                                                More</a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="properties-title">
    <h6 class="top--recent">Our</h6>
    <h2>Partners</h2>
    <p class="top--paragraph">We honoured to have these amazing partners.
    </p>
</div>
<div class="partners">
    <img class="partner-img img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/one.png">
    <img class="partner-img img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/two.png">
    <img class="partner-img img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/three.png">
    <img class="partner-img img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/four.png">
    <img class="partner-img img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/five.png">
</div>
<?php get_footer(); ?>