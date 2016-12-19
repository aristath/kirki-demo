<?php 
printf( 
	esc_attr__( 'Palette Selected: %s', 'kirki-demo' ), 
	esc_attr( get_theme_mod( 'palette', 'light' ) )
);