<?php

/* Constants. */
define(MYL_INC, "myl-includes/");

/* Config file. */
require "myl-config.php";

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

/* Setup current theme. */
$theme_base = "themes/";
$theme_name = $myl_config['theme_name'];
$theme_path = $theme_base . $theme_name . "/";

$max_posts = 3;
$myl_actions = array();
$wp_scripts_header = array();
$wp_scripts_footer = array();
$wp_styles = array();

function myl_get_nav_menu_items ()
{
	$menu_items = array();
	$menu_items['home'] = "Início";
	$menu_items['photos'] = "Fotos";
	$menu_items['videos'] = "Vídeos";
	$menu_items['contact'] = "Contato";
	return $menu_items;
}

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
