<?php

function wp_parse_args ( $args = null, $defaults = '' )
{
	if (is_object($args))
	{
		$r = get_object_vars($args);
	}
	elseif (is_array($args))
	{
		$r =& $args;
	}
	else
	{
		wp_parse_str($args, $r);
	}
	
	if (is_array($defaults))
	{
		return array_merge( $defaults, $r );
	}
	
	return $r;
}

?>
