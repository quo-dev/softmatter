<?php
get_header();
$args = array(
		'cat' => get_query_var('cat'),
		'orderby' => 'modified',
        'order' => 'DESC',
	  	'posts_per_page' => -1,
	);
$posts = new WP_Query($args);
if( $posts->have_posts() ) {
?>
<section class="feature-posts">
      <div class="container">
        <div class="heading text-center">
          <h2 class="h1 mb-5"><?php echo single_cat_title('' , true ) ?></h2>
        </div>
        <div class="row">
			<?php while( $posts->have_posts() ) {  $posts->the_post();
                get_template_part( 'template-parts/block/post-list-item' );
            } ?>
        </div>
      </div>
    </section>
<?php
}
get_footer();
