<?php
/**
 * The Template for displaying all single posts.
 */
get_header();
the_post();
?>
<section class="container ">
	<div class="row">
		<div class="col-12 col-lg-8 mx-auto d-flex flex-column gap-4">
			<div class="row">
				<div class="col-12">
					<h1>
						<?php
						the_title();
						?>
					</h1>
				</div>
			</div>
			<div class="d-flex gap-3">
				<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"
					rel="noopener noreferrer"><span class="icon-facebook social-icon-primary"></span></a>
				<a href="https://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>" target="_blank"
					rel="noopener noreferrer"><span class="icon-in social-icon-primary"></span></a>
				<?php
				$date = get_the_date('j F Y');
				$formatted_date = date_i18n('j F Y', strtotime($date));
				echo '<span class="post-date ms-5">' . $formatted_date . '</span>';
				?>
			</div>
			<div class="row">
				<div class="col-12">
					<?php
					the_post_thumbnail('full', ['class' => 'img-cover simple-banner'])
						?>
				</div>
			</div>
			<div class="row">
				<div class="col-12 pb-4">
					<?php
					the_content()
						?>
				</div>
			</div>

		</div>
	</div>
</section>
<section class="container pt-0">
	<div class="row">
		<div class="col-12 col-lg-8 mx-auto">
			<?php get_template_part('template-parts/section', 'news-carousel') ?>
		</div>
	</div>
</section>


<?php
get_footer();