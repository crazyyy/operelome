<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content">
  <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="page-title"><?php the_title(); ?></h1>
      <div class="page-content formatted">
        <?php the_content(); ?>
      </div><!-- page-content formatted -->

      <div class="block-author">

        <div class="row no-mrg">
          <div class="col col-4">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 70 ); ?>
          </div>
          <div class="col col-20">
            <div class="block1">
              <div class="block1-inner">
                <div class="text1">Автор:</div>
                <div class="text2"><?php the_author_posts_link(); ?></div>
              </div>
            </div>
          </div>
          <div class="clear"></div>
        </div>

      </div><!-- block-author -->

      <?php get_template_part('include-related'); ?>

  </div>

<div class="clear"></div>
<?php get_footer(); ?>


