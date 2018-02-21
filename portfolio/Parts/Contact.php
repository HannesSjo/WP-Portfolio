<h2 class="h2skills"><b>Contact Me!</b></h2>

  <?php echo do_shortcode('[contact-form-7 id="51" title="Kontaktformulär 1"]'); ?>

<div class="Social">
  <?php $loop = new WP_Query( array( 'post_type' => 'contact_icon', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
  <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
<a href="<?php the_field("contact_link");?>" target="_blank" class=" hover fa <?php the_field("contact_icon");?>" aria-hidden="true"></a>
<?php endwhile; wp_reset_query(); ?>
</div>
