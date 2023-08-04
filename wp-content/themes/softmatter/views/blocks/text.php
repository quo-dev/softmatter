<!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
<?php
$title = get_field('title');
$items = get_field('items');
$background_color = get_field('background_color') ?: 'mint';
$content_color = get_field('content_color') ?: 'white';
?>

<!-- Options:
        1. Background: bg-mint/ bg-dush / bg-chalk -->
<section class="list-text-block tpl-block bg-<?php echo $background_color; ?>">
    <div class="container">
        <div class="row">
            <h2 class="sub-title wow fadeInDown"><?php echo $title; ?></h2>
            <div class="list-text-slider wow fadeInUpBig <?php if($content_color === 'green') echo ' text-green'; ?>" data-wow-duration="1s" data-wow-offset="10">
                <?php
                if ($items):
                foreach ($items as $key => $item):
                    $item_title = $item['title'];
                    $item_content = $item['content'];
                ?>
                <div class="list">
                    <div class="title title-lg"><?php echo $item_title; ?></div>
                    <div class="sub-text"><?php echo $item_content; ?></div>
                </div>
                <?php
                endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>