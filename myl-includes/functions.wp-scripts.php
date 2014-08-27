<?php

function wp_enqueue_script ( $handle = null, $src = false, $deps = array(), $ver = false, $in_footer = false )
{
	global $wp_scripts_header, $wp_scripts_footer;
	
	if ($in_footer == true)
	{
		$wp_scripts_footer[$handle] = $src;
	}
	else
	{
		$wp_scripts_header[$handle] = $src;
	}
}

?>
