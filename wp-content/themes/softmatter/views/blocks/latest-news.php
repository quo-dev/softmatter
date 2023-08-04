<?php
$title = get_field('title');
$items = get_field('items');
$background_color = get_field('background_color') ? get_field('background_color') : 'white';
?>
<!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
<section class="latest-block tpl-block bg-<?php echo $background_color ?>">
  <div class="container">
    <h2 class="h3 text-center wow fadeInUpBig" data-wow-duration="1.8s"  data-wow-offset="10"><?php echo $title ?></h2>
    <div class="row">
      <?php
      $duration = 1.6;
      foreach ($items as $item) {
        $duration += 0.2;
        ?>
        <div class="col-md-4 wow fadeInUpBig" data-wow-duration="<?php echo $duration ?>s" data-wow-offset="10">
          <div class="article">
            <a href="<?php echo $item['link'] ?>" class="article__image image-zoomin-effect">
              <!-- image size ratio 399x252 19 : 12-->
              <img src="<?php echo $item['image'] ?>" alt="" />
            </a>
            <div class="article__body">
              <h3 class="article__title mb-4"><?php echo $item['category'] ?></h3>
              <div class="article__text">
                <?php echo $item['title'] ?>
              </div>
              <a href="<?php echo $item['link'] ?>" class="more">Read more ></a>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</section>


