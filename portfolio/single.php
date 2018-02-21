<?php get_header(); ?>
<div class="container">
  <div class="singlebg">
  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <div class="thumbnail">
        <?php if(has_post_thumbnail()) : ?>
        <div class="post-thumb">
          <?php the_post_thumbnail(); ?>
        </div>
        <?php endif; ?>
          <div class="caption">
            <h2 class="RubBild"><?php the_title(); ?></h2>
            <p class="blog-post-meta"><?php the_time('F j, Y g:i'); ?> by
              <?php the_author(); ?></a>
            </p>
            <p class="ImgTxt">
              <?php the_content(); ?></p>
          </div>
      </div>

    <div class="">
      <?php comments_template(); ?>
    </div>

  <?php endwhile; ?>
  <?php else : ?>
      <p><?php __('No Posts Found') ?></p>
    <?php endif; ?>

</div>
</div>
<?php get_footer(); ?>
