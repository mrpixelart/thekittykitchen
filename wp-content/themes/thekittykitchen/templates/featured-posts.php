<div class="container"> 
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
     <div class="flexslider">
      <ul class="slides">
        <?php
      //WordPress loop for custom post type
        $my_query = new WP_Query('post_type=recipe&posts_per_page=');
        while ($my_query->have_posts()) : $my_query->the_post(); ?>
        <li class="">
          <div class="featured-post-img">
            <a href="<?php the_permalink(); ?>">
              <?php
              if ( has_post_thumbnail() ) { 
                the_post_thumbnail('large', array('class' => 'img-responsive'));
              }  
              ?>
            </a>
          </div>

          <h3 class="sm-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="xxs-text"><?php the_advanced_excerpt('length=30&length_type=words&no_custom=1&ellipsis=%26hellip;&exclude_tags=img,p,strong'); ?></p>
          <h4 class="widget-title nobottom">Tags</h4>
          <?php wp_tag_cloud('smallest=10&largest=10&number=10&orderby=name&format=flat'); ?>
        </li>


      <?php endwhile;  wp_reset_query(); ?>
    </ul>
  </div>
</div>
</div>
</div>