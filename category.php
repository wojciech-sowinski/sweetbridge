<?php
/**
 * The Template for displaying Category Archive pages.
 */

get_header();
if (have_posts()):
	?>
	<header class="page-header container pt-5">
		<div class="row">
			<div class="col-12">
				<h1 class="page-title">
					<?php printf(esc_html__('Category Archives: %s', 'testing'), single_cat_title('', false)); ?>
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
					<?php
					if (have_posts()) {
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
									<div class="post-content col-12 <?php if ($counter == 1) {
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
											<a href="<?php the_permalink(); ?>" class="btn btn-primary"><?= __('Read more', 'swiftbridge'); ?></a>
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

					} else {
						echo __('No posts found.', 'swiftbridge');
					}
					?>
				</div>

			</div>
		</div>
	</section>

	<?php
else:
	echo __('No posts found.', 'swiftbridge');
endif;


wp_reset_postdata(); // End of the loop.

get_footer();