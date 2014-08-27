<?php

class WP_Styles extends WP_Dependencies
{
	private $styles = array();
	
	public function add_style($handle, $src)
	{
		$this->styles[$handle] = $src;
	}
}

?>
