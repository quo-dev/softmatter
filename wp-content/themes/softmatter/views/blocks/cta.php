<?php
$background_color = get_field('background_color') ? get_field('background_color') : 'white';
$title = get_field('title');
$content = get_field('content');
$button = get_field('button');
?>
<!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
<section class="cta-block tpl-block bg-<?php echo $background_color ?>">
  <div class="container">
    <div class="d-sm-flex justify-content-between align-items-end">
      <div class="cta-block__left mb-5 mb-sm-0 wow fadeInUp"  data-wow-offset="10">
        <h3><?php echo $title ?></h3>
        <?php echo $content ?>
      </div>
      <div class="cta-block__right" data-wow-offset="10">
        <?php the_link($button, 'btn btn-light') ?>
      </div>
    </div>
  </div>
</section>


