<?php
if ($query->have_posts()) {
	$counter = 1;
	while ($query->have_posts()) {
		$query->the_post();
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
					echo '<a title="'.the_title().'" href="' . get_permalink() . '">';
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
				<div class="post-content  d-flex flex-column mt-3 gap-3  col-12 <?php if ($counter == 1) {
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
							<a title="<?= __('Read more', 'swiftbridge'); ?>" href="<?php the_permalink(); ?>" class="btn btn-primary"><?= __('Read more', 'swiftbridge'); ?></a>
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
} else {
	get_template_part('content', 'none');
} ?>
