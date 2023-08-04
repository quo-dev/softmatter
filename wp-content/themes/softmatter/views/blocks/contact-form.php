<?php
$img = get_template_directory_uri().'/assets/images';
$title = get_field('title');
$content = get_field('content');
$background_image = get_field('background_image');
$background_color = get_field('background_color') ?: 'dush';
$shortcode_form = get_field('shortcode_form');
?>

<section class="tpl-block text-media-block image bg-<?php echo $background_color; ?> contact-block">
    <?php if ($background_image): ?>
    <div class="background">
        <div class="image">
            <img src="<?php echo $background_image; ?>" alt="Industry Focused Innovation">
        </div>
    </div>
    <?php endif; ?>
    <div class="container">
        <div class="row g-0 align-items-stretch">
            <!-- Option: Image -->
            <div class="col-lg-6 content-col">
                <div class="content-box" ><!-- Option: .text-white -->
                    <h1 class="title wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10"><?php echo $title; ?></h1>
                    <div class="content wow fadeInUpBig" data-wow-duration="1s" data-wow-offset="10" >
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 form-col d-flex align-items-center"><!-- Option: .full-height (when the content is too long) -->
                <?php echo $shortcode_form; ?>
            </div>
        </div>
    </div>
</section>