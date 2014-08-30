<?php

function get_permalink ( $id = 0, $leavename = false )
{
	return "./";
}

function the_permalink ()
{
	print get_permalink ();
}

function edit_post_link ( $link = null, $before = '', $after = '', $id = 0 )
{
}

function home_url ( $path = '', $scheme = null )
{
	return "./";
}

function admin_url ( $path = '', $scheme = 'admin' )
{
	return "./admin/";
}

?>
