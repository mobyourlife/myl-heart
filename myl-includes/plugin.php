<?php

function do_action ( $tag = null,  $arg = '' )
{
}

function add_filter ( $tag = null, $function_to_add = null, $priority = 10, $accepted_args = 1 )
{
}

function add_action ( $tag = null, $function_to_add = null, $priority = 10, $accepted_args = 1 )
{
	global $myl_actions;
	$myl_actions[$tag] = $function_to_add;
}

function apply_filters ( $tag = null, $value = null )
{
}

function add_theme_page ( $page_title = null, $menu_title = null, $capability = null, $menu_slug = null, $function = '' )
{
}

?>
