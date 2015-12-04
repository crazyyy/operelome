<?php /* Template Name: Home Page Template */ get_header(); ?>

<div class="row row-slider">
  <div class="col col-16">
    <?php get_template_part('homeslider'); ?>
  </div>
  <div class="col col-8">
    <form class="search-form" method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
      <div class="search-right">
        <input class="search-button" type="submit" name="" value="Поиск">
      </div>
      <div class="search-left">
        <input class="search-text" type="text" name="s" value="" placeholder="Введите запрос..." required="required">
      </div>
    </form>
    <a href="<?php echo home_url(); ?>/zadat-vopros-vrachu.htm" class="bordered-button bordered-button-doctor">
      <span><strong>Задать вопрос<br> травматологу</strong></span>
    </a>
    <a href="<?php echo home_url(); ?>/poisk-travmpunkta.htm" class="bordered-button bordered-button-map">
      <span><strong>Поиск<br> травмпунктов</strong></span>
    </a>
  </div>
  <div class="clear"></div>
</div>
<div class="row no-mrg row-questions">
  <div class="col col-16">
    <div class="block1 block-questions">
      <div class="block1-inner">
        <div class="title">Последние вопросы врачу-травматологу</div>
        <div class="row no-mrg">
          <div class="col col-8 text-center img">
            <img class="question" src="<?php echo get_template_directory_uri(); ?>/img/question.png" alt="">
          </div>
          <div class="col col-16">
            <ul class="questions-list">
            <?php query_posts( array( 'post_type' => faq, 'showposts' => 4 ) ); ?>
              <?php while ( have_posts() ) : the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            </ul>
          </div>
          <div class="clear"></div>
        </div>
        <div class="text-right" style="margin-top: 20px;">
          <a class="btn-filled btn-filled-small" href="<?php echo home_url(); ?>/zadat-vopros-vrachu.htm">Задать свой вопрос</a>
          <a class="btn-filled btn-filled-small" href="<?php echo home_url(); ?>/faq" title="">Все вопросы</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col col-8 vk">
    <?php get_sidebar('frontpage'); ?>
  </div>
  <div class="clear"></div>
</div>
<div class="row row-posts">

  <?php
    $firstCatId = '9';
    $catTitle = get_cat_name( $firstCatId );
    $catLink = get_category_link( $firstCatId );
  ?>

  <div class="col col-12 first-block">
    <div class="block-title">
      <?php echo $catTitle ?>
      <a class="more" href="<?php echo $catLink ?>" title="<?php echo $catTitle ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-link.png" alt=""></a>
    </div><!-- block-title -->

    <div class="short-horiz-wrapper">

      <?php query_posts("showposts=3&cat=' . $firstCatId . '"); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="short-horiz" id="short-horiz-<?php the_ID(); ?>">
        <div class="img">
          <div class="thumb thumb-small">
            <a href="<?php the_permalink(); ?>" title="Вдавленный перелом черепа">
              <?php if ( has_post_thumbnail()) :
                the_post_thumbnail('large');
              else: ?>
                <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
              <?php endif; ?>
            </a>
          </div>
        </div>
        <div class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
      </div><!-- short-horiz -->
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
    </div><!-- short-horiz-wrapper -->
  </div><!-- first-block -->

  <?php
    $secondCat = '8';
    $catTitle = get_cat_name( $secondCat );
    $catLink = get_category_link( $secondCat );
  ?>

  <div class="col col-12 last">
    <div class="block-title">
      <?php echo $catTitle ?>
      <a class="more" href="<?php echo $catLink ?>" title="<?php echo $catTitle ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-link.png" alt=""></a>
    </div>
    <div class="short-video-wrapper">

      <?php query_posts("showposts=2&cat=' . $secondCat . '"); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="short-video" id="short-horiz-<?php the_ID(); ?>">
          <div class="short-video-inner">

            <div class="img">
              <a href="<?php the_permalink(); ?>" title="Вдавленный перелом черепа">
                <?php if ( has_post_thumbnail()) :
                  the_post_thumbnail('large');
                else: ?>
                  <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?>
              </a>
            </div>

            <div class="title">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </div>

          </div><!-- short-video-inner -->
        </div><!-- short-video -->
      <?php endwhile; endif; ?>
    </div><!-- short-video-wrapper -->
  </div>

  <div class="clear"></div>
</div>
<div class="page-wrapper" id="page-<?php the_ID(); ?>">
  <h1 class="page-title"><?php the_title(); ?></h1>
  <div class="page-content formatted">
    <?php the_content(); ?>
  </div>
</div>

<?php get_footer(); ?>
