<?php
$title = get_field('title');
$content = get_field('content');
$background_image = get_field('background_image');
$background_image_mobile = get_field('background_image_mobile') ? get_field('background_image_mobile') : $background_image;
$content_color = get_field('content_color') ? get_field('content_color') : 'dusk';
$bottom_image = get_field('bottom_image');
?>

<section class="tpl-block full-image-block "
         style="background-image: url(<?php echo $background_image ?>)">
    <div class="full-image-block__bg-mobile"
         style="background-image: url(<?php echo $background_image_mobile ?>)"></div>
    <div class="full-image-content bg-<?php echo $content_color ?>"><!-- Color Options: bg-salmon, bg-dush, bg-mint -->
        <h3><?php echo $title ?></h3>
        <div class="full-image-content__text"><?php echo $content ?></div>
        <?php if ($bottom_image) { ?>
            <div class="certificates">
                <img src="<?php echo $bottom_image ?>" alt="Consumer Health &amp; Wellness">
            </div>
        <?php } ?>
    </div>
</section>

