<?php

function comments_open( $post_id = null )
{
	return true;
}

function comments_popup_link( $zero = false, $one = false, $more = false, $css_class = '', $none = false )
{
	print "<a href=\"" . get_permalink () . "\">" . $zero . "</a>";
}

?>
