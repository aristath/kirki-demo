<?php

if ( ! class_exists( 'Kirki' ) ) {
	esc_attr_e( 'Please install Kirki to see more', 'kirki_demo' );
	return;
}

// Get the value.
$value = get_theme_mod( 'image', '' );

// Get extra info.
$image = Kirki_Helper::get_image_from_url( $value );

if ( '' !== $value ) : ?>

	<p><?php printf( esc_attr__( 'Image URL: %s', 'kirki-demo' ), esc_url_raw( $value ) ); ?></p>
	<p><?php printf( esc_attr__( 'Image ID: %s', 'kirki-demo' ), (int) Kirki_Helper::get_image_id( $value ) ); ?></p>
	<p><?php printf( esc_attr__( 'Image Width: %s', 'kirki-demo' ), (int) $image['width'] ); ?></p>
	<p><?php printf( esc_attr__( 'Image Height: %s', 'kirki-demo' ), (int) $image['height'] ); ?></p>
	<p><img src="<?php echo esc_url_raw( $value ); ?>"></p>
	<?php 

endif;