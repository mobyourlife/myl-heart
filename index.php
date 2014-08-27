<?php

/* Constants. */
define(MYL_INC, "myl-includes/");

/* Config file. */
require "myl-config.php";

/* Setup environment. */
session_start ();

/* Mob Your Life environment. */
$max_posts = 3;
$myl_actions = array();

/* WordPress environment. */
$wp_scripts_header = array();
$wp_scripts_footer = array();
$wp_styles = array();

/* Setup theme path. */
$theme_base = "themes/";
$theme_name = $myl_config['theme_name'];
$theme_path = $theme_base . $theme_name . "/";

/* Modules. */
require MYL_INC . "author-template.php";
require MYL_INC . "category-template.php";
require MYL_INC . "capabilities.php";
require MYL_INC . "formatting.php";
require MYL_INC . "functions.php";
require MYL_INC . "functions.wp-scripts.php";
require MYL_INC . "functions.wp-styles.php";
require MYL_INC . "general-template.php";
require MYL_INC . "l10n.php";
require MYL_INC . "link-template.php";
require MYL_INC . "nav-menu-template.php";
require MYL_INC . "option.php";
require MYL_INC . "plugin.php";
require MYL_INC . "post-formats.php";
require MYL_INC . "post-template.php";
require MYL_INC . "post.php";
require MYL_INC . "query.php";
require MYL_INC . "theme.php";
require MYL_INC . "widgets.php";

/* Mob Your Life functions. */
function myl_get_nav_menu_items ()
{
	$menu_items = array();
	$menu_items['home'] = "Início";
	$menu_items['photos'] = "Fotos";
	$menu_items['videos'] = "Vídeos";
	$menu_items['contact'] = "Contato";
	return $menu_items;
}

/* Load functions. */
require $theme_path . "functions.php";

/* Run actions. */
foreach ($myl_actions as $tag => $function)
{
	call_user_func($function);
}

/* Apply theme. */
require $theme_path . "index.php";

?>
