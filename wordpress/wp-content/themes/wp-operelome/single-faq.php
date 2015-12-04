<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
  <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <h1 class="page-title"><?php the_title(); ?></h1>

    <div class="page-content formatted">
      <div class="block-question">
        <div class="title">
          <strong class="btn-rounded btn-rounded-orange"><?php the_field('name'); ?> спрашивает</strong>
        </div>
        <div class="text">
          <?php the_field('question'); ?>
        </div>
      </div>
      <div class="block-answer">
        <div class="left">
          <div class="img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/default.png" alt="">
          </div>
          <p></p>
        </div>
        <div class="right">
          <div class="title">
            <strong class="btn-rounded">Ответ врача</strong>
          </div>
          <div class="text">
            <div class="block1">
              <div class="block1-inner">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
          <p></p>
        </div>
      </div>
    </div>

    <div class="questions-list-latest-title">Другие вопросы посетителей</div>

      <ul class="questions-list">
        <?php query_posts( array( 'post_type' => faq, 'showposts' => 10 ) ); ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="date"><i class="icon icon-date"></i> <?php the_time('j F Y'); ?></div>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
          <?php endwhile; ?>
        <?php wp_reset_query(); ?>
      </ul>

  </div>

</div>
<div class="clear"></div>
<?php get_footer(); ?>
