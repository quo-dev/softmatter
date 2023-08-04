<?php
$img = get_template_directory_uri().'/assets/images';

$args = array(
    'post_type'=> 'post',
    'orderby'    => 'publish_date',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => -1 // this will retrive all the post that is published
);
$result = new WP_Query( $args );
?>

<?php if ( $result-> have_posts() ) : ?>
<div class="tpl-block news-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 news-block__left">
                <ul class="ul news d-flex flex-wrap wow fadeInUpBig" data-wow-duration="1s" >
                    <?php while ( $result->have_posts() ) : $result->the_post();
                        $post_categories = get_the_category();
                    ?>
                        <li class="news__item view-all <?php foreach ($post_categories as $item){ echo $item->slug . ' '; } ?>  ">
                            <?php if (has_post_thumbnail()): ?>
                            <a href="<?php echo get_permalink(); ?>" class="news__image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
                            </a>
                            <?php endif; ?>
                            <h2 class="news__title">
                                <a href="<?php echo get_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="news__description">
                                <?php echo get_field('description', get_the_ID()); ?>
                            </div>
                            <div class="news__cta">
                                <a href="<?php echo get_permalink(); ?>">Read More</a>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <div class="col-lg-3 news-block__right">
                <h3 class="widget__title wow fadeInRight" data-wow-offset="10" data-wow-delay="0.2s">Topics</h3>
                <ul class="ul topics">
                    <li class="topics__item active wow fadeInRight" data-wow-offset="10" data-wow-delay="0.4s">
                        <a href="javascript:void(0)" data-type="view-all">
                            VIEW ALL
                        </a>
                    </li>
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category):
                     ?>
                    <li class="topics__item wow fadeInRight" data-wow-offset="10" data-wow-delay="0.6s">
                        <a href="javascript:void(0)" data-type="<?php echo $category->slug; ?>">
                            <?php echo $category->name; ?>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php endif; wp_reset_postdata(); ?>
