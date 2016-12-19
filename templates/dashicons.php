<div class="dashicons0">
	<?php
	$icon0 = get_theme_mod( 'dashicons0', 'format-status' );
	printf(
		esc_attr__( 'Using jsVars: %s', 'kirki-demo' ),
		'<span class="dashicons dashicons-' . esc_attr( $icon0 ) . '"></span>'
	);
	?>
</div>

<div class="dashicons1">
	<?php
	$icon1 = get_theme_mod( 'dashicons1', 'format-status' );
	printf(
		esc_attr__( 'Using partial_refresh: %s', 'kirki-demo' ),
		'<span class="dashicons dashicons-' . esc_attr( $icon1 ) . '"></span>'
	);
	?>
</div>