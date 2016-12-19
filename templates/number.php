<?php 
printf(
	esc_attr__( 'These are %1$s dots: %2$s', 'kirki-demo' ),
	(int) get_theme_mod( 'number', 42 ), 
	str_repeat( '.', absint( get_theme_mod( 'number', 42 ) ) ) 
);
