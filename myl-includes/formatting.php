<?php

function esc_attr ( $text = null )
{
	return $text;
}

function esc_html ( $text = null )
{
	return $text;
}

function get_url_in_content ( $content = null )
{
	return "./content_url";
}

function wp_parse_str ( $string = null, &$array = null )
{
	parse_str($string, $array);
	
	if (get_magic_quotes_gpc())
	{
		$array = stripslashes_deep($array);
	}
}

function esc_url ( $url = null, $protocols = null, $_context = 'display' )
{
	return $url;
}

function esc_url_raw( $url, $protocols = null )
{
    return esc_url( $url, $protocols, 'db' );
}

function urlencode_deep($value)
{
    $value = is_array($value) ? array_map('urlencode_deep', $value) : urlencode($value);
    return $value;
}

?>
