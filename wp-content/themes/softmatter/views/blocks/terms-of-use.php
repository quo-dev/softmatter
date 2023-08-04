<?php
$title = get_field('title');
$sub_title = get_field('sub_title');
$content = get_field('content');
$layout = get_field('layout');
?>

<section class="single-block">
    <div class="container">
        <?php if ($title) { ?>
            <h1><?php echo $title; ?></h1>
        <?php } ?>
        <?php if ($sub_title) { ?>
            <div class="m-4r">
                <?php echo $sub_title ?>
            </div>
        <?php  } if ($title || $sub_title) { ?>
            <hr/>
        <?php } if ($content) { ?>
        <div class="single-content">
            <?php echo $content ?>
        </div>
        <?php } ?>
    </div>
</section>