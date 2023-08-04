<?php
global $header_choice;
$header_choice = 'header_dark';
get_header();
$img = get_template_directory_uri().'/assets/images';
$post_related = get_field('post_related', get_the_ID());
echo '<main class="main">';
?>
<div class="tpl-block single-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1><?php the_title(); ?></h1>
                <div class="single-content">
                    <?php
                    if(have_posts()):
                        while (have_posts()): the_post();
                            the_content();
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
            <?php if ($post_related): ?>
            <div>
                <ul class="ul news d-flex flex-wrap wow fadeInUpBig" data-wow-duration="1s" >
                    <?php
                    foreach ($post_related as $item):
                        $post_id = $item->ID;
                        ?>
                        <li class="news__item">
                            <?php if (has_post_thumbnail($post_id)): ?>
                                <a href="<?php echo get_permalink($post_id); ?>" class="news__image ratio ratio-16x9">
                                    <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>"/>
                                </a>
                            <?php endif; ?>
                            <h2 class="news__title">
                                <a href="<?php echo get_permalink($post_id); ?>">
                                    <?php echo get_the_title($post_id); ?>
                                </a>
                            </h2>
                            <div class="news__description">
                                <?php echo get_field('description', $post_id); ?>
                            </div>
                            <div class="news__cta">
                                <a href="<?php echo get_permalink($post_id); ?>">Read More</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
echo '</main>';
get_footer();
?>
