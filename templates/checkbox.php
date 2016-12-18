<?php

$status = esc_attr__( 'Checked', 'kirki-demo' );
if ( true !== get_theme_mod( 'checkbox', true ) ) {
    $status = esc_attr__( 'Unchecked', 'kirki-demo' );
}
?>
<p><?php printf( esc_attr__( 'Checkbox is %s', 'kirki-demo' ), $status ); ?></p>