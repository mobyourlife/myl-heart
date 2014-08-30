<?php

/* Constants. */
define(MYL_INC, "myl-includes/");

/* Config file. */
require "myl-config.php";

/* Mob Your Life modules. */
require "myl-navigation.php";

/* Setup environment. */
session_start ();

/* Mob Your Life environment. */
$max_posts = 3;
$myl_actions = array();

/* Setup theme path. */
$theme_base = "themes/";
$theme_name = $myl_config['theme_name'];
$theme_path = $theme_base . $theme_name . "/";

/* WordPress Modules. */
require MYL_INC . "author-template.php";
require MYL_INC . "capabilities.php";
require MYL_INC . "category-template.php";
require MYL_INC . "class-wp-customize-manager.php";
require MYL_INC . "class-wp-customize-setting.php";
require MYL_INC . "class.wp-dependencies.php";
require MYL_INC . "class.wp-styles.php";
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
require MYL_INC . "post-thumbnail-template.php";
require MYL_INC . "post.php";
require MYL_INC . "query.php";
require MYL_INC . "theme.php";
require MYL_INC . "widgets.php";

/* WordPress environment. */
$wp_scripts_header = array();
$wp_scripts_footer = array();
$wp_styles = new WP_Styles();
$wp_customize = new WP_Customize_Manager();

/* Load functions. */
require $theme_path . "functions.php";

/* Run actions. */
foreach ($myl_actions as $tag => $function)
{
	$ref = new ReflectionFunction($function);
	
	if (count($ref) != 0)
	{
		$args = array();
	
		foreach ($ref->getParameters() as $param)
		{
			$name = $param->name;
			$args[] = $$name;
		}
		
		call_user_func_array($function, $args);
	}
	else
	{
		call_user_func($function);
	}
}

/* Apply theme. */
require $theme_path . "index.php";

?>
