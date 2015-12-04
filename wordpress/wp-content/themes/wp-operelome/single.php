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

        <div class="info">
          <div class="info-left">
            <i class="icon icon-print"></i> <a class="link-print" href="#">Распечатать статью</a>
            <i class="icon icon-star"></i> <a class="link-fav" href="#">В закладки</a>
          </div>
          <div class="info-right">
            <script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
            <script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
            <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir" data-counter=""></div>
          </div>
        </div>

      </div><!-- block-author -->

      <?php comments_template(); ?>

      <?php get_template_part('include-related'); ?>

  </div>

<div class="clear"></div>
<?php get_footer(); ?>


