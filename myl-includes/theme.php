<?php

class CustomHeader
{
	public $width;
	public $height;
	
	function __construct($w, $h)
	{
		$this->width = $w;
		$this->height = $h;
	}
}

function get_stylesheet_uri ()
{
	global $theme_path;
	return $theme_path . "style.css";
}

function get_header_image ()
{
	global $myl_config;
	return $myl_config['header_image'];
}

function header_image ()
{
	global $myl_config;
	print $myl_config['header_image'];
}

function get_custom_header ()
{
	global $myl_config;
	$ret = new CustomHeader($myl_config['header_width'], $myl_config['header_height']);
	return $ret;
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

function get_theme_support( $feature )
{
	return false;
}

function get_theme_mod( $name, $default = false )
{
	return false;
}

function get_background_color()
{
	return 'default';
	return get_theme_mod('background_color', get_theme_support( 'custom-background', 'default-color' ) );
}

function get_background_image()
{
	return get_theme_mod('background_image', get_theme_support( 'custom-background', 'default-image' ) );
}

?>
