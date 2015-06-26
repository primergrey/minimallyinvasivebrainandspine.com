<?php
add_filter('show_admin_bar', '__return_false');
add_action( 'init', 'testimonials_post_type' );
add_action( 'init', 'procedures_post_type' );
function testimonials_post_type() {
  register_post_type( 'testimonials',
    array(
      'labels' => array(
        'name' => __( 'Testimonials' ),
        'singular_name' => __( 'Testimonial' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'custom-fields', 'excerpt' ),
      'rewrite' => array('slug' => 'testimonials')
    )
  );
}
function procedures_post_type() {
  register_post_type( 'procedures',
    array(
      'labels' => array(
        'name' => __( 'Procedures' ),
        'singular_name' => __( 'Procedure' )
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array( 'title', 'editor', 'custom-fields' )
    )
  );
}

function myTruncate($string, $limit, $break=".", $pad="...") {
    // return with no change if string is shorter than $limit
    if(strlen($string) <= $limit) return $string; // is $break present between $limit and the end of the string?
    if(false !== ($breakpoint = strpos($string, $break, $limit))) {
        if($breakpoint < strlen($string) - 1) {
            $string = substr($string, 0, $breakpoint) . $pad; 
        }
    }
    return $string;
}

/* Modify the read more link on the_excerpt() */

function et_excerpt_length($length) {
    return 80;
}
add_filter('excerpt_length', 'et_excerpt_length');

/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/

function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="view-full-post-btn">View Full Post</a></div>';
}
//add_filter('excerpt_more', 'et_excerpt_more');

?>
