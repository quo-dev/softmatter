<?php
global $header_choice, $wp_query;
$header_choice = 'header_dark';
get_header();
$img = get_template_directory_uri().'/assets/images';
$post_related = get_field('post_related', get_the_ID());
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$post_query = new WP_Query([
        'post_status' => 'publish',
        's' => $_GET['s'],
        'post_type' => array('post', 'page'),
        'posts_per_page' => 10,
        'paged' => $paged
]);

echo '<main class="main">';
?>
<div class="tpl-block single-block">
    <div class="container">
        <div class="search-page">
            <div class="container">
                <div class="search-content">
                    <!--                        <h1 class="mb-4">Search from Softmatter</h1>-->
                    <div class="search-form">
                        <form action="<?php echo get_home_url(); ?>" method="get" class="form-search">
                            <div class="d-flex ">
                                <input class="form-control" type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="search">
                                <button class="btn-icon" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="#d3d3d3" aria-hidden="true" class="text-white cursor-pointer hover:scale-110 duration-100" width="22"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="result-block">
                    <p class="mb-0">
                        About <?php echo $post_query->found_posts; ?> results <?php if ($_GET['s']): ?> for <strong><?php echo get_search_query(); ?></strong><?php endif; ?>
                    </p>
                    <ul class="ul result-search">
                        <?php
                            while ( $post_query->have_posts() ) : $post_query->the_post();
                                $list_ancestors = get_post_ancestors(get_post());
                                $list_ancestors = array_reverse($list_ancestors);
                                $list_ancestors[] = get_the_ID();
                        ?>
                        <li>
                            <div class="result-search__breadcrumb">
                                <?php if (get_post_type() == 'post'): ?>
                                    <a href="<?php echo get_home_url(); ?>">Home</a><span> › </span>
                                    <a href="<?php echo get_home_url() . '/news'; ?>">News</a>
                                <?php elseif (get_post_type() == 'page'): ?>
                                    <?php get_link_breadcrumb($list_ancestors) ?>
                                <?php endif; ?>
                            </div>
                            <h3 class="title">
                                <a href="<?php echo get_permalink(); ?>">
                                    <?php echo the_title(); ?>
                                </a>
                            </h3>
                            <div class="result-search__content d-flex ">
                                <?php if (has_post_thumbnail()): ?>
                                <a href="<?php echo get_permalink(); ?>" class="result-search__image">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
                                </a>
                                <?php endif; ?>
                                <?php if (the_excerpt()): ?>
                                <div class="result-search__desc">
                                    <?php echo the_excerpt(); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>

                    <?php
                        $page_number = $post_query->max_num_pages;
                    ?>
                    <?php if ($page_number > 1): ?>
                    <div class="wrap-pagination d-flex justify-content-center">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item <?php echo $paged == 1 ? 'disabled' : '' ?>">
                                    <a class="page-link" href="<?php echo get_pagenum_link($paged-1); ?>">Prev</a>
                                </li>
                                <?php
                                for ($page = 1; $page <= $page_number; $page++){ ?>
                                    <?php if ($page == $paged): ?>
                                        <li class="page-item active">
                                            <span class="page-link"><?php echo $page; ?></span>
                                        </li>
                                    <?php else: ?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo get_pagenum_link($page); ?>"><?php echo $page; ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php } ?>
                                <li class="page-item <?php echo $paged == $page_number ? 'disabled' : '' ?>">
                                    <a class="page-link" href="<?php echo get_pagenum_link($paged+1); ?>">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
echo '</main>';
get_footer();
?>
