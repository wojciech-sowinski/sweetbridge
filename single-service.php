<?php
/**
 * The Template for displaying all single service posts.
 * Description: Page template
 * @author Wojciech Sowiński <wojciech.sowinski@innhouse.pl>
 */
get_header();
the_post();
?>
<section class="container">
	<div class="row d-flex flex-column-reverse flex-md-row">
		<div class="col-12 col-md-6">
			<?php the_title('<h1 class="py-3">', '</h1>'); ?>
			<?php the_field('service_content'); ?>
		</div>
		<div class="col-12 col-md-6">
			<?php $service_img = get_field('service_img'); ?>
			<?php $size = 'full'; ?>
			<?php if ($service_img): ?>
				<?php echo wp_get_attachment_image($service_img, $size, false, ['class' => 'img-cover']); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php get_template_part('template-parts/section', 'partners-carousel'); ?>
<?php get_template_part('template-parts/section', 'contact'); ?>
<?php get_template_part('template-parts/section', 'our-services'); ?>

<?php
get_footer();