<?php
$title = wrap_br(get_field('title'));
$content = get_field('content');
$desktop_image = get_field('desktop_image');
$mobile_image = get_field('mobile_image') ? get_field('mobile_image') : $desktop_image;
$background_video = get_field('background_video');
$layout = get_field('layout');
$text_background = get_field('text_background');
$full_screen = get_field('full_screen');
$overlay = get_field('overlay');
$class_hero = '';
if ($layout == 'haft-width-image' && empty($background_video)) {
    $class_hero = 'two-cols ' . 'bg-'.$text_background;
}
if ($layout == 'haft-width-image' && $desktop_image) {
    $class_hero = $class_hero . ' hasImage';
}
?>
<!-- 1 : Hero
    Options :
        1. Background : image / video
        2. Type: full screen / two cols
            2.1: Full screen
            2.2: Two cols : add class '.two-cols'
                - Background type: bg-dush / bg-salmon / bg-chalk
-->
<style>
    .hero__item:before{
        content: '';
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        transition: opacity 0.5s ease 250ms;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url(<?php echo aq_resize($desktop_image, 20, 11, true, true, true); ?>);
    }
    .hero__right-media:before{
        content: '';
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        transition: opacity 0.5s ease 250ms;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url(<?php echo aq_resize($desktop_image, 20, 11, true, true, true); ?>);
    }
    @media screen and (max-width: 767px){
        .hero__item:before{
            background-image: url(<?php echo aq_resize($mobile_image, 20, 11, true, true, true); ?>);
        }
        .hero__right-media:before{
            background-image: url(<?php echo aq_resize($mobile_image, 20, 11, true, true, true); ?>);
        }
    }
</style>
<section class="hero <?php echo $class_hero; ?> <?php echo $full_screen ? '' : 'h-80vh'; ?>">
    <div class="hero__item <?php if ($overlay) echo 'overlay'; ?>">
        <div class="hero__media wow fadeIn">
            <!-- image for desktop-->
            <img src="<?php echo $desktop_image; ?>" class="d-none d-sm-block"/>
            <!-- image for mobile-->
            <img src="<?php echo $mobile_image; ?>" class="d-block d-sm-none"/>
            <!-- Background Video For Desktop and Mobile is show image -->
            <?php if($background_video): ?>
            <video class="video-cover" autoplay="" muted="" loop="" playsinline="">
                <source src="<?php echo $background_video ?>">
            </video>
            <?php endif; ?>
        </div>
        <div class="d-flex text-right-image">
            <div class="container hero__container">
                <div class="hero__text">
                    <h1 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-offset="10"><?php echo $title; ?></h1>
                    <div class="wow fadeInUp" data-wow-duration="1s" data-wow-offset="10">
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
            <div class="hero__right-media wow fadeInRightBig">
                <!-- image for desktop-->
                <img src="<?php echo $desktop_image ?>" class="d-none d-sm-block fadeIn"/>
                <!-- image for mobile-->
                <img src="<?php echo $mobile_image ?>" class="d-block d-sm-none fadeIn"/>
            </div>
        </div>
    </div>
</section>
