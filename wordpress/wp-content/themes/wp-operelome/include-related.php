<div class="related-title">Похожие новости</div>
<div class="related">
  <div class="short-horiz-wrapper">

  <?php $categories = get_the_category();
    foreach ($categories as $category) {
      $cat = $category->cat_ID;
      $args=array(
        'cat' => $cat,
        'order' =>DESC,
        'post__not_in' => array($post->ID),
        'posts_per_page'=>3,
      );
    $my_query = null;
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
      $i = 0; while ($my_query->have_posts() && $i < 3) : $my_query->the_post(); ?>


    <div class="short-horiz" id="short-horiz-2493">
      <div class="img thumb-related-img">
        <div class="thumb thumb-small thumb-related">
          <a rel="nofollow" class="feature-img" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php if ( has_post_thumbnail()) :
              the_post_thumbnail('medium');
            else: ?>
              <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
          </a><!-- /post thumbnail -->
        </div>
      </div>
      <div class="title"><a href="<?php the_permalink(); ?>" title="Перелом таранной кости"><?php the_title(); ?></a></div>
    </div>



  <?php  $i++; endwhile; }
    }
    wp_reset_query();
  ?>

  </div><!-- short-horiz-wrapper -->
</div><!-- related -->
