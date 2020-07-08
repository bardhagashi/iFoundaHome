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
           'posts_per_page' => 3 
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

<?php get_footer(); ?>