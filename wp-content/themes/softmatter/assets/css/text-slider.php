<?php
$img = get_template_directory_uri().'/assets/images';
$title = get_field('title');
$items = get_field('items');
$background_image = get_field('background_image');
$background_color = get_field('background_color') ? get_field('background_color') : 'dush';
?>
<!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
<section class="tpl-block our-stories bg-<?php echo $background_color; ?>">
    <div class="container-fluid g-0">
        <div class="row g-0">
          <div class="col-lg-6">
            <div class="our-stories__left" >
              <div class="sub-title wow fadeInDown"><?php echo $title ?></div>
              <ul class="nav story-nav flex-column wow fadeInUp">
                <?php

                foreach ($items as $key => $item) {

                  if(!$key){
                    echo '<li class="current" data-slide="'.++$key.'">';
                  }else{
                    echo '<li class="" data-slide="'.++$key.'">';
                  }
                  echo '<a href="">'.$item['controller'].'</a></li>';
                }
                ?>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-items-center">
            <div class="our-stories__right story">

                <?php foreach ($items as $item) : ?>

                <div class="story-item" style="background-image: url('<?php echo $item['background_image'];?>')">
                    <div>
                        <?php if ($item['title']): ?>
                        <div class="story-item__text animated-item wow fadeInRightBig" data-wow-duration="0.2s" data-wow-offset="10">
                            <?php echo $item['title']; ?>
                        </div>
                        <?php endif; ?>
                        <?php if ($item['sub_title']): ?>
                        <div class="story-item__author animated-item wow fadeInRightBig" data-wow-duration="0.4s" data-wow-offset="10">
                            <?php echo $item['sub_title']; ?>
                        </div>
                        <?php endif; ?>
                        <?php if ($item['content']): ?>
                        <div class="story-item__bottom animated-item wow fadeInRightBig" data-wow-duration="0.6s" data-wow-offset="10">
                            <?php echo $item['content']; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
          </div>
        </div>
</div>
</section>

