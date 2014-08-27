<?php

function get_header ( $name = null )
{
	global $theme_path;
	require $theme_path . "header.php";
}

function get_the_date ( $d = '', $post = null )
{
	if (empty($d))
	{
		$d = "Y-m-d";
	}
	return date($d);
}

function get_the_time ( $d = '', $post = null )
{
	if (empty($d))
	{
		$d = "H:i:s";
	}
	return date($d);
}

function get_the_modified_date ( $d = '' )
{
	if (empty($d))
	{
		$d = "Y-m-d";
	}
	return date($d);
}

function get_the_modified_time ( $d = '' )
{
	if (empty($d))
	{
		$d = "H:i:s";
	}
	return date($d);
}

function get_template_part ( $slug = null, $name = null )
{
	global $theme_path;
	$template = $slug . "-" . $name . ".php";
	require $theme_path . $template;
}

function get_sidebar ( $name = null )
{
	global $theme_path;
	require $theme_path . "sidebar.php";
}

function get_footer ( $name = null )
{
	global $theme_path;
	require $theme_path . "footer.php";
}

function language_attributes ( $doctype = 'html' )
{
	print "lang=\"pt-BR\"";
}

function bloginfo ( $show = '' )
{
	switch ($show)
	{
		case "charset":
			print "UTF-8";
			break;
		
		case "name":
			print "Mob Your Life";
			break;
		
		case "description":
			print "A simplicidade gera novos caminhos.";
			break;
		
		default:
			print "bloginfo-" . $show;
			break;
	}
}

function get_bloginfo ( $show = '', $filter = 'raw' )
{
}

function wp_title ( $sep = '»', $display = true, $seplocation = '' )
{
	print "Mob Your Life";
}

function wp_head()
{
	global $wp_styles, $wp_scripts_header;
	
	foreach ($wp_styles->styles as $id => $src)
	{
		print "<link rel=\"stylesheet\" href=\"" . $src . "\" />\r\n";
	}
	
	foreach ($wp_scripts_header as $id => $src)
	{
		print "<script type=\"text/javascript\" src=\"" . $src . "\"></script>\r\n";
	}
}

function wp_footer()
{
	global $wp_scripts_footer;
	
	foreach ($wp_scripts_footer as $id => $src)
	{
		print "<script type=\"text/javascript\" src=\"" . $src . "\"></script>\r\n";
	}
}

function get_search_form ( $echo = true )
{
	//require get_template_part( 'content', 'search' );
}

?>
