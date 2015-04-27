<?php
/*
Template Name: Testimonials Page
*/
//flush_rewrite_rules();
get_header(); ?>

<div class="content-wrap"><div class="theContent">
    
    <h1>Patient Stories</h1>

    <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $loop = new WP_Query( array(
            'post_type' => 'testimonials',
            'posts_per_page' => 4,
            //'orderby'=> 'menu_order',
            'paged'=>$paged
        ) );
    ?>    
    
    <div class="navigation">
        <?php
        global $loop;

        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $loop->max_num_pages
        ) );
        ?>
    </div>
    
    <div class="testimContent">

    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
        <?php if($loop->current_post == 2) : ?>
        <div class="testimItem quote">
            <p>"<?php echo get_post_meta($post->ID, 'quote', true);?>"
            <?php the_title( '<span>', get_post_meta($post->ID, 'Procedure', true).'</span>' ); ?></p>
            
        </div>
        <?php endif ; ?>    
        <?php //else : ?>
        <div class="testimItem">
            <?php if($loop->current_post == 2) : ?><hr /><?php endif ; ?> 
            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title( '<h2>', ' <span>'.get_post_meta($post->ID, 'Procedure', true).'</span></h2>' ); ?></a>
            <?php the_excerpt(); ?>

            <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="more">Read more...</a><hr /> 
        </div>

    <?php endwhile; ?>

        <div class="navigation">
        <?php
        //global $loop;

        $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $loop->max_num_pages
        ) );
        ?>
        </div>
    </div>
</div></div>    
<?php get_footer(); ?>
