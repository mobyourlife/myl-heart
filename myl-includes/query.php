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

function is_front_page()
{
	return true;
}

function is_archive()
{
	return false;
}

function is_date()
{
	return false;
}

function is_paged()
{
	return false;
}

function is_404()
{
	return false;
}

function is_single( $post = '' )
{
	return false;
}

class WP_Query
{
	function is_author ( $author = '' )
	{
	}
}

$wp_query = new WP_Query();

?>
