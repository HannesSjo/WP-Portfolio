<h2 class="h2skills"><b>Previous Projects</b></h2>

<div class="row">


<?php if(have_posts()) : ?>
  <?php while(have_posts()) : the_post(); ?>
  <div class="BgBild col-md-6">
    <div class="thumbnail">
      <?php if(has_post_thumbnail()) : ?>
      <div class="post-thumb">
        <?php the_post_thumbnail(); ?>
      </div>
      <?php endif; ?>
        <div class="caption">
          <h2 class="RubBild"><?php the_title(); ?></h2>
          <p class="ImgTxt">
            <?php the_content(); ?></p>
          <a target="_blank" href="<?php the_field("button_link"); ?>"><button class="btn btn-primary BtnText"><?php the_field("button_text"); ?></button><a>
        </div>
    </div>
  </div>

<?php endwhile; ?>
<?php else : ?>
    <p><?php __('No Posts Found') ?></p>
  <?php endif; ?>

</div>
