<div class="container"> 
<h3 class="bump-top-sm uppercase">Featured Recipe</h3>
  <div class="ui segment bump-top-sm">
    <div class="flexslider">
     <ul class="slides">

      <?php
            //WordPress loop for custom post type
      $my_query = new WP_Query('post_type=recipe&posts_per_page=4');
      while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <li>

        <div class="row">

          <div class="col-md-8">

            <a href="<?php the_permalink(); ?>">
              <?php
              if ( has_post_thumbnail() ) { 
                the_post_thumbnail('large', 'nopin="nopin"', array('class' => 'img-responsive'));
              }  
              ?>
            </a>

          </div>
          <div class="col-md-4 ">
            <div class="nudge-all-md featured-slide">
              <h3 class="lg-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p class="sm-text"><?php the_advanced_excerpt('length=30&length_type=words&no_custom=1&ellipsis=%26hellip;&exclude_tags=img,p,strong'); ?></p>
              <h4 class="widget-title nobottom xxs-text bump-top-xl">Categories</h4>
              <?php the_category($post_id); ?>
            </div>
          </div>

        </div>

      </li>
    <?php endwhile;  wp_reset_query(); ?>

  </ul>

</div>

</div>
</div>

