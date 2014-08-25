<?php

/* Setup current theme. */
$theme_base = "./themes/";
$theme_name = "padhang";
$theme_path = $theme_base . $theme_name . "/";

/* i18n + l10n */
function translate ( $text = null, $domain = 'default' )
{
	return $text;
}

function __ ( $text, $domain = 'default' ) {
    return translate( $text, $domain );
}

function _e ( $text, $domain = 'default' ) {
    echo translate( $text, $domain );
}

/* WP themes mid layer. */
function get_header ( $name = null )
{
	global $theme_path;
	require $theme_path . "header.php";
}

function have_posts ()
{
	return false;
}

function the_post ()
{
}

function get_template_part ( $slug = null, $name = null )
{
}

function get_sidebar ( $name = null )
{
	global $theme_path;
	require $theme_path . "sidebar.php";
}

function get_footer ( $name = null )
{
	global $theme_path;
	require $theme_path . "footer.php";
}

function language_attributes ( $doctype = 'html' )
{
	print $doctype;
}

function bloginfo ( $show = '' )
{
}

function wp_title ( $sep = '»', $display = true, $seplocation = '' )
{
}

function wp_head()
{
}

function body_class ( $class = '' )
{
}

function wp_nav_menu ( $args = array() )
{
}

function get_header_image ()
{
}

function esc_url ( $url = null, $protocols = null, $_context = 'display' )
{
}

function home_url ( $path = '', $scheme = null )
{
}

function do_action ( $tag = null,  $arg = '' )
{
}

function wp_footer()
{
}

function is_active_sidebar ( $index = null )
{
}

/* Include theme. */
require $theme_path . "index.php";

?>
