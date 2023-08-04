<?php
$title = get_field('title');
$background = get_field('background');
$list_text = get_field('list_text');
?>
<section class="list-text-block tpl-block" style="background-image: url(<?php echo $background ?>)">
    <div class="container">
        <div class="row">
            <?php foreach ($list_text as $item) : ?>
                <div class="col-md-4">
                    <div class="list " data-wow-duration="1s" data-wow-offset="10" >
                        <!-- check has data: show "&nbsp;" if no sub-title-->
                        <div class="sub-title wow fadeInDownBig"><?php if($item['sub_title']){ echo $item['sub_title']; }else{ echo '&nbsp;'; } ?></div>
                        <span class="square wow fadeInUpBig"></span>
                        <div class="title title-lg wow fadeInUpBig"><?php echo $item['title']; ?></div>
                        <div class="sub-text wow fadeInUpBig"><?php echo $item['content']?></div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
