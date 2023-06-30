<?php
/**
 * The Template for displaying Search Results pages.
 * @author Wojciech Sowiński <wojciech.sowinski@innhouse.pl>
 */

get_header();

?>
<header class="page-header container pt-5">
	<div class="row">
		<div class="col-12">
			<h1 class="page-title">
				<?php printf(esc_html__('Search Results for: %s', 'swiftbridge'), get_search_query()); ?>
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
			<?php
			if (have_posts()) {
				?>
				<div class="row">
					<?php
					$counter = 1;
					while (have_posts()) {
						the_post();
						if (get_post_type() == 'news') {
							$post_classes = '';
							if ($counter === 1) {
								$post_classes = 'horizontal-post-card col-12 d-flex single-post pb-4';
							} else {
								$post_classes = 'post-card col-12 col-lg-6 single-post pb-4';
							}
							?>
							<div <?php post_class($post_classes); ?>>
								<?php if ($counter != 1) {
									echo '<a href="' . get_permalink() . '">';
								} ?>
								<?php
								if ($counter == 1) {
									echo '<div class="row">';
								}
								;
								?>
								<?php if (has_post_thumbnail()): ?>
									<div class="post-thumbnail col-12 <?php if ($counter == 1) {
										echo 'col-lg-6';
									}
									; ?>">
										<?php the_post_thumbnail('large'); ?>
									</div>
								<?php endif;
								?>
								<div class="post-content d-flex flex-column mt-3 gap-3  col-12 <?php if ($counter == 1) {
									echo 'col-lg-6';
								}
								; ?>">
									<p class="post-date">
										<?php echo get_the_date(); ?>
									</p>
									<h2 class="post-card-title">
										<?php the_title(); ?>
									</h2>
									<div class="excerpt">
										<?php the_excerpt(); ?>
									</div>
									<?php
									if ($counter == 1) {
										?>
										<div>
											<a href="<?php the_permalink(); ?>" class="btn btn-primary"><?= __('Read more', 'swiftbridge'); ?></a>
										</div>
										<?php
									}
									?>
								</div>
								<?php
								if ($counter == 1) {
									echo '</div>';
								}
								if ($counter != 1) {
									echo '</a>';
								}
								?>
							</div>
							<?php
							$counter++;
						}
						?>
					<?php
					wp_reset_postdata();
					}
					?>
				</div>
				<?php
			} else {
				get_template_part('content', 'none');
			}
			?>
			<div class="row p-3 mx-auto">
				<?php
				echo '<div class="pagination d-flex justify-content-center">';
				global $wp_query;

				$big = 999999999; // wartość duża, aby zapewnić, że wszystkie strony będą pokazywane
				echo paginate_links(
					array(
						'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
						'format' => '?paged=%#%',
						'current' => max(1, get_query_var('paged')),
						'total' => $wp_query->max_num_pages,
						'prev_text' => __('Previous', 'swiftbridge'),
						'next_text' => __('Next', 'swiftbridge'),
						// 'type' => 'list',
					)
				);
				echo '</div>';
				?>
			</div>
		</div>
	</div>


</section>


<?php

wp_reset_postdata();

get_footer();