<?php
/**
 * The template for displaying search forms.
 */
?>
<form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'swiftbridge' ); ?>" />
		<button type="submit" class="btn search-button" name="submit"><span class="icon-search"></span></button>
	</div><!-- /.input-group -->
</form>
