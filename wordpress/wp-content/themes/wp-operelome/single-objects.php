<?php get_header(); ?>


  <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
  <h1 class="page-title"><?php the_title(); ?></h1>


  <div id="map-travmpunkts-wrapper">
    <div id="map-travmpunkts">
<?php

$location = get_field('maps');

if( !empty($location) ):
?>
<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
<?php endif; ?>
    </div><!-- map-travmpunkts -->

  </div><!-- map-travmpunkts-wrapper -->
<?php get_sidebar(); ?>

<div id="content">

  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="single-travmpunkt">
      <?php if(get_field('adress')) { echo '<div class="address"><strong>Адрес:</strong> ' . get_field('adress') . '</div>'; } ?>
      <?php if(get_field('phone')) { echo '<div class="phone"><strong>Телефон:</strong> ' . get_field('phone') . '</div>'; } ?>
      <?php if(get_field('worktime')) { echo '<div class="hours"><strong>Время работы:</strong> ' . get_field('worktime') . '</div>'; } ?>
    </div><!-- travmpunkt -->
    <div class="page-content formatted">
      <?php the_content(); ?>
    </div><!-- page-content formatted -->

  </div>

  <?php get_template_part('include-mapsscript'); ?>

<div class="clear"></div>
<?php get_footer(); ?>


