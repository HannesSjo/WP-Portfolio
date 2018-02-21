<?php
/*
*Template Name: Test
*/
?>
<?php $loop = new WP_Query( array( 'post_type' => 'test', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
  <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

  <?php endwhile; wp_reset_query(); ?>
