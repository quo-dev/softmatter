<?php
$img = get_template_directory_uri().'/assets/images';

$layout = get_field('layout');
$items = get_field('items');
$background_color = get_field('background_color') ?: 'chalk';
$style_color = get_field('style_color') ?: 'green';
$none_hover = get_field('none_hover') ?: false;
$slider_block = get_field('slider_block') ?: false;
if ($layout == '4-cols') {
  $title = get_field('title');
?>
<section class="tpl-block block-4-cols bg-<?php echo $background_color; ?> <?php echo $style_color; ?>-style <?php echo $none_hover ? 'none-hover' : ''; ?> <?php echo $slider_block ? 'slider-block' : ''; ?>"> <!-- default: green-style/ option: pink style -->
    <div class="container wow fadeInUpBig" data-wow-offset="10">
        <h3 class="text-center"><?php echo $title; ?></h3>
        <?php if( have_rows('items') ): ?>
        <div class="row block-4-cols-slider">
            <?php
                $time_delay = 0;
                while( have_rows('items') ) : the_row();
                    $time_delay += 0.2;
                    $icon = get_sub_field('icon');
                    $icon_on_hover = get_sub_field('icon_on_hover');
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
            ?>
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-offset="10" data-wow-delay="<?php echo $time_delay;?>s" >
                <div class="card preShow card-no-effect">
                    <div class="card-body">
                        <div class="card__top d-flex align-items-center">
                            <img src="<?php echo $icon; ?>" alt="" class="card__icon">
                            <img src="<?php echo $icon_on_hover ?: $icon; ?>" alt="" class="card__icon card__icon-hover">
                        </div>
                        <div class="card__bottom">
                            <div class="card__title"><?php echo $title; ?></div>
                            <div class="card__text"><?php echo $content; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php } else { ?>
    <!--option
        1. background color class name is :  bg-chalk, bg-mint, bg-dush-
        2. style color Slider  : green-style (default) / pink-style
        -->
<?php if( have_rows('items') ):
        $title = get_field('title');
?>
<section class="tpl-block block-4-cols slider-3-cards bg-<?php echo $background_color; ?> <?php echo $style_color; ?>-style">
    <?php if ($title): ?>
    <h3 class="text-center"><?php echo $title; ?></h3>
    <?php endif; ?>
    <div class="container">
        <div class="row block-3-cols-slider wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10">
            <?php
            while( have_rows('items') ) : the_row();
                $icon = get_sub_field('icon');
                $icon_on_hover = get_sub_field('icon_on_hover');
                $title = get_sub_field('title');
                $content = get_sub_field('content');
            ?>
            <div class="col-xl-3 col-lg-6">
                <div class="card preShow card-no-effect">
                    <div class="card-body">
                        <div class="card__top d-flex align-items-center">
                            <img src="<?php echo $icon; ?>" alt="" class="card__icon">
                            <img src="<?php echo $icon_on_hover ?: $icon_on_hover; ?>" alt="" class="card__icon card__icon-hover">
                        </div>
                        <div class="card__bottom">
                            <div class="card__title"><?php echo $title; ?></div>
                            <div class="card__text"><?php echo $content; ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php } ?>