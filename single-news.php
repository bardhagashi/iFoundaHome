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

<?php $embed = get_field('embed_a_video');?>

<?php if($embed):?>
<?php echo $embed; ?>
<?php else: ?><div id="single-post-picture"><?php if(has_post_thumbnail(  )):?>
    <?php the_post_thumbnail('thumbnail');?></div>
<?php endif;?>
<?php the_content();?> <div class="single-news-title"><?php the_title();?></div>
<?php endif;?>

<div class="desc-style"><?php the_field('news_single_description');?></div>

<?php if(comments_open()){
    comments_template();
    }  else{
    echo "<h5>Sorry, comments are closed</h5>";
}
;?>
<?php endwhile;
endif;?>

<?php get_footer();?>