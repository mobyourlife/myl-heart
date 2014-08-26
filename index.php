<?php

/* Setup current theme. */
$theme_base = "themes/";
$theme_name = "padhang";
$theme_path = $theme_base . $theme_name . "/";

$myl_actions = array();

/* i18n + l10n */
function translate ( $text = null, $domain = 'default' )
{
	return $text;
}

function __ ( $text, $domain = 'default' ) {
    return translate( $text, $domain );
}

function _e ( $text, $domain = 'default' ) {
    echo translate( $text, $domain );
}

/* WP themes mid layer. */
function get_header ( $name = null )
{
	global $theme_path;
	require $theme_path . "header.php";
}

$max_posts = 3;

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

function get_post_format ( $post = null )
{
	return "single";
}

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

function esc_attr ( $text = null )
{
	return $text;
}

function esc_html ( $text = null )
{
	return $text;
}

function get_permalink ( $id = 0, $leavename = false )
{
	return "permalink";
}

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

function get_the_content ( $more_link_text = null,  $strip_teaser = false )
{
	print "Lorem ipsum dolor amet.";
}

function the_content ( $more_link_text = null, $strip_teaser = false )
{
	return get_the_content($more_link_text, $strip_teaser);
}

function get_url_in_content ( $content = null )
{
	return "./content_url";
}

function get_post_type ( $post = null )
{
}

function wp_link_pages ( $args = '' )
{
}

function the_category ( $separator = '', $parents = '', $post_id = false )
{
	print "Categoria";
}

function the_tags ( $before = null, $sep = ', ', $after = '' )
{
	print "Tags";
}

function edit_post_link ( $link = null, $before = '', $after = '', $id = 0 )
{
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

$wp_scripts_header = array();
$wp_scripts_footer = array();
$wp_styles = array();

function wp_enqueue_script ( $handle = null, $src = false, $deps = array(), $ver = false, $in_footer = false )
{
	global $wp_scripts_header, $wp_scripts_footer;
	
	if ($in_footer == true)
	{
		$wp_scripts_footer[$handle] = $src;
	}
	else
	{
		$wp_scripts_header[$handle] = $src;
	}
}

function wp_enqueue_style ( $handle = null, $src = false, $deps = array(), $ver = false, $media = 'all' )
{
	global $wp_styles;
	$wp_styles[$handle] = $src;
}

function get_stylesheet_uri ()
{
	global $theme_path;
	return $theme_path . "style.css";
}

function wp_head()
{
	global $wp_styles, $wp_scripts_header;
	
	foreach ($wp_styles as $id => $src)
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

function body_class ( $class = '' )
{
}

function wp_parse_str ( $string = null, &$array = null )
{
	parse_str($string, $array);
	
	if (get_magic_quotes_gpc())
	{
		$array = stripslashes_deep($array);
	}
}

function wp_parse_args ( $args = null, $defaults = '' )
{
	if (is_object($args))
	{
		$r = get_object_vars($args);
	}
	elseif (is_array($args))
	{
		$r =& $args;
	}
	else
	{
		wp_parse_str($args, $r);
	}
	
	if (is_array($defaults))
	{
		return array_merge( $defaults, $r );
	}
	
	return $r;
}

function wp_nav_menu ( $args = array() )
{
    static $menu_id_slugs = array();
 
    $defaults = array( 'menu' => '', 'container' => 'div', 'container_class' => '', 'container_id' => '', 'menu_class' => 'menu', 'menu_id' => '',
    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => 0, 'walker' => '', 'theme_location' => '' );
 
    $args = wp_parse_args( $args, $defaults );
}

function get_header_image ()
{
}

function esc_url ( $url = null, $protocols = null, $_context = 'display' )
{
	return $url;
}

function home_url ( $path = '', $scheme = null )
{
	return "./";
}

function admin_url ( $path = '', $scheme = 'admin' )
{
	return "./admin/";
}

function do_action ( $tag = null,  $arg = '' )
{
}

function is_active_sidebar ( $index = null )
{
}

function is_home ()
{
	return true;
}

function current_user_can ( $capability = null )
{
	return false;
}

function is_search ()
{
	return false;
}

function get_search_form ( $echo = true )
{
	//require get_template_part( 'content', 'search' );
}

function get_template_directory ()
{
	global $theme_path;
	return $theme_path;
}

function add_filter ( $tag = null, $function_to_add = null, $priority = 10, $accepted_args = 1 )
{
}

function add_action ( $tag = null, $function_to_add = null, $priority = 10, $accepted_args = 1 )
{
	global $myl_actions;
	$myl_actions[$tag] = $function_to_add;
}

function register_sidebar ( $args = array() )
{
}

function get_template_directory_uri()
{
}

function is_singular ( $post_types = '' )
{
}

function delete_transient ( $transient = null )
{
}

function is_multi_author()
{
	return false;
}

function is_feed ( $feeds = '' )
{
}

function apply_filters ( $tag = null, $value = null )
{
}

function add_theme_support ( $feature = null )
{
}

function add_theme_page ( $page_title = null, $menu_title = null, $capability = null, $menu_slug = null, $function = '' )
{
}

/* Required classes. */
class WP_Query
{
	function is_author ( $author = '' )
	{
	}
}

$wp_query = new WP_Query();

/* Filters */
/*
Array
(
    [after_setup_theme] => padhang_custom_background_setup
    [widgets_init] => padhang_widgets_init
    [wp_enqueue_scripts] => padhang_scripts
    [edit_category] => padhang_category_transient_flusher
    [save_post] => padhang_category_transient_flusher
    [wp_page_menu_args] => padhang_page_menu_args
    [body_class] => padhang_body_classes
    [wp_title] => padhang_wp_title
    [wp] => padhang_setup_author
    [customize_register] => padhang_customize_register
    [customize_preview_init] => padhang_customize_preview_js
    [wp_head] => padhang_customize_style
    [padhang_footer] => padhang_footer_text
    [admin_menu] => padhang_admin_menu
)
*/

/* Prepare theme. */
require $theme_path . "functions.php";

/* Run actions. */
foreach ($myl_actions as $tag => $function)
{
	call_user_func($function);
}

/* Include theme. */
require $theme_path . "index.php";

?>
