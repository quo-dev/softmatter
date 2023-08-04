<!-- CONTENT SLIDER 2 COLUMNS BLOCK

-->
<!--option background color class name is :  bg-chalk, bg-mint, bg-dush-->
<?php
$items = get_field('items');
$layout = get_field('layout');
$background_color = get_field('background_color') ? get_field('background_color') : 'white';
?>
<div class="tpl-block slider-content-block py-0 bg-<?php echo $background_color ?>">
    <div class="container-slider">
        <div>
            <div class="slider-content">
                <?php
                foreach ($items as $key => $item) {
                ?>
                    <div class="slider-content-item">
                        <div class="row g-0 ">

                            <!-- Option: Image -->
                            <div class="col-lg-6 image-col full-height <?php if($layout === 'text-media') echo ' order-2 ' ?>">
                                <!-- Option: Image -->
                                <div class="image image-zoomin-effect">
                                    <img src="<?php echo $item['image'] ?>" alt="">
                                </div>
                            </div>

                            <div class="col-lg-6 content-col">
                                <div class="content-box wow fadeInUp" data-wow-offset="10">
                                    <!-- Option: Image Icon -->
                                    <?php
                                    if ($item['icon']) echo '<img src="' . $item['icon'] . '" alt="Icon Construction">';
                                    if ($item['sub_title']) echo '<h6 class="sub-title">' . $item['sub_title'] . '</h6>';
                                    if ($item['title']) echo '<h3 class="title">' . $item['title'] . '</h3>';
                                    if ($item['content']) echo '<div class="content">'.$item['content'].'</div>';
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

            </div>
        </div>
    </div>
    <!--Show this blog when have more 2 items-->
    <div class="container container-navigation d-none d-sm-flex justify-content-end position-relative">
        <div class="">
            <ul class="slick-dots slick-dots-custom">
                <?php
                foreach ($items as $key => $item) {
                ?>
                    <li class="<?php if (!$key) echo 'slick-active'; ?>" data-slide="<?php echo ++$key ?>">
                        <button type="button"></button>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
        <div class="d-inline-flex position-relative ">
            <button class="slick-prev slick-arrow position-static"></button>
            <button class="slick-next slick-arrow position-static"></button>
        </div>
    </div>
</div>