<?php
/*
Template Name: My Custom Page
*/



?>
<?php get_header(); ?>

    <div class="menu-wrap">
        <nav class="menu">
            <div class="icon-list">
                <a href="#philosophy" data-index="2">Philosophy</a>
                <a href="#drmaioriello" data-index="3">Dr. Maioriello</a>
                <a href="#procedures" data-index="4">Procedures</a>
                <a href="#patientstories" data-index="5">Patient Stories</a>
                <a href="/patient-resources/" data-index="7">Patient Resources</a>
                <li><a href="#contact" data-index="6">Contact</a>
            </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>
    <button class="menu-button" id="open-button">Open Menu</button>
<div class="content-wrap"><div class="content">
    <div class="slide1 section">
<!--        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bg-home.jpg" alt="" class="homeBg" />-->
        <div id="mainNav">
            <a href="#1" data-index="1" id="homelink">Home</a>
            <a href="/patient-resources/" id="prlink"><span>Patient Resources</span></a>
<!--            <a href="/patient-resources/" id="menuBtn"><span>Menu</span></a>-->
            <ul class="onepagenav">
                <li><a href="#philosophy" data-index="2">Philosophy</a></li>
                <li><a href="#drmaioriello" data-index="3">Dr. Maioriello</a></li>
                <li><a href="#procedures" data-index="4">Procedures</a></li>
                <li><a href="#patientstories" data-index="5">Patient Stories</a></li>
<!--                <li class="prItem"><a href="/patient-resources/" data-index="7">Patient Resources</a></li>-->
                <li><a href="#contact" data-index="6">Contact</a></li>
<!--                <li><a href="#7" data-index="7"></a></li>-->
            </ul>
            
        </div>
        
        <h1>Minimally Invasive Brain and Spine</h1>
        <p>A team that you can trust</p>
    </div>

        
       
</div></div>
<?php get_footer(); ?>