<?php get_header(); ?>

<?php get_sidebar(); ?>
  
  <div class="right_single">
  
  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
    <h1 class="single_title"><?php the_title(); ?></h1>
    
    <?php the_content(); ?>
    
    <?php comments_template(); ?>
    
    <?php endwhile; else: ?>
    
    <h3>Sorry, no posts matched your criteria.</h3>
  
  <?php endif; ?>
  
  </div><!--//right_single-->
  
<?php get_footer(); ?>