<?php get_header(); ?>

<?php get_sidebar(); ?>
  
  <div class="mid_container">

    <?php
     global $post;
     $myposts = get_posts('numberposts=1&category_name=Featured Big');
     foreach($myposts as $post) :
       setup_postdata($post);
     ?>
    
    <div class="featured_box_first">
      <h3 class="bottom_line_title"><a href="<?php the_permalink(); ?>"><?php echo substr(get_the_title(),0,60); ?><?php if(strlen(get_the_title() > 60)) { ?>..<?php } ?></a></h3>
      <?php
      if ( has_post_thumbnail() ) {
        ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-big'); ?></a> <?php
      } else {
        ?> <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" /></a> <?php
      }
      ?>
    </div>
    
    <?php endforeach; ?>
  
  </div><!--//mid_container-->
  
  
  <div class="right_container">
  
    <div class="medium_box">
    
      <?php
       global $post;
       $myposts = get_posts('numberposts=1&category_name=Featured Medium');
       foreach($myposts as $post) :
         setup_postdata($post);
       ?>
      
      <h3 class="bottom_line_title"><a href="<?php the_permalink(); ?>"><?php echo substr(get_the_title(),0,60); ?><?php if(strlen(get_the_title() > 60)) { ?>..<?php } ?></a></h3>
      <?php
      if ( has_post_thumbnail() ) {
        ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-medium'); ?></a> <?php
      } else {
        ?> <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" /></a> <?php
      }
      ?>
    
      <?php endforeach; ?>
    
    </div><!--//medium_box-->
    
    
    <?php
     global $post;
     $myposts = get_posts('numberposts=7&category_name=Featured Small');
     foreach($myposts as $post) :
       setup_postdata($post);
     ?>
    
      <div class="small_box">
      <h3 class="bottom_line_title"><a href="<?php the_permalink(); ?>"><?php echo substr(get_the_title(),0,20); ?><?php if(strlen(get_the_title() > 20)) { ?>..<?php } ?></a></h3>
      <?php
      if ( has_post_thumbnail() ) {
        ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-small'); ?></a> <?php
      } else {
        ?> <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" /></a> <?php
      }
      ?>
      </div><!--//small_box-->
  
    <?php endforeach; ?>
    
  </div><!--//right_container-->
  
<?php get_footer(); ?>