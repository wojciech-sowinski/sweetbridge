<?php
/**
 * The Template for displaying Category Archive pages.
 */

get_header();

$args = array(
	'post_type' => 'news',
	'category_name' => esc_attr( single_cat_title('', false) ),
);
$query = new WP_Query($args);
if ($query->have_posts()):
	?>
	<header class="page-header container pt-5">
		<div class="row">
			<div class="col-12">
				<h1 class="page-title">
					<?php echo esc_html__(single_cat_title('', false)); ?>
				</h1>
			</div>
		</div>
	</header>
	<section class="container pb-5">
		<div class="row">
			<div class="col-12 col-md-4">
				<?= get_template_part('template-parts/section', 'search'); ?>
			</div>
			<div class="col-12 col-md-8 d-flex flex-wrap">
				<div class="row">
					<?php set_query_var('query', $query); ?>
					<?= get_template_part('template-parts/section', 'news-panels'); ?>
				</div>

			</div>
		</div>
	</section>
	<?php
else:
	get_template_part('content', 'none');
endif;
wp_reset_postdata(); // End of the loop.
get_footer();