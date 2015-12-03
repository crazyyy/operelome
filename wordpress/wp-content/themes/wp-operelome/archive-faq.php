<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
  <div class="content-inner">
  <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

    <div class="page-wrapper status-publish hentry">
      <h1 class="page-title">Вопросы</h1>
      <ul class="questions-list">

      <?php
        $args = array(
               'post_type' => 'faq',
               'posts_per_page' => 10,
               'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
               );
        query_posts($args);
      ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <li>
          <div class="date">
            <i id="post-<?php the_ID(); ?>" <?php post_class('icon icon-date'); ?>></i> <?php the_time('j F Y'); ?>
          </div><!-- date -->
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>

      <?php endwhile; endif; ?>
      <?php get_template_part('pagination'); ?>
      <?php wp_reset_query(); ?>

      </ul>
    </div><!-- page-wrapper status-publish hentry -->

  </div><!-- content-inner -->
</div><!-- content -->
<div class="clear"></div>
<?php get_footer(); ?>
