<?php

$myl_sidebars = array();

function is_active_sidebar ( $index = null )
{
	global $myl_sidebars;
	
	foreach ($myl_sidebars as $sidebar)
	{
		if ($sidebar['id'] == $index)
		{
			return $sidebar;
		}
	}
}

function register_sidebar ( $args = array() )
{
	global $myl_sidebars;
	
	if (is_active_sidebar ( $args['id']))
	{
		return;
	}
	
	$myl_sidebars[] = $args;
}

function dynamic_sidebar($index = 1)
{
	global $myl_sidebars;
	
	$sidebar = is_active_sidebar($index);
	
	if ($sidebar)
	{
		print $sidebar['before_title'] . $sidebar['name'] . $sidebar['after_title'];
		
		foreach ($myl_widgets as $widget)
		{
			print $sidebar['before_widget'];
			print $sidebar['afer_widget'];
		}
	}
}

?>
