<?php
$image = get_field('image');
$image_mobile = get_field('image_mobile');
?>

<section class="image-block" >
    <!-- image desktop -->
    <img class="d-none d-lg-block" src="<?php echo $image; ?>" />
    <!-- image mobile -->
    <img class="d-lg-none" src="<?php echo $image_mobile ?: $image; ?>" />
</section>
