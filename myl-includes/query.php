<?php

function have_posts ()
{
	global $max_posts;
	while ($max_posts-- >= 0)
		return true;
	return false;
}

function the_post ()
{
}

function is_home ()
{
	return true;
}

function is_search ()
{
	return false;
}

function is_singular ( $post_types = '' )
{
}

function is_feed ( $feeds = '' )
{
}

class WP_Query
{
	function is_author ( $author = '' )
	{
	}
}

$wp_query = new WP_Query();

?>
