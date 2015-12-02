<?php if( have_rows('slider') ): ?>
<div id="home-slider-outer">
  <div id="home-slider-title">
    <div id="home-slider">

      <div class="sp-slides">

        <?php while( have_rows('slider') ): the_row();

          // vars
          $image = get_sub_field('image');
          $content = get_sub_field('title');
          $link = get_sub_field('link');

          ?>

        <div class="sp-slide">
          <a href="<?php echo $link; ?>" title="<?php echo $content; ?>">
            <img class="sp-image" src="<?php echo $image; ?>" alt="<?php echo $content; ?>">
            <div class="sp-caption"><?php echo $content; ?></div>
          </a>
        </div>

        <?php endwhile; ?>

      </div><!-- sp-slides -->


      <div class="sp-thumbnails">

          <?php while( have_rows('slider') ): the_row();

            // vars
            $image = get_sub_field('image');
            $content = get_sub_field('title');
            $link = get_sub_field('link');

            ?>
        <div class="sp-thumbnail">
          <div class="title"><?php echo $content; ?></div>
        </div>

        <?php endwhile; ?>

      </div>

    </div><!-- home-slider -->
  </div><!-- home-slider-title -->
</div><!-- home-slider-outer -->
<?php endif; ?>
