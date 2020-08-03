<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="single-news">
    <div class="single-news-card">
        <div class="video-style">
            <?php $embed = get_field('embed_a_video');?>
            <?php if($embed):?>
            <?php echo $embed; ?>
        </div>
        <?php else: ?><div id="single-post-picture"><?php if(has_post_thumbnail(  )):?>
            <?php the_post_thumbnail('thumbnail');?></div>
        <?php endif;?>
        <?php the_content();?> <div class="single-news-title"><?php the_title();?></div>
        <?php endif;?>
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <div class="first-col-1">
                    <div class="desc-news-style"><?php the_field('news_single_description');?></div>
                    <div class="headings">
                        <h2>This is h2 heading</h2>
                        <p>Holistically scale client-focused growth strategies rather than go forward potentialities.
                            Continually
                            incubate
                            prospective action items with unique architectures. Holistically strategize just in time web
                            services.
                            <ol>
                                <li>
                                    Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra
                                    a,
                                    ultricies
                                    in,
                                    diam.
                                    Sed
                                    arcu.
                                    Cras consequat.
                                </li>
                                <li>
                                    Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate
                                    magna
                                    eros
                                    eu
                                    erat.
                                    Aliquam
                                    erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus,
                                    metus.
                                </li>
                                <li>
                                    Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula
                                    vulputate
                                    sem
                                    tristique
                                    cursus.
                                    Nam
                                    nulla quam, gravida non, commodo a, sodales sit amet, nisi.
                                    Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut,
                                    elementum
                                    vulputate,
                                    nunc.
                                </li>
                                <li>
                                    Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod
                                    vel,
                                    velit.
                                    Pellentesque
                                    egestas
                                    sem. Suspendisse commodo ullamcorper magna.
                                </li>
                            </ol>
                        </p>
                        <h3>This is h3 heading</h3>
                        <p>Continually evolve open-source systems for highly efficient deliverables. Seamlessly extend
                            dynamic
                            content
                            vis-a-vis
                            reliable meta-services. Assertively underwhelm 24/365 methods of empowerment via strategic
                            web-readiness.
                            Competently architect strategic human capital before extensible growth strategies.
                            Dramatically
                            extend
                            bricks-and-clicks bandwidth via market-driven human capital.
                        </p>
                    </div>
                </div>
                <h6 class="desc-font-style-map">Property on Map</h6>
                <iframe class="map-style" src="<?php the_field('google_map_news');?>"></iframe>
                <?php if(comments_open()){
    comments_template();
    }  else{
    echo "<h5>Sorry, comments are closed</h5>";
}
;?>
            </div>
            <div class="col-xs-12 col-sm-4">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
</div>
</div>
<?php endwhile;
endif;?>

<?php get_footer();?>