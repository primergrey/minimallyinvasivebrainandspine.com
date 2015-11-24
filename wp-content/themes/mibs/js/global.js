
    function updateNav(curr, nextSlideElement, options, forwardFlag){
          //curr.find("")
          //console.log(curr); 
    }
$(document).ready(function(){


    var w = $(window).width()-200;
    var h = $(window).height()-100;
    if($(window).width()<500){
        w = $(window).width()-10;
        h = $(window).height()-10;
    }
    $('html,body').animate({ scrollTop: 0 }, 'slow', function() {
        $("#globalMessage").dialog({
            resizable: false,
            modal: true,
            height: h,
            width: w,
            closeOnEscape: false,
        });
    });

    $("nav ul").append('<li class="closeBtn"><span>Close Menu</span></li>');
      
    $(".menuBtn,.closeBtn").click(function(e) {
        e.preventDefault();
        if ($('nav ul').is(":visible") ) {
          $('nav ul').stop(true,true).hide("slide", { direction: "right" }, 400);
        } else {
          $('nav ul').stop(true,true).show("slide", { direction: "right" }, 400);
        }
//        $("nav ul").slideToggle('2000', "easeInQuint", function () {
//            
//        });
    });
    
    $("nav ul a").click(function() {
        if($(".menuBtn").css("display") == "block"){
            $("nav ul").fadeOut("fast");
        }
    });
    
    
if( $('.home,.page-id-30').length ){

//    $("#philosophy").cycle({
//          timeout:0,
//          next:$(".fp-next"),
//          prev:$(".fp-prev"),
//          fx: 'scrollHorz',
////          height: '1',
////          containerResize: true,
////          slideResize: true,
//          fit: 1
////          after: updateNav
////          prevNextEvent:'click.cycle',
//          
//    });
    $('nav ul').onePageNav({
        currentClass: 'current',
        changeHash: false,
        scrollSpeed: 750,
        scrollThreshold: 0.5,
        filter: '',
        easing: 'swing',
        begin: function() {
            //I get fired when the animation is starting
        },
        end: function() {
            //I get fired when the animation is ending
        },
        scrollChange: function($currentListItem) {
            //I get fired when you enter a section and I pass the list item of the section
        }
    });
    
    $('.proceBtn').click(function() {
        var listToOpen = '.dataId-'+$(this).attr("data-id");
        $(listToOpen).slideToggle();
    });
 
    $('#schedBtn').click(function(e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: $(document).height() }, "slow");
  return false;
    }); 
    
    
    $('.proceList span').click(function() {
        $(this).parent().slideUp();
    });
      
//    $('.addresses a').click(function(e) {
//         e.preventDefault();
//        $('.addresses a').find("span").slideUp( "slow", function() {
//            $(this).remove();
//        });
//        //$(this).prepend( '<span></span>' );
//        $('<span></span>').prependTo($(this)).hide().slideDown();
//    });
    
    $("#referlink").click(function(e) {
        e.preventDefault();
        //console.log(event.target.href);
        $("#dialog").dialog({
//            resizable: false
//            height:140,
            modal: true
//            buttons: {
//            "Go to the form": function() {
//    //            $(this).attr("href");
//                window.open(event.target.href, '_blank');
//            },
//            Cancel: function() {
//                $( this ).dialog( "close" );
//            }
//            }
        });
    });
    
        
    
//console.log("asdfsa");
//console.log($(window).outerHeight(true)+$('.hook').outerHeight(true));
    var homeSlideHeight = $(window).height()-$('nav').outerHeight(true),
        schedBtnPos = $(window).outerHeight(true)+$('.hook').outerHeight(true)-$('#schedBtn').outerHeight(true),
        addressesPos = $('#callApp').offset().top,
        theWindowBottomPos = $(window).scrollTop()+$(window).outerHeight( true ),
        currentPos = $(window).scrollTop(),
        slideHeight = 0;

    $('#homeSlide').css("height", $(window).outerHeight( true )+"px");  
    
    if ( $(window).scrollTop() >= homeSlideHeight ) {
        $('nav').addClass("isTop");
    }else{
        $('nav').removeClass("isTop");
    }
    
//    $('#schedBtn').css({
//               'position' : 'absolute',
//               'top' : schedBtnPos+'px'
//            });
    
    if( ($(window).scrollTop()+$(window).outerHeight( true ) >= schedBtnPos) && ($(window).scrollTop()+$(window).outerHeight( true ) <= addressesPos) ){
        $('#schedBtn').addClass("isFloating");
        $('#schedBtn').css("top", "auto");
    }else{
        $('#schedBtn').css("top", addressesPos-$('#schedBtn').outerHeight( true )+23+"px");
        $('#schedBtn').removeClass("isFloating");
    }
    
    $( window ).resize(function() {

        $('#homeSlide').css("height", $(window).outerHeight( true )+"px");  

    });
      
    $(window).scroll(function() {
        homeSlideHeight = $(window).height()-$('nav').outerHeight(true);
        currentPos = $(window).scrollTop()+$(window).outerHeight( true );
        addressesPos = $('#callApp').offset().top;//+$('.addresses').outerHeight( true );//-$(window).outerHeight( true );
//        addressesPos = $('.addresses').offset();
        theWindowBottomPos = $(window).scrollTop()+$(window).outerHeight( true );
        schedBtnPos = $('.hook').offset().top+$('.hook').outerHeight(true);
        if( $('.isTop').length ){
            if ( $(window).scrollTop() < homeSlideHeight ) {
                $('nav').removeClass("isTop");
            }
        }else{
            if ( $(window).scrollTop() >= homeSlideHeight ) {
                $('nav').addClass("isTop");
            }
        }
       console.log(addressesPos);
        if( ($(window).scrollTop()+$(window).outerHeight( true ) >= schedBtnPos) && ($(window).scrollTop()+$(window).outerHeight( true ) <= addressesPos) ){
            $('#schedBtn').addClass("isFloating");
            $('#schedBtn').css("top", "auto");
        }else{
            $('#schedBtn').css("top", addressesPos-$('#schedBtn').outerHeight( true )+23+"px");
            $('#schedBtn').removeClass("isFloating");
        }
    });
    
    $( window ).on( "orientationchange", function() {
//        homeSlideHeight = $('.slide1').outerHeight(true)-$('#mainNav').height();
//        schedBtnPos = $('.slide3').offset().top-$(window).outerHeight( true );
//        $(".proceBox").each(function( index ) {
//            $(this).css('height', (($(window).outerHeight(true)-65)/3)+"px");
//            $(this).find('h3,p').css('left', $('.circleImg').width()+($(this).find('.circleImg').position().left*2)+"px");
//        });
    });
  }//enf if homepage
});