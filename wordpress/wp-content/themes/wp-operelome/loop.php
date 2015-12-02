<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class('short'); ?>>
    <div class="short-inner">
      <div class="img">
        <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail()) :
            the_post_thumbnail('medium');
          else: ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
          <span><?php the_title(); ?></span>
        </a><!-- /post thumbnail -->
      </div>
      <div class="text"><?php wpeExcerpt('wpeExcerpt20'); ?></div>
    </div>
  </div>
  <?php endwhile; else: ?>
  <div>
    <h2 class="title"><?php _e( 'Sorry, nothing to display.', 'wpeasy' ); ?></h2>
  </div><!-- /article -->
<?php endif; ?>
