<?php get_header(); ?>

  <h1 class="page-title">Поиск ближайшего травмпункта</h1>
  <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

  <div class="page-content formatted">
    <?php echo category_description(); ?>
  </div><!-- page-content formatted -->

  <div id="map-travmpunkts-wrapper">
    <div id="map-travmpunkts-form">

      <div class="row">
        <div class="col col-6">

          <select id="map-travmpunkts-select">
            <option value="">- Выберите город -</option>
            <option>Москва</option>
            <option>Санкт-Петербург</option>
          </select>

        </div>
        <div class="col col-18">
          <input id="map-travmpunkts-address" type="text" value="" placeholder="Введите свой адрес">
          <div id="map-travmpunkts-address-results"></div>
        </div>
        <div class="clear"></div>
      </div>
    </div><!-- map-travmpunkts-form -->

    <div id="map-travmpunkts">

      <?php
        $args = array(
               'post_type' => 'objects',
               'posts_per_page' => 10,
               'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
               );
        query_posts($args);
      ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php $location = get_field('maps'); ?>

        <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
          <h4><?php the_title(); ?></h4>
          <p class="address"><?php get_field('adress'); ?></p>
        </div>

      <?php endwhile; endif; ?>

      <?php wp_reset_query(); ?>

    </div><!-- map-travmpunkts -->

  </div><!-- map-travmpunkts-wrapper -->

  <?php get_sidebar(); ?>

  <div id="content">

    <div class="content-inner">
      <div class="page-wrapper page type-page status-publish hentry">
        <div class="page-content formatted">
          <h2>Новые травмпункты</h2>

          <?php
            $args = array(
                   'post_type' => 'objects',
                   'posts_per_page' => 10,
                   'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                   );
            query_posts($args);
          ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="travmpunkt">
            <div class="title"><?php the_title(); ?></div>
            <?php if(get_field('adress')) { echo '<div class="address"><strong>Адрес:</strong> ' . get_field('adress') . '</div>'; } ?>
            <?php if(get_field('phone')) { echo '<div class="phone"><strong>Телефон:</strong> ' . get_field('phone') . '</div>'; } ?>
            <?php if(get_field('worktime')) { echo '<div class="hours"><strong>Время работы:</strong> ' . get_field('worktime') . '</div>'; } ?>
          </div><!-- travmpunkt -->

          <?php endwhile; endif; ?>
          <?php get_template_part('pagination'); ?>
          <?php wp_reset_query(); ?>


        </div><!-- page-content formatted -->
      </div><!-- page-wrapper page type-page status-publish hentry -->

    </div><!-- content-inner -->
  </div><!-- content -->

  <?php get_template_part('include-mapsscript'); ?>

<div class="clear"></div>
<?php get_footer(); ?>
