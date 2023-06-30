<?php
/**
 * The Template used to display Tag Archive pages.
 * @author Wojciech Sowiński <wojciech.sowinski@innhouse.pl>
 */

get_header();

$paged = $_GET["newspage"] ? $_GET["newspage"] : 1;
$args = array(
	'post_type' => 'news',
	'paged' => $paged,
	'posts_per_page' => 7,
	'tax_query' => array(
		array(
			'taxonomy' => 'post_tag',
			'field' => 'name',
			'terms' => esc_attr(single_tag_title('', false)) // Zamiast 'your-tag-slug' wpisz slug konkretnego tagu
		)
	)
);

$query = new WP_Query($args);
if ($query->have_posts()):
	?>
	<header class="page-header container pt-5">
		<div class="row">
			<div class="col-12">
				<h1 class="page-title">
					<?= __('Tags', 'swiftbridge') ?>:
					<?php echo esc_html__(single_tag_title('', false)); ?>
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
				<div class="row p-3 mx-auto">
					<?php
					echo '<div class="pagination d-flex justify-content-center">';
					set_query_var('query', $query); 
					echo paginate_links(
						array(
							'total' => $query->max_num_pages,
							'current' => max(1, $paged),
							'format' => '?newspage=%#%',
							'prev_text' => __('Previous', 'swiftbridge'),
							'next_text' => __('Next', 'swiftbridge'),
						)
					);
					echo '</div>';
					?>
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