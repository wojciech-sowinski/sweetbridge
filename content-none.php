<?php
/**
 * The template for displaying "not found" content in the Blog Archives.
 */

$search_enabled = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>
<style>

.content.error404::before{
	content:"<?php esc_html_e( 'Not found', 'swiftbridge' ); ?>";
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	font-size: 10em;
	text-align: center;
	z-index: -1;
	opacity: .2;
	font-weight:700;
	line-height: 1em;

}

@media (max-width:792px){
	.content.error404::before{
		font-size: 5em;
	}
}

.content.error404{
	overflow: hidden;
}


</style>
<div id="post-0" class="w-100 content error404 not-found d-flex flex-column justify-content-center align-content-center gap-3 position-relative" style="min-height:50vh;">

	<div class="text-center">
	<h1 class="entry-title fw-bold my-3"><?php esc_html_e( 'Not found', 'swiftbridge' ); ?></h1>
	<div class="entry-content my-3" style="min-heigt:100vh;">
		<p><?php esc_html_e( 'No posts found', 'swiftbridge' ); ?></p>
		<div>
			<?php
				if ( '1' === $search_enabled ) :
					get_search_form();
				endif;
			?>
		</div>
	</div><!-- /.entry-content -->
	</div>
</div><!-- /#post-0 -->
