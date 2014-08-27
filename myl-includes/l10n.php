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

function translate_with_gettext_context ( $text, $context, $domain = 'default' )
{
	return $text;
}

function _x ( $text, $context, $domain = 'default' )
{
	return translate_with_gettext_context( $text, $context, $domain );
}

function esc_attr_e( $text, $domain = 'default' )
{
	echo esc_attr( translate( $text, $domain ) );
}

?>
