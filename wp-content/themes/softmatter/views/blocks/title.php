<?php
$title = get_field('title');
$small_title = get_field('small_title');
$sub_title = get_field('sub_title');
$title_color = get_field('title_color');
$sub_title_color = get_field('sub_title_color');
$content = get_field('content');
$button = get_field('button');
$button_color = get_field('button_color');
$text_align = get_field('text_align');
$background_color = get_field('background_color') ?: '';
$image = get_field('image') ?: '';
$padding = get_field('padding');
$padding_class = '';
if ($padding) {
    foreach ($padding as $item_padding) {
        $padding_class .= $item_padding . ' ';
    }
}

?>
<!-- TITLE BLOCK: CASE DEFAULT (Homepage)
    Classes in parent element:
    - Alignment: blank is center | .align-left for left
    - Background: blank is White | .bg-chalk : Yellow
-->
<!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
<section class="tpl-block title-block bg-<?php echo $background_color; if($text_align === 'left') echo ' text-left ' ?> <?php echo $padding_class; ?>">
    <div class="container">
        <?php if($image): ?>
        <div class="title-block__logo wow fadeInUpx aligncenter" data-wow-duration="1s" data-wow-offset="100" style="visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">
            <img src="<?php echo $image; ?>">
        </div>
        <?php endif; ?>
        <?php if($sub_title): ?>
            <h3 class="sub-title wow fadeInUp <?php echo $sub_title_color; ?>" data-wow-duration="1s" data-wow-offset="100"><?php echo wrap_br($sub_title); ?></h3>
        <?php endif; ?>
        <?php if($title): ?>
            <h2 class="heading-title wow fadeInUp  <?php echo $small_title ? 'heading-title-sm' : ''; ?> <?php if($title_color) echo ' text-'.$title_color; ?>" data-wow-duration="1s" data-wow-offset="100"><?php echo wrap_br($title); ?></h2>
        <?php endif; if ($content): ?>
        <div class="desc wow fadeInUp" data-wow-duration="1s" data-wow-offset="100">
            <?php echo $content; ?>
        </div>
        <?php endif;
        $button_class = $button_color === 'blue' ? 'btn btn-success wow fadeInUpBig' : 'btn btn-dark wow fadeInUp';
        the_link($button, $button_class)
        ?>
    </div>
</section>
