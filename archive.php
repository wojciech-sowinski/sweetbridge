<?php
/**
 * The Template for displaying Archive pages.
 */

get_header();

if (have_posts()):
	?>
	<header class="page-header container py-5">
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
	<?php

	get_template_part('archive', 'loop');

else:

	get_template_part('content', 'none');

endif;

wp_reset_postdata();

get_footer();