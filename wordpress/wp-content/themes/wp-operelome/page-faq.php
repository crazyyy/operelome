<?php /* Template Name: FAQ Page Template */ get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
  <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="page-content formatted">
      <?php the_content(); ?>

      <div class="block1 form-specialist">
        <div class="block1-inner">
          <div class="text1">Задайте вопрос врачу</div>
          <div class="text2">и получите бесплатную консультацию онлайн</div>
          <?php echo do_shortcode('[contact-form-7 id="74" title="faq"]'); ?>
        </div>
      </div>

    </div><!-- page-content formatted -->

  </div>

<div class="clear"></div>
<?php get_footer(); ?>


