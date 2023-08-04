<?php
$image = get_field('image');
$heading = get_field('heading');
$items = get_field('items');
?>
<section class="tpl-block text-media-block bg-dush image image-left has-content-slider">
    <!-- Add class .image-right .content-slider -->
    <div class="container-fluid g-0">
        <div class="row g-0 ">
            <!-- Option: .flex-row-reverse -->
            <div class="col-lg-6 image-col">
                <div class="image image-zoomin-effect size-4x3">
                    <!-- Default 1x1 | .size-4x3 -->
                    <img src="<?php echo $image ?>" alt="">
                </div>
            </div>

            <div class="col-lg-6 content-col wow fadeInUpBig" data-wow-duration="1.8s">
                <div class="content-box">
                    <h3 class="title"><?php echo $heading ?></h3>
                    <div class="content text-slider">
                        <!-- Add class .content-slider -->
                        <?php
                        if(is_array($items) && count ($items))
                        foreach ($items as $key => $item) {
                            ?>
                            <div class="content-item">
                                <?php echo $item['content'] ?>
                                <?php if($item['bottom_text']) { ?>
                                    <p class="text-green"><?php echo $item['bottom_text'] ?></p>
                                <?php } ?>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>