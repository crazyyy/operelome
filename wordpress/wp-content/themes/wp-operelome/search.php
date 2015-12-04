<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
  <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
  <div class="short-wrapper">
    <h2 class="search-result-title"><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>
    <?php get_template_part('loop'); ?>
  </div><!-- short-wrapper -->

  <?php get_template_part('pagination'); ?>

</div><!-- content -->
<div class="clear"></div>
<?php get_footer(); ?>
