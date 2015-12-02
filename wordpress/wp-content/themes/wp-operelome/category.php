<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
  <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

  <div class="category-description formatted">
    <?php echo category_description(); ?>
  </div>

  <div class="short-wrapper">
    <?php get_template_part('loop'); ?>
  </div><!-- short-wrapper -->

  <?php get_template_part('pagination'); ?>

</div><!-- content -->
<div class="clear"></div>
<?php get_footer(); ?>
