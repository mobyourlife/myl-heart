<?php

function wp_enqueue_style ( $handle = null, $src = false, $deps = array(), $ver = false, $media = 'all' )
{
	global $wp_styles;
	$wp_styles[$handle] = $src;
}

?>
