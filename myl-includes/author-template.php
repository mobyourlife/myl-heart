<?php

function get_author_posts_url ( $author_id = null,  $author_nicename = '' )
{
	return "author/" . $author_id;
}

function get_the_author_meta ( $field = '', $user_id = false )
{
	return "100";
}

function get_the_author ( $deprecated = '' )
{
	return "Author";
}

function is_multi_author()
{
	return false;
}

?>
