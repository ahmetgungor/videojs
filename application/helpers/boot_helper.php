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
			return json_decode(file_get_contents(base_url('json/tema_ayar.json')),true);
			
			
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
			$data['header'] = $ci->load->view($tema.'/sabit/header', $data,true);
			$data['icerik'] = $ci->load->view($tema.'/'.$file, $data,true);
			$data['footer'] = $ci->load->view($tema.'/sabit/footer', $data,true);
			$ci->load->view('body', $data);
		}
	}

	
	if (! function_exists('admin_file'))
	{
		function admin_file($file_name=null)
		{
			
		}
	}
	 
	if (! function_exists('css_js'))
	{
		function css_js($file=array(),$offset=null,$version='v1')
		{	
			$ci =& get_instance();
			$tema = $ci->config->item('theme');
			
			if (!file_exists('assets/'.$tema.'/sabit/style'.$version.$offset))
			{
				$c=null;
				foreach ($file as $key=>$value)
				{
					if(!empty($value))
					{
						$c.=file_get_contents($value);
					}	
				}
				switch ($offset) {
					case '.css':
						$file = css($c);
					break;
					case '.js':
						$file = js($c);
					break;
					
				}
				$f = write_file(('assets/'.$tema.'/sabit/style'.$version.$offset),$file);
				
			}
			return base_url('assets/'.$tema.'/sabit/style'.$version.$offset);
		}
	}

	function css($css=null)
	{
	
	$css = preg_replace( '/\s+/', ' ', $css );
	$css = preg_replace( '/(\s+)(\/\*(.*?)\*\/)(\s+)/', '$2', $css );
	$css = preg_replace( '~/\*(?![\!|\*])(.*?)\*/~', '', $css );
	$css = preg_replace( '/;(?=\s*})/', '', $css );
	$css = preg_replace( '/(,|:|;|\{|}|\*\/|>) /', '$1', $css );
	$css = preg_replace( '/ (,|;|\{|}|\(|\)|>)/', '$1', $css );
	$css = preg_replace( '/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css );
	$css = preg_replace( '/(:| )(\.?)0(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css );
	$css = preg_replace( '/0 0 0 0/', '0', $css );
	$css = preg_replace( '/#([a-f0-9])\\1([a-f0-9])\\2([a-f0-9])\\3/i', '#\1\2\3', $css );
	return trim( $css );
	}
	function js($js=null)
	{
	$buffer = preg_replace("/((?:\/\*(?:[^*]|(?:\*+[^*\/]))*\*+\/)|(?:\/\/.*))/", "", $js);
    $buffer = str_replace(["\r\n","\r","\t","\n",'  ','    ','     '], '', $buffer);
    $buffer = preg_replace(['(( )+\))','(\)( )+)'], ')', $buffer);
	    return $js;
	}
?>