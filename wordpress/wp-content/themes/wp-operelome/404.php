<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
  <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="page-title"><?php _e( 'Page not found', 'wpeasy' ); ?></h1>
    <div class="page-content formatted">
      <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
    </div><!-- page-content formatted -->

  </div>

<div class="clear"></div>
<?php get_footer(); ?>


