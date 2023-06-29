<?php
/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();

the_post();
?>
<div class="container">
	<div class="row">
		<div class="col-md-8 order-md-2 col-sm-12 mx-auto pt-4 pb-6">
			<div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
				<h1 class="entry-title">
					<?php the_title(); ?>
				</h1>
				<?php
				the_content();

				?>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div>
	<?php
	get_footer();