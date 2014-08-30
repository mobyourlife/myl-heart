<?php

function wp_enqueue_style ( $handle = null, $src = false, $deps = array(), $ver = false, $media = 'all' )
{
	global $wp_styles;
	$wp_styles->add_style($handle, $src);
}

/* Check whether a CSS stylesheet has been added to the queue.
 * $handle: Name of the stylesheet.
 * $list: Status of the stylesheet to check. Default 'enqueued'. Accepts 'enqueued', 'registered', 'queue', 'to_do', and 'done'. Default value: 'enqueued' */
function wp_style_is( $handle, $list = 'enqueued' )
{
	global $wp_styles;
	return isset($wp_styles->styles[$handle]);
}

?>
