<?php
/**
 * The template for displaying all single posts and attachments
 *
 */
//flush_rewrite_rules();
get_header(); ?>

<div class="content-wrap"><div class="theContent">
    <h1>Patient Stories</h1>
    <div class="testimSingle">
        <?php while ( have_posts() ) : the_post(); ?>
            <h2><?php the_title();?> <span><?php echo get_post_meta(get_the_ID(), 'Procedure', true);?></span></h2>
            <hr />
            <div class="testimContent"><?php the_content(); ?></div>
            <div class="quote">"<?php echo get_post_meta(get_the_ID(), 'quote', true);?>"</div>


        <?php endwhile; ?>
        <hr />
        <a href="/testimony/" class="baktoall">All Patient Stories</a>
    </div>
</div></div>    
<?php get_footer(); ?>
