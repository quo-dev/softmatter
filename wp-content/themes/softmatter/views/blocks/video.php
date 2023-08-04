<?php
$sub_title = get_field('sub_title');
$title = get_field('title');
$content = get_field('content');
$video_iframe = get_field('video_iframe');
$background_color = get_field('background_color') ? get_field('background_color') : 'dush';
?>

 <!-- VIDEO BLOCK -->
 <section class="tpl-block video-block-yt bg-<?php echo $background_color ?>">
        <div class="container">
          <?php if($sub_title) echo '<h3 class="sub-title wow fadeInUpBig" data-wow-duration="1.5s" data-wow-offset="10">'.$sub_title.'</h3>'; ?>
          <?php if($sub_title) echo '<h2 class="title wow fadeInUpBig" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.25s">'.$title.'</h2>'; ?>
            <div class="desc wow fadeInUpBig" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.25s">
                <?php echo $content ?>
            </div>

            <div class="ratio ratio-4x2 wow fadeInUpBig" data-wow-duration="1.5s" data-wow-offset="10" data-wow-delay="0.25s">
                <?php echo $video_iframe ?>
            </div>
        </div>
    </section>
