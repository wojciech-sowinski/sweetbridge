<?php
/**
 * Template Name: Not found
 * Description: Page template 404 Not found.
 *
 */

get_header();

$search_enabled = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>
<style>
.content.error404::before{
	content:'404';
	font-size: 16em;
}
</style>
<div id="post-0" class="content error404 not-found d-flex flex-column justify-content-center align-content-center gap-3 position-relative">
	<div class="text-center d-flex flex-column justify-content-center">
	<h1 class="entry-title fw-bold my-3"><?php esc_html_e( 'Not found', 'swiftbridge' ); ?></h1>
	<div class="entry-content my-3">
		<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'swiftbridge' ); ?></p>
		<div>
			<?php
				if ( '1' === $search_enabled ) :
					get_search_form();
				endif;
			?>
		</div>
	</div><!-- /.entry-content -->
	<div class=" my-3">
		<a title="Return to home page" href="<?= esc_url(site_url()); ?>" class="btn btn-primary">
			<?= __('Return to home page','swiftbridge') ?>
		</a>
	</div>
	</div>
</div><!-- /#post-0 -->
<?php
get_footer();
