<?php

final class WP_Customize_Manager
{
	private $settings = array();
	
	public function add_setting( $id, $args = array() )
	{
		if (is_a($id, 'WP_Customize_Setting'))
		{
			$setting = $id;
		}
		else
		{
			$setting = new WP_Customize_Setting( $this, $id, $args );
		}
		
		$this->settings[$setting->id] = $setting;
	}

	public function get_setting( $id )
	{
		if (isset($this->settings[$id]))
		{
			return $this->settings[$id];
		}
		
		return new WP_Customize_Setting();
	}
}

?>
