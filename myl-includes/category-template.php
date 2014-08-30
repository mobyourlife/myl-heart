<?php

function the_category ( $separator = '', $parents = '', $post_id = false )
{
	print "Categoria";
}

function the_tags ( $before = null, $sep = ', ', $after = '' )
{
	print "Tags";
}

function get_the_category_list( $separator = '', $parents='', $post_id = false )
{
	return false;
	return "Uncategorized";
}

function get_the_tag_list( $before = '', $sep = '', $after = '', $id = 0 )
{
	return false;
	return "Untagged";
}

?>
