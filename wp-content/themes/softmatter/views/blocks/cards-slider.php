<?php
$sub_title = get_field('sub_title');
$title = get_field('title');
$content = get_field('content');
$button = get_field('button');
$cards = get_field('cards');
$background_color = get_field('background_color') ? get_field('background_color') : 'dush';
?>
<section class="content-slider bg-<?php echo $background_color ?> tpl-block">
  <div class="d-lg-flex">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-sm-6 content-slider__left">
          <div class="text wow fadeInUpBig" data-wow-duration="2s" data-wow-offset="10">
            <div class="sub-title"><?php echo $sub_title ?></div>
            <h2 class="title h3"><?php echo $title ?></h2>
            <div class="paragraph"><?php echo $content ?></div>
            <?php the_link($button, 'btn btn-light') ?>
          </div>
        </div>
      </div>
    </div>
    <div class="slider-container ">
      <div class="slider">
        <?php
        $duration = 2.1;
        foreach ($cards as $card) {
          $duration += 0.2;
          ?>
          <div class="slider-item wow fadeInUpBig" data-wow-duration="<?php echo $duration ?>s" data-wow-offset="10">
            <div class="slider__image image-zoomin-effect">
              <img src="<?php echo $card['image'] ?>" alt=""/>
            </div>
            <div class="slider__body">
              <h3 class="slider__title"><?php echo $card['title'] ?></h3>
              <div class="slider__text"><?php echo $card['content'] ?></div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </div>

  <div class="container container-navigation d-none d-sm-flex justify-content-end position-relative">
    <!-- navigation for slider-->
    <ul class="slick-dots" >
      <?php
      foreach ($cards as $key => $card) {
        if(!$key){
          echo '<li class="slick-active" data-slide="'.++$key.'">';
        }else{
          echo '<li data-slide="'.++$key.'">';
        }
        echo '<button type="button" role="tab" >'.++$key.'</button></li>';
      }
      ?>
    </ul>

    <!--Show this blog when have more 3 item-->
    <?php
    if(count($cards) > 3){
      ?>
      <div class="d-inline-flex position-relative ">
        <button class="slick-prev slick-arrow position-static"></button>
        <button class="slick-next slick-arrow position-static"></button>
      </div>
      <?php
    }
    ?>
  </div>
</section>


