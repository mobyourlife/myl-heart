<?php

class WP_Styles extends WP_Dependencies
{
	public $styles = array();
	
	public function add_style($handle, $src)
	{
		$this->styles[$handle] = $src;
	}
}

?>
