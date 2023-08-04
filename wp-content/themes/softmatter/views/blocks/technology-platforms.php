<?php
$background_color = get_field('background_color') ? get_field('background_color') : 'white';
$tabs = get_field('tab');
?>
<div class="tpl-block tab-block bg-<?php echo $background_color ?>"  >
  <div class="container">
    <ul class="nav nav-tabs  wow fadeIn"  data-wow-offset="10" role="tablist">
      <?php
      foreach ($tabs as $key => $tab) {
        ?>
        <li class="nav-item" role="presentation">
          <button class="nav-link <?php if(!$key) echo 'active'; ?>" data-bs-toggle="tab" data-bs-target="#tab-<?php echo $key ?>" data-text="<?php echo $key ?>" type="button" role="tab">
            <div class="icon">
              <img  class="tab-icon"  src="<?php echo $tab['icon'] ?>" alt="" />
              <img  class=" tab-icon tab-icon-active"  src="<?php echo $tab['active_icon'] ?>" alt="" />
            </div>
            <div  class="tab-title" ><?php echo $tab['title'] ?></div>
            <div  class="tab-des"><?php echo $tab['content'] ?></div>
            <?php if($tab['link']) the_link($tab['link'], 'tab-link'); ?>
          </button>
        </li>
        <?php
      }
      ?>
    </ul>
  </div>

  <!--tab-des for mobile-->
  <div class="d-lg-none tab-sub-mobile-container container text-center">
    <?php
    foreach ($tabs as $key => $tab) {
      ?>
      <div class="<?php if(!$key) echo 'current'; ?> tab-sub-mobile" data-slide="<?php echo $key ?>" >
        <?php echo $tab['content'] ?>
        <?php if($tab['link']) the_link($tab['link'], 'tab-link'); ?>
      </div>
      <?php
    }
    ?>
  </div>


  <div class="tab-content" >
    <?php
    foreach ($tabs as $key => $tab) {
      ?>
      <div class="tab-pane fade <?php if(!$key) echo 'show active' ?>" id="tab-<?php echo $key ?>" role="tabpanel" >
        <div class="tab-slider">
          <?php
          foreach ($tab['items'] as $key => $item) {
            ?>
            <div class="tab-slider-item">
              <div class="tab-slider__image image image-zoomin-effect">
                <img src="<?php echo $item['image'] ?>" alt="" />
              </div>
              <div class="tab-slider__body">
                <div class="tab-slider__title h4"><?php echo $item['title'] ?></div>
                <div class="tab-slider__text"><?php echo $item['content'] ?></div>
                <?php if($item['button']) the_link($item['button'], 'tab-slider__more btn btn-light'); ?>
              </div>
            </div>
            <?php
          }
          ?>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
</div>
