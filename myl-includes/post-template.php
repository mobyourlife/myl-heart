<?php

function the_ID ()
{
	print "0";
}

function post_class ( $class = '', $post_id = null )
{
}

function the_title ( $before = '', $after = '', $echo = true )
{
	print "Title";
}

function get_the_content ( $more_link_text = null,  $strip_teaser = false )
{
	print "Lorem ipsum dolor amet.";
}

function the_content ( $more_link_text = null, $strip_teaser = false )
{
	return get_the_content($more_link_text, $strip_teaser);
}

function wp_link_pages ( $args = '' )
{
}

function body_class ( $class = '' )
{
}

?>
