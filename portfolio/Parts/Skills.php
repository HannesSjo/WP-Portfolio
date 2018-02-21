
<div class="Skills">

  <h2 class="h2skills"><b>Skills</b></h2>

  <div class="row">

    <div class="left col-sm-12 col-md-5">

      <?php $loop = new WP_Query( array( 'post_type' => 'skill', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
      <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="Fix">
          <div class="HtmlWrap">
            <div class="fadivcode">
              <?php the_field("skill_icon"); ?>
            </div>
          </div>
          <div class="HtmlTextWrap">
            <h2 class="TextHtmlSak">
              <b><?php the_title(); ?></b>
            </h2>
            <p class="Html"><?php the_content(); ?></p>
          </div>
        </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>

  <div class="col-md-2 col-sm-0"></div>

  <div class="Right col-sm-12 col-md-5 ">
    <?php $loop = new WP_Query( array( 'post_type' => 'languages', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
    <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
    <div class="Fix">

    <div class="HtmlWrap">

    <div class="fadivcode">
<?php the_field("language_icon");?>
  </div>
  </div>
  <div class="HtmlTextWrap">
    <h2 class="TextHtmlSak">
    <b><?php the_title(); ?></b>
  </h2>
  <p class="Html"><?php the_content(); ?></p>
</div>
</div>
<?php endwhile; wp_reset_query(); ?>
  </div>
</div>
</div>
