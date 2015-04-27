<?php
/*
Template Name: Patient Resources Page
*/
//flush_rewrite_rules();
get_header(); ?>
<div class="content-wrap"><div class="theContent patientPage"> 
    <div class="content">
        <?php
            $my_postid = 83;
            //$title = get_post_field('post_title', $my_postid);
            $content = get_post_field('post_content', $my_postid);
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            //echo "<h3><span>".$title."</span></h3>";
            echo $content;
        ?>
    </div>
    
</div></div>
<div class="patientFooter">
     <?php
            $my_postid = 85;
            $title = get_post_field('post_title', $my_postid);
            $content = get_post_field('post_content', $my_postid);
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            echo "<h3><span>".$title."</span></h3>";
            echo $content;
        ?>
</div>
<?php get_footer(); ?>