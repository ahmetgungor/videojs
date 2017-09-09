<?php 
	/**
	 *
	 * ./json/tema_ayar.js içeriğini getirmesi için
	 *  return string or array
	 */
	 
	if (! function_exists('ayarjson'))
	{
		function ayarjson($debug=false)
		{	
			$json = json_decode(file_get_contents(base_url('json/tema_ayar.json')),true);
			if ($debug){return print_r($json);} else {return $json;}
			
		}
	}

	/**
	 * tema ayarları 	
	 */
	if (! function_exists('_theme'))
	{
		function _theme($file=null,$data=null)
		{
			$ci =& get_instance();
			$tema = $ci->config->item('theme');
			
		}
	}
?>