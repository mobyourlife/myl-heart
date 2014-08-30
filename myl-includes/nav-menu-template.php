<?php

function wp_nav_menu ( $args = array() )
{
    static $menu_id_slugs = array();
 
    $defaults = array( 'menu' => '', 'container' => 'div', 'container_class' => '', 'container_id' => '', 'menu_class' => 'menu', 'menu_id' => '',
    'echo' => true, 'fallback_cb' => 'wp_page_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'items_wrap' => '<li id="%1$s" class="%2$s">%3$s</li>',
    'depth' => 0, 'walker' => '', 'theme_location' => '' );
 
	$args = wp_parse_args( $args, $defaults );
	
	printf ("<%s class=\"%s\"><ul>", $args['container'], $args['menu_class']);
    
	$menu_items = myl_get_nav_menu_items ();
	foreach ($menu_items as $nav_item)
    {
    	$link = sprintf('<a href="%s">%s</a>', $nav_item->link, $nav_item->text);
    	
    	if (!empty($args['link_before']))
    	{
	    	$link = $args['link_before'] . $link;
    	}
    	
    	if (!empty($args['link_after']))
    	{
	    	$link = $link . $args['link_after'];
    	}
    	
	    printf ($args['items_wrap'], $nav_item->link, $nav_item->css, $link);
    }
    
	printf ("</ul></%s>", $defaults['container']);
}

?>
