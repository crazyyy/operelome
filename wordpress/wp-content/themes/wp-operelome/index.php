<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">

  <div class="short-wrapper">
    <h2 class="search-result-title"><?php _e( 'Latest Posts', 'wpeasy' ); ?></h2>
    <?php get_template_part('loop'); ?>
  </div><!-- short-wrapper -->

  <?php get_template_part('pagination'); ?>

</div><!-- content -->
<div class="clear"></div>
<?php get_footer(); ?>
