<?php

class MYL_Navigation
{
	public $link = "";
	
	public $text = "";
	
	public $css = "";
	
	function __construct($p_link, $p_text, $p_css = "")
	{
		$this->link = $p_link;
		$this->text = $p_text;
		$this->css = $p_css;
	}
}

function myl_get_nav_menu_items ()
{
	$menu_items = array();
	$menu_items[] = new MYL_Navigation("home", "Início", "current_page_item");
	$menu_items[] = new MYL_Navigation("photos", "Fotos", "page_item page-item-2");
	$menu_items[] = new MYL_Navigation("videos", "Vídeos", "page_item page-item-3");
	$menu_items[] = new MYL_Navigation("contact", "Contato", "page_item page-item-4");
	return $menu_items;
}

?>
