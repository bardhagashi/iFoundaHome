<?php
  
get_header(); ?>
<?php
    if (have_posts()) : while (have_posts()) : the_post(); ?>
<article class="single-post" id="post-<?php the_ID();?>" <?php post_class();?>>
    <div class="single-page-top">
        <h3 id="single-title"><?php the_field('post_title');?></h3>
        <div class="sale-price">
            <p class="pricefor"><?php the_field('price_for');?></p>
            <p class="home-price"><?php the_field('price');?></p>
        </div>
    </div>
    <div class="single-post-picture"><?php if(has_post_thumbnail(  )):?>
        <?php the_post_thumbnail('thumbnail');?></div>
    <?php endif;?>
    <?php the_content();?>
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            <div class="first-col-1">
                <div class="more-property-information">
                    <div class="id-style">
                        <p>Property ID: <p class="id-color"> <?php the_field('property_id');?></p>
                        </p>
                    </div>
                    <hr id="line-style">
                    <div class="properties">
                        <div class="bedroom-single">
                            <p>Bedrooms</p>
                            <svg class="rh_svg-single" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path
                                    d="M1111.91,600.993h16.17a2.635,2.635,0,0,1,2.68,1.773l1.21,11.358a2.456,2.456,0,0,1-2.61,2.875h-18.73a2.46,2.46,0,0,1-2.61-2.875l1.21-11.358A2.635,2.635,0,0,1,1111.91,600.993Zm0.66-7.994h3.86c1.09,0,2.57.135,2.57,1l0.01,3.463c0.14,0.838-1.72,1.539-2.93,1.539h-4.17c-1.21,0-2.07-.7-1.92-1.539l0.37-3.139A2.146,2.146,0,0,1,1112.57,593Zm11,0h3.86a2.123,2.123,0,0,1,2.2,1.325l0.38,3.139c0.14,0.838-.72,1.539-1.93,1.539h-5.17c-1.21,0-2.07-.7-1.92-1.539L1121,594C1121,593.1,1122.48,593,1123.57,593Z"
                                    transform="translate(-1108 -593)"></path>
                            </svg>
                            <?php the_field('bedrooms');?>
                        </div>
                        <div class="bathroom-single">
                            <p>Bathrooms</p>
                            <svg class="rh_svg-single" xmlns="http://www.w3.org/2000/svg" width="23.69" height="24"
                                viewBox="0 0 23.69 24">
                                <path
                                    d="M1204,601a8,8,0,0,1,16,0v16h-2V601a6,6,0,0,0-12,0v1h-2v-1Zm7,6a6,6,0,0,0-12,0h12Zm-6,2a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,609Zm0,5a1,1,0,0,1,1,1v1a1,1,0,0,1-2,0v-1A1,1,0,0,1,1205,614Zm4.94-5.343a1,1,0,0,1,1.28.6l0.69,0.878a1,1,0,0,1-1.88.685l-0.69-.879A1,1,0,0,1,1209.94,608.657Zm2.05,4.638a1,1,0,0,1,1.28.6l0.35,0.94a1.008,1.008,0,0,1-.6,1.282,1,1,0,0,1-1.28-.6l-0.35-.939A1.008,1.008,0,0,1,1211.99,613.295Zm-11.93-4.638a1,1,0,0,1,.6,1.282l-0.69.879a1,1,0,1,1-1.87-.682l0.68-.88A1,1,0,0,1,1200.06,608.657Zm-2.05,4.639a1,1,0,0,1,.6,1.281l-0.34.941a1,1,0,0,1-1.88-.683l0.34-.94A1,1,0,0,1,1198.01,613.3Z"
                                    transform="translate(-1196.31 -593)"></path>
                            </svg>
                            <?php the_field('bathrooms');?>
                        </div>
                        <div class="area-single">
                            <p>Area</p>
                            <svg class="rh_svg-single" version="1.1" xmlns="http://www.w3.org/2000/svg"
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
                        <div class="year-built">
                            <p>Year Built</p>
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px"
                                viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                <g class="rh_svg-single">
                                    <path
                                        d="M20,2h-1V1c0-0.552-0.447-1-1-1s-1,0.448-1,1v1H7V1c0-0.552-0.447-1-1-1S5,0.448,5,1v1H4C1.794,2,0,3.794,0,6v14
		c0,2.206,1.794,4,4,4h16c2.206,0,4-1.794,4-4V6C24,3.794,22.206,2,20,2z M22,20c0,1.104-0.896,2-2,2H4c-1.104,0-2-0.896-2-2V6
		c0-1.104,0.896-2,2-2h1v1c0,0.552,0.447,1,1,1s1-0.448,1-1V4h10v1c0,0.552,0.447,1,1,1s1-0.448,1-1V4h1c1.104,0,2,0.896,2,2V20z">
                                    </path>
                                    <circle cx="6" cy="12" r="2"></circle>
                                    <circle cx="18" cy="12" r="2"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                    <circle cx="6" cy="18" r="2"></circle>
                                    <circle cx="18" cy="18" r="2"></circle>
                                    <circle cx="12" cy="18" r="2"></circle>
                                </g>
                            </svg>
                            <?php the_field('year_built');?>
                        </div>
                        <div class="lot-size">
                            <p>Lot Size</p>
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <rect fill="none" height="26" width="26" y="-1" x="-1"></rect>
                                </g>
                                <g>
                                    <rect x="1" y="1" id="svg_1" width="32" height="32" fill="none"></rect>
                                    <path class="rh_svg-single" stroke="null" fill="#1ea69a" id="svg_2"
                                        d="m23.952237,12l-4.482089,-4.170255l0,2.78017l-1.49403,0l0,-4.170255l-4.482089,0l0,-1.390085l2.988059,0l-4.482089,-4.170255l-4.482089,4.170255l2.988059,0l0,1.390085l-4.482089,0l0,4.170255l-1.49403,0l0,-2.78017l-4.482089,4.170255l4.482089,4.170255l0,-2.78017l1.49403,0l0,4.170255l4.482089,0l0,1.390085l-2.988059,0l4.482089,4.170255l4.482089,-4.170255l-2.988059,0l0,-1.390085l4.482089,0l0,-4.170255l1.49403,0l0,2.78017l4.482089,-4.170255zm-7.470148,4.170255l-8.964178,0l0,-8.34051l8.964178,0l0,8.34051z">
                                    </path>
                                </g>
                            </svg>
                            <?php the_field('lot_size');?>
                        </div>
                    </div>
                    <div class="single-description">
                        <h6 class="desc-font-style">Description</h6>
                        <p class="desc-paragraph"><?php the_field('single_post_description');?></p>
                    </div>
                    <div>
                        <h6 class="desc-font-style">Common Note</h6>
                        <p class="note-paragraph"><?php the_field('common_note');?></p>
                    </div>
                    <div>
                        <h6 class="desc-font-style">Property Video</h6>
                        <p class="vid-style"><?php the_field('video');?></p>
                    </div>
                </div>
            </div>
            <h6 class="desc-font-style-map">Property on Map</h6>
            <iframe class="map-style" src="<?php the_field('google_map');?>"></iframe>
            <?php if(comments_open()){
    comments_template();
    }  else{
    echo "<h5>Sorry, comments are closed</h5>";
}
;?>
        </div>

        <?php endwhile; 
        endif;?>
        <div class="col-xs-12 col-sm-4">
            <?php get_sidebar();?>
        </div>
    </div>
    </div>
</article>
</div>

<?php get_footer(); ?>