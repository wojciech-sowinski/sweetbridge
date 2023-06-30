<?php
/**
 * The template for displaying the news-archive loop.
 * @author Wojciech Sowiński <wojciech.sowinski@innhouse.pl>
 */
get_header();
?>
<header class="page-header container pt-5">
	<div class="row">
		<div class="col-12">
			<h1 class="page-title">
				<?php
				echo post_type_archive_title();
				?>
			</h1>
		</div>
	</div>
</header>
<section class="container">
	<div class="row">
		<div class="col-12 col-md-4">
		<?= get_template_part('template-parts/section', 'search');  ?>
		</div>
		<div class="col-12 col-md-8 d-flex flex-wrap">
			<div class="row">
				<?php
				$paged = $_GET["newspage"] ? $_GET["newspage"] : 1;
				$args = array(
					'post_type' => get_post_type(),
					'post_status' => 'publish',
					'posts_per_page' => 7,
					'paged' => $paged,
				);
				$query = new WP_Query($args);
				if ($query->have_posts()) {
					$counter = 1;
					while ($query->have_posts()) {
						$query->the_post();
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
							<div class="post-content d-flex flex-column mt-3 gap-3 col-12 <?php if ($counter == 1) {
								echo 'col-lg-6';
							}
							; ?>">
								<p class="post-date m-0">
									<?php echo get_the_date(); ?>
								</p>
								<h2 class="post-card-title">
									<?php the_title(); ?>
								</h2>
								<div class="excerpt">
									<?php the_excerpt(); ?>
								</div>
								<div>
								<?php
								if ($counter == 1) {
									?>
									<a href="<?php the_permalink(); ?>" class="btn btn-primary"><?= __('Read more', 'swiftbridge'); ?></a>
									<?php
								}
								?>
								</div>
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
			} else {
				get_template_part( 'content', 'none' );
			}
			?>
			</div>
			<div class="row p-3 mx-auto">
				<?php
				echo '<div class="pagination d-flex justify-content-center">';
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
get_footer();