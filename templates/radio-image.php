<?php

printf(
    esc_attr__( 'Your favorite Wapuu: %s', 'kirki-demo' ),
    esc_attr( get_theme_mod( 'radio-image', 'Socrates' ) )
);