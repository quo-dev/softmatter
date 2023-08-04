<?php
$background_color = get_field('background_color') ? get_field('background_color') : 'dush';
$partner = get_field('partner');
$background_image = get_field('background_image');
?>
<!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
<div class="tpl-block partner-block bg-<?php echo $background_color ?> ">
  <div class="bg-image">
    <img class="bg-image-img" src="<?php echo $background_image?>" >
  </div>
  <div class="container">
    <div class="row g-0">
      <div class="col-lg-6 mb-5 mb-lg-0 left">
        <div class="d-flex flex-column f-height">
          <div class="flex-grow-1 wow fadeInDown" data-wow-duration="1.6s" data-wow-offset="10">
            <div class="partner-info">
              <?php  
              foreach ($partner as $key => $item) {
                ?>
                <div class="partner-info__item <?php if(!$key) echo 'active' ?>" data-item="<?php echo ++$key ?>">
                <?php
                if($item['sub_title']) echo '<div class="sub-title f-16 text-uppercase">'.$item['sub_title'].'</div>';
                if($item['title']) echo '<h3>'.$item['title'].'</h3>';
                if($item['content']) echo '<div class="partner-block__text">'.$item['content'].'</div>';
                ?>
                </div>
                <?php
              }
              ?>
            </div>
          </div>
          <!--logo in the bottom left-->
          <ul class="nav partner-nav align-items-center justify-content-between wow fadeInUp" data-wow-duration="1.6s"  data-wow-offset="10">
            <?php  
              foreach ($partner as $key => $item) {
                ?>
                <li class="<?php if(!$key) echo 'active' ?>" data-slide="<?php echo ++$key ?>">
                  <a href="">
                    <img src="<?php echo $item['logo'] ?>" alt="" />
                  </a>
                </li>
                <?php
              }
              ?>
          </ul>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="partners wow fadeInDown" data-wow-duration="1.6s"  data-wow-offset="500">
          <?php  
            foreach ($partner as $key => $item) {
              ?>
              <div class="partners-item">
                <div class="partners-item__text">
                  <?php echo $item['quote'] ?>
                </div>
                <div class="partners-item__info">
                  <div class="author"><?php echo $item['author'] ?></div>
                  <div class="position"><?php echo $item['position'] ?></div>
                </div>
              </div>
              <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Logo in the right top-->
  <ul class="partner-nav-top nav">
    <?php  
      foreach ($partner as $key => $item) {
        ?>
        <li class="<?php if(!$key) echo 'active' ?>" data-logo="<?php echo ++$key ?>">
          <a href="">
            <img src="<?php echo $item['logo'] ?>" alt="" />
          </a>
        </li>
        <?php
      }
    ?>
  </ul>
</div>

