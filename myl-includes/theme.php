<?php

function get_stylesheet_uri ()
{
	global $theme_path;
	return $theme_path . "style.css";
}

function get_header_image ()
{
}

function get_template_directory ()
{
	global $theme_path;
	return $theme_path;
}

function get_template_directory_uri()
{
}

function add_theme_support ( $feature = null )
{
}

?>
