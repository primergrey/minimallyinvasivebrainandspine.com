<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="no">
    <title><?php bloginfo('name'); ?> <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/favicon.ico" rel="icon" type="image/x-icon" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Chivo|Vollkorn:400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
<?php if ( is_front_page() ) : ?>
    <!--link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.fullPage.css" type="text/css" /-->
<?php endif ; ?>
    <!--link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/menu_sideslide.css" type="text/css" /-->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" type="text/css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<?php if ( is_front_page() ) : ?>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.nav.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.cycle.all.js"></script>
<?php endif ; ?>
    <!--script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/classie.js"></script-->
    <!--script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/menuSlide.js"></script-->
    <!--[if lt IE 9]>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
   <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/global.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
      <nav>
          <a href="/#homeSlide" class="homeBtn"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-menu.png" alt="" style="display:none;" /></a>
        <a href="#" class="menuBtn" style="display:none;">Menu</a>
        <ul>
            <li class="homelink"><a href="/#homeSlide"><span>Home</span></a></li>
            <li><a href="/#philosophy">Philosophy</a></li>
            <li><a href="/#drmaioriello">Dr. Maioriello</a></li>
            <li><a href="/#procedures">Procedures</a></li>
            <li><a href="/testimony/">Patient Stories</a></li>
            <li class="prlink"><a href="/patient-resources/">Patient Resources</a></li>
            <li><a href="/#contact">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
