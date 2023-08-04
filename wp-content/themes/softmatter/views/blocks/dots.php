<?php
$background_image = get_field('background_image');
$style = get_field('style');
$items = get_field('items');
?>
<div class="<?php if($style === 'light') echo 'light'; ?> popover-block">
  <div class="media">
<!--    <video width="400" autoplay muted loop class="media-object">-->
<!--      <source src="assets/images/looping(1080p).mp4" >-->
<!--    </video>-->
       <img class="media-object" src="<?php echo $background_image ?>" />
  </div>
  <!-- ID should be dynamic-->
  <div class="container">
    <?php
    $duration = 1;
    foreach ($items as $key => $item) {
      $duration += 0.2;
      $style = 'top: '.$item['top_position'].'%;left:'.$item['left_position'].'%';
      ?>
      <div class="app-popover <?php echo $item['dot_size'] ?> wow bounceIn" data-wow-duration="<?php echo $duration ?>s" data-wow-offset="10" style="<?php echo $style ?>">
        <div class="app-popover-item" data-depth="<?php echo $key ?>">
          <div class="app-popover__title h3" data-depth="<?php echo $key ?>"><?php echo wrap_br($item['title']) ?></div>
          <div class="app-popover__text" ><?php echo $item['content'] ?></div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
</div>

