<div id="sidebar">
  <?php if ( is_active_sidebar('widgetarea1') ) : ?>
    <?php dynamic_sidebar( 'widgetarea1' ); ?>
  <?php else : ?>

    <div class="sitem">
      <form class="search-form" method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
        <div class="search-right">
          <input class="search-button" type="submit" name="" value="Поиск">
        </div>
        <div class="search-left">
          <input class="search-text" type="text" name="s" value="" placeholder="Введите запрос..." required="required">
        </div>
      </form>
    </div><!-- sitem -->

    <div class="sitem">

      <a href="<?php echo home_url(); ?>/zadat-vopros-vrachu.htm" class="bordered-button bordered-button-doctor">
        <span>
          <strong>Задать вопрос
            <br> травматологу</strong>
        </span>
      </a>

      <a href="<?php echo home_url(); ?>/poisk-travmpunkta.htm" class="bordered-button bordered-button-map">
        <span>
          <strong>Поиск
            <br> травмпунктов</strong>
        </span>
      </a>
    </div>

    <div class="sitem">

      <div class="stitle">Вопросы врачу-травматологу</div>
      <div class="block1">
        <div class="block1-inner block1-inner-small">

          <ul class="questions-list-small">

            <?php query_posts( array( 'post_type' => faq, 'showposts' => 6 ) ); ?>
              <?php while ( have_posts() ) : the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile; ?>
            <?php wp_reset_query(); ?>

          </ul>

          <div class="text-right" style="margin-top: 10px;">
            <a class="btn-filled btn-filled-small" href="<?php echo home_url(); ?>/faq" title="">Все вопросы</a>
          </div>

        </div>
      </div>
    </div>

    <div class="spongebob spongebob-sidebar">

    </div>

  <?php endif; ?>
</div><!-- sidebar -->
