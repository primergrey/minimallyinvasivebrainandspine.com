<?php get_header(); ?>

    <!--div id="mainNav">
        <a href="#home">Home</a>
        <a href="/patient-resources/" id="prlink"><span>Patient Resources</span></a>
        <button id="menuBtn" style="display:none;">Menu</button>
        <ul class="onepagenav">
            <li><a href="#philo">Philosophy</a></li>
            <li><a href="#meetdrmaioriello">Dr. Maioriello</a></li>
            <li><a href="#ourprocedures">Procedures</a></li>
            <li><a href="#testimonials">Patient Stories</a></li>
            <li><a href="#contactus">Contact</a></li>
        </ul>
    </div-->


<div class="content-wrap"><div class="theContent">
    <div class="slide1 section" id="homeSlide">
        <div class="logtag">
            <div class="logo respond"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/mibs-logo.png" alt="Minimally Invasive Brain and Spine Logo" /></div>
            <div class="tagline respond"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/hp-tag.png" alt="A team that you can trust" /></div>
        </div>
    </div>

    <div id="philosophy" class="slide2 section">
        <div class="subSlideXX slidePhilo">
            <div class="content firstSection hook">
            <?php
                $my_postid = 16;
                $title = get_post_field('post_title', $my_postid);
                $content = get_post_field('post_content', $my_postid);
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo "<h2>".$title."</h2>";
                echo $content;
            ?>
            <!--div class="fp-controlArrow fp-next">Dr. Maioriello</div-->
            </div>
            <div class="subcontent secondSection">
                <?php
                    $my_postid = 19;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?>
            </div>
        </div>
        
        
    </div>
    
    <div id="drmaioriello" class="slide3 subSlideXX slideDoc gradient">
        <div class="content">
            <?php
                $my_postid = 20;
                $title = get_post_field('post_title', $my_postid);
                $content = get_post_field('post_content', $my_postid);
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo "<h2>".$title."</h2>";
                echo $content;
            ?>
            <div class="drImage"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bg-doctor.png" alt="Dr. Anthony Maioriello" /></div>
            <!--div class="fp-controlArrow fp-prev">Philosophy</div-->
        </div>
        <div class="subcontent">
            <?php
                $my_postid = 24;
                $title = get_post_field('post_title', $my_postid);
                $content = get_post_field('post_content', $my_postid);
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo "<h3><span>".$title."</span></h3>";
                echo $content;
            ?>
        </div>
    </div>
        
    <div id="procedures" class="slide5 section">
        
        <?php
            $pargs = array( 'post_type' => 'procedures', 'orderby' => 'date',
'order' => 'DESC');
            $ploop = new WP_Query( $pargs );
            while ( $ploop->have_posts() ) : $ploop->the_post();
                echo '  <div class="proceBox '.get_the_title().'">'."\n";
                echo '      <img src="'.esc_url( get_template_directory_uri() ).'/img/bg-'.get_the_title().'.jpg" alt="'.get_the_title().'" class="bgImg" />'."\n";
                echo '      <div class="proceContent"><div class="circleImg"><img src="'.esc_url( get_template_directory_uri() ).'/img/circle-'.get_the_title().'.png" alt="'.get_the_title().' procedures" /></div><div class="procedInfo"><h3>'.get_the_title().'</h3>'."\n";
                echo '      <p><strong>'.get_the_title().'</strong> '.get_the_content().'</p>'."\n";
                echo '      </div></div><div class="proceBtn" data-id="'.$ploop->current_post.'">Procedures ></div></div>'."\n";
                echo '      <div class="proceList dataId-'.$ploop->current_post.'" style="display:none;"><span></span>'."\n";
                echo '          '.get_post_meta($post->ID, 'Procedure list', true)."\n";
                echo '  </div>'."\n";
                $j++;
            endwhile;
        ?>
       
    </div>
    
    <div id="patientstories" class="slide4 section">
        <h2>Patient Stories</h2>
        <div class="tcontainer">
        <?php
            $args = array( 'post_type' => 'testimonials', 'posts_per_page' => 5, 'orderby' => 'rand');
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
                if($loop->current_post==2){
                    echo '<div class="quoteBox"><p>"'.get_post_meta($post->ID, 'quote', true).'"<span>'.get_the_title().', '.get_post_meta($post->ID, 'Procedure', true).'</span></p></div>'."\n";
                }else{
                		if ( has_excerpt( $post->ID ) )
												$theContent = myTruncate(get_the_excerpt(), 220, ".", "...");
										else
												$theContent = myTruncate(get_the_content(), 220, ".", "...");
										
                    echo '<a href="/testimony/"><div class="testimBox">'."\n";
                    echo '<div class="title"><h3>'.get_the_title().'<em>'.get_post_meta($post->ID, 'Procedure', true).'</em></h3><span></span></div>'."\n";
                    echo '<div class="content"><p>"'.$theContent.'"<span class="arrow">View all</span></p></div>'."\n";
//                    echo ''."\n";
//                    echo '<a href="'.get_the_permalink().'" class="testimLink">Read more...</a>';   
                    echo '</div></a>'."\n";
                }
            endwhile;
        ?>
        </div>
    </div>

    <div id="contact" class="slide6 section">
        <div id="map_canvas" style="width:100%;height:400px;"></div>
        <div class="content" id="mapsLinks">
        <?php
            $my_postid = 36;
            $title = get_post_field('post_title', $my_postid);
            $content = get_post_field('post_content', $my_postid);
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            echo "<h2>".$title."</h2>";
            echo $content;
        ?>
        </div>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/downloadxml.js"></script>
        <script>            
            window.onload = function() {
                initialize();
            }
            function initialize() {
                var styles = [ { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [ { "color": "#eeec88" } ] },{ "featureType": "water", "elementType": "geometry", "stylers": [ { "color": "#d0e5ff" } ] },{ "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [ { "color": "#ebe870" } ] } ];
                var gmarkers = [];
                var styledMap = new google.maps.StyledMapType(styles,
    {name: "Mibs Map"});

                var map;
                var bounds = new google.maps.LatLngBounds();
                var mapOptions = {
                    mapTypeId: 'roadmap',
                    scrollwheel: false,
                    draggable: false,
                    zoom: 11,
                    mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
                    }
                };

                // Display a map on the page
                map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                map.setTilt(45);
                
                // Multiple Markers
                var markers = [
                    ['Houston Office', 29.725865, -95.430678],
                    ['Clear Lake Office', 29.542209, -95.126656]
                ];
                
                // Info Window Content
                var infoWindowContent = [
                    ['<div class="info_content">' +
                    '<h3>Houston Office</h3>' +
                    '<p>3400 Bissonnet St Suite 220<br />Houston, TX 77005</p>' +
                    '</div>'],
                    ['<div class="info_content">' +
                    '<h3>Clear Lake Office</h3>' +
                    '<p>450 W Medical Center Blvd<br />Suite 510<br />Webster, TX 77598</p>' +
                    '</div>']
                ];

                // Display multiple markers on a map
                var infoWindow = new google.maps.InfoWindow(), marker, i;
                var image = '<?php echo esc_url( get_template_directory_uri() ); ?>/img/maps-icon-big.png';

                // Loop through our array of markers & place each one on the map  
                for( i = 0; i < markers.length; i++ ) {
                    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
                    bounds.extend(position);
                    marker = new google.maps.Marker({
                        position: position,
                        map: map,
                        title: markers[i][0],
                        icon: image
                    });
                    
                    // Allow each marker to have an info window    
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            infoWindow.setContent(infoWindowContent[i][0]);
                            infoWindow.open(map, marker);
                            
                            if(i==0){
                                $('#clLocation').removeClass("blued");
                                $('#htxLocation').addClass("blued");
                            }else if(i==1){
                                $('#htxLocation').removeClass("blued");
                                $('#clLocation').addClass("blued");
                            }
                        }
                    })(marker, i));

                    // Automatically center the map fitting all markers on the screen
                    map.fitBounds(bounds);
                    
                    gmarkers.push(marker);
                }
                
                var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
                    this.setZoom(10);
                    google.maps.event.removeListener(boundsListener);
                });
                
                google.maps.event.addDomListener(document.getElementById("htxLocation"), "click", function(ev) {
                        map.panTo({lat: markers[0][1], lng: markers[0][2]});
//                    infoWindow.open(map, markers);
                    //infoWindow.setContent(infoWindowContent[0][0]);
                    //infoWindow.open(map, marker[0]);
                    google.maps.event.trigger(gmarkers[0],'click');
                    $('#clLocation').removeClass("blued");
                    $('#htxLocation').addClass("blued");
//                        if($('#htxLocation').find("span").length<=0){
////                            $('.addresses a').find("span").slideUp( "slow", function() {
////                                $(this).remove();
////                            });
//                            $('<span></span>').prependTo(this).hide().slideDown();
//                        }
                    });
                google.maps.event.addDomListener(document.getElementById("clLocation"), "click", function(ev) {
                    map.panTo({lat: markers[1][1], lng: markers[1][2]});
//                    infoWindow.open(map, markers);
                    google.maps.event.trigger(gmarkers[1],'click');
                    $('#htxLocation').removeClass("blued");
                    $('#clLocation').addClass("blued");
//                    if($('#clLocation').find("span").length<=0){
////                        $('.addresses a').find("span").slideUp( "slow", function() {
////                            $(this).remove();
////                        });
//                        $('<span></span>').prependTo(this).hide().slideDown();
//                    }
                });
                    
                $( "#clLocation" ).click(function() {
console.dir(gmarkers);
                    //Get the data key variable from the link
                    //var key = $(this).data("key");

                    //Call the trigger event for the map market from the gmarkers array 
                    google.maps.event.trigger(gmarkers[1],'click');
                });
                
                map.mapTypes.set('map_style', styledMap);
                map.setMapTypeId('map_style');
                //var marker2 = new google.maps.Marker({ position: new google.maps.LatLng(51.5262405, -0.074549), map: map, title: 'my 2nd title'});
                
            }
        </script>
    
        <div class="slide7">
            <p>Consulting physicians</p>
            <a href="/wp-content/uploads/2015/01/Consult_Request_MIBS.pdf" target="_blank" id="referlink">Refer a Patient</a>
            <div id="dialog" title="Refer a Patient" style="display:none;">
                <h3>Patient Referrals</h3><p>Referring physicians, please download and complete the below form</p><a href="/wp-content/uploads/2015/01/Consult_Request_MIBS.pdf" target="_blank">Patient Referral Form</a><hr /><p>Please fax completed forms to: (713) 664-4488</p>
            </div>
            <div class="footer">
                <p>&copy; <?php echo date("Y");?> Minimally Invasive Brain &amp; Spine</p>
            </div>
        </div>
        
    </div>
    <a href="#contact" id="schedBtn" class="isOnTop"><span>Schedule a consultation</span></a>
</div></div>

    </div>
    
<?php wp_footer(); ?>
</body>
</html>
