<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

    <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->
    <!-- meta -->

    <!-- icons -->
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

    <!--[if lt IE 9]>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js"></script>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
    <![endif]-->
    <!-- css + javascript -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


  <div id="sb-site">
    <div id="container-main">
      <div id="container-inner">
        <div id="nav-top">
          <?php wpeHeadNav(); ?>
        </div>
        <div id="header">
          <div class="centered">
            <div id="logo">
              <?php if ( is_front_page() && is_home() ){ } else { ?>
                <a href="<?php echo home_url(); ?>">
                  <?php  } ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                  <?php if ( is_front_page() && is_home() ){
                  } else { ?>
                </a>
              <?php } ?>
            </div><!-- /logo -->
            <div id="header-right">
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/header1.jpg" alt=""></div>
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/header2.jpg" alt=""></div>
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/header3.jpg" alt=""></div>
              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/img/header4.jpg" alt=""></div>
            </div>
            <div class="clear"></div>
          </div>
        </div>
        <div id="nav">
          <?php wpeHeadNavTwo(); ?>
        </div>
        <div id="middle">
          <div class="centered">
