<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<div class="body-ag">
    <?php get_header()?>
    <?php
if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="agent-single-post">
        <div class="single-post-agent-image"><?php the_post_thumbnail(); the_content();?></div>
        <div class="single-post-agent-info">
            <h4 class="single-post-agent-name"><?php the_field('agent_name');?></h4>
            <p class="single-post-agent-description"><?php the_field('agent_description');?></p>
            <p class="single-post-agent-description"><?php the_field('agent_second_description');?></p>
            <p class="single-post-agent-description"><?php the_field('agent_third_description');?></p>
            <div class="contact-no">
                <div>Office: <?php the_field('office_phone_number');?> </div>
                <div> Mobile: <?php the_field('agent_phone_number');?> </div>
                <div> Fax: <?php the_field('fax');?> </div>
            </div>
            <div class="contact-no">
                <div>WhatsApp: <?php the_field('whatsapp_phone_number');?></div>
                <div>Email: <?php the_field('agent_email');?></div>
            </div>
            <div class="contact-no">
                <div>Address: <?php the_field('address');?></div>
            </div>
        </div>
    </div>
    <?php if(comments_open()){
    comments_template();
    }  else{
    echo "<h5>Sorry, comments are closed</h5>";
}
;?>
    <?php endwhile;
endif;?>
</div>
<?php get_footer();?>