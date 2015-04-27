<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); ?>
<div class="content-wrap"><div class="theContent">

<?php
$args = array( 'post_type' => 'testimonials', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  the_title();
  echo '<div class="entry-content">';
  the_content();
  echo '</div>';
endwhile;
?>
</div></div>    
<?php get_footer(); ?>