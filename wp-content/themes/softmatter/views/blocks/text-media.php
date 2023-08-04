<!-- TEXT MEDIA BLOCK: text-media-block.php
    Case options:
    1. Background Block: White | Yellow Light
    2. Image + Video Column: Left | Right;
    3. Button in content col
    4. Is Hero Banner (First block in Application page)
    5. Set full height for Image & Video when the content is too long (Application page)
 -->
<!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
<!-- CASE: IMAGE LEFT (default) -->
<?php
$sub_title = get_field('sub_title');
$title = get_field('title');
$size = get_field('size');
$content = get_field('content');
$button = get_field('button');
$bottom_text = get_field('bottom_text');
$image = get_field('image');
$logo = get_field('logo');
$image_ratio = get_field('image_ratio');
$text_alight = get_field('text_alight');
$layout = get_field('layout');
$background_image = get_field('background_image');
$background_for_the_whole_block = get_field('background_for_the_whole_block');
$text_color = get_field('text_color');
$background_color = get_field('background_color') ? get_field('background_color') : 'chalk';
$button_color = get_field('button_color') ?: 'primary';
$padding_top = get_field('padding_top');
$padding_bottom = get_field('padding_bottom');
$small_content = get_field('small_content');
$image_full = get_field('image_full');
if($button_color =='dark'){
    $btnClass = 'btn btn-dark';
}elseif($button_color =='outline-secondary'){
    $btnClass = 'btn btn-outline-secondary';
}elseif($button_color =='outline-salmon'){
    $btnClass = 'btn btn-outline-salmon';
} elseif($button_color =='green'){
    $btnClass = 'btn btn-success';
} else{
    $btnClass = 'btn btn-primary ';
}
?>

<div class="tpl-block text-media-block bg-<?php echo $background_color . ' '; if($background_image) echo ' image '; ?> <?php echo $padding_top ? 'padding-top' : ''?> <?php echo $padding_bottom ? 'padding-bottom' : ''?> <?php echo $image_full ? 'image-type' : '';?>"><!-- Option: .bg-chalk; .image | .video  -->
    <?php if($background_for_the_whole_block){ ?>
    <div class="background">
        <div class="image"><img src="<?php echo $background_image ?>" alt=""></div>
    </div>
    <?php } ?>
    <div class="container-fluid g-0">
        <div class="row g-0 <?php if($layout === 'text-image') echo 'flex-row-reverse' ?>">
            <!-- Option: Image -->
            <div class="col-lg-6 image-col <?php if(!$logo) echo 'wow' ?>  <?php if($layout === 'text-image') { echo 'fadeInRightBig'; } else  { echo 'fadeInLeftBig'; } ?> <?php if($image_ratio !== '4x3') echo 'full-height' ?>">
                <div class="image image-zoomin-effect <?php if($image_ratio === '4x3') echo 'size-4x3' ?>" <?php if (!$image_full): ?> style="background-image: url('<?php echo $image; ?>')" <?php endif; ?> ><!-- Option: Default 1x1 | .size-4x3 -->
                    <?php if ($image_full): ?>
                        <img src="<?php echo $image; ?>" alt="">
                    <?php endif; ?>
                    <?php
                    if($logo){
                        ?>
                        <span class="image-logo">
                            <img class="wow pulse" data-wow-iteration="1" data-wow-duration="0.8s" data-wow-offset="10" src="<?php echo $logo ?>" alt="">
                        </span>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <!-- Option: Video -->
            <!--        <div class="col-lg-6 video-col">-->
            <!--            <div class="video-wrap size-4x3">-->
            <!--                <video width="400" autoplay muted loop>-->
            <!--                    <source src="--><?php //echo $img ?><!--/BrandTexture.mov" type="video/mp4">-->
            <!--                </video>-->
            <!--            </div>-->
            <!--        </div>-->
            <div class="col-lg-6 content-col" <?php if(!$background_for_the_whole_block) echo 'style=\'background-image: url("'.$background_image.'")\''; ?> >
                <div class="content-box <?php if($text_alight === 'center') echo ' text-center '; echo ' text-'.$text_color; ?>" >
                    <?php
                        if($logo){
                    ?>
                        <?php
                            if($sub_title) echo '<h6 class="sub-title wow fadeInUpBig" data-wow-duration="0.2s" data-wow-offset="10">'.$sub_title.'</h6>';
                            switch ($size) {
                                case 'large':
                                    $title_tag = 'h1';
                                    $title_class = 'title smaller wow fadeInUpBig';
                                    break;
                                case 'normal':
                                    $title_tag = 'h2';
                                    $title_class = 'title wow fadeInUpBig';
                                    break;
                                    default:
                                    $title_tag = 'h3';
                                    $title_class = 'title wow fadeInUpBig';
                                    break;
                            }
                            echo '<'.$title_tag.' class="'.$title_class.'" data-wow-duration="0.6s" data-wow-offset="10">';
                            echo wrap_br($title);
                            echo '</'.$title_tag.'>';
                        ?>
                        <div class="content wow fadeInUpBig <?php echo $small_content ? 'f-16' : ''?>"  data-wow-duration="1s" data-wow-offset="10">
                            <?php echo $content ?>
                        </div>
                        <?php
                        $btnClass = $btnClass . ' wow fadeInUpBig';
                        if($button) the_link($button,$btnClass );
                        if($bottom_text) echo '<div class="contact wow fadeInUpBig" data-wow-duration="1.4s" data-wow-offset="10">'.$bottom_text.'</div>';
                        ?>

                    <?php
                        } else{
                    ?>
                            <?php
                            if($sub_title) echo '<h6 class="sub-title" >'.$sub_title.'</h6>';
                            switch ($size) {
                                case 'large':
                                    $title_tag = 'h1';
                                    $title_class = 'title smaller';
                                    break;
                                case 'normal':
                                    $title_tag = 'h2';
                                    $title_class = 'title';
                                    break;
                                default:
                                    $title_tag = 'h3';
                                    $title_class = 'title ';
                                    break;
                            }
                            echo '<'.$title_tag.' class="'.$title_class.'" >';
                            echo wrap_br($title);
                            echo '</'.$title_tag.'>';
                            ?>
                            <div class="content <?php echo $small_content ? 'f-16' : ''?>">
                                <?php echo $content ?>
                            </div>
                            <?php
                            the_link($button,$btnClass);

                            if($bottom_text) echo '<div class="contact">'.$bottom_text.'</div>';
                            ?>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
