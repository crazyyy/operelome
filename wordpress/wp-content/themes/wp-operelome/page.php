<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
  <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="page-content formatted">
      <?php the_content(); ?>
    </div><!-- page-content formatted -->

  </div>

<div class="clear"></div>
<?php get_footer(); ?>


