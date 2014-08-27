<?php

function translate ( $text = null, $domain = 'default' )
{
	return $text;
}

function __ ( $text, $domain = 'default' ) {
    return translate( $text, $domain );
}

function _e ( $text, $domain = 'default' ) {
    print translate( $text, $domain );
}

?>
