<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

	const tablo = 'login';
    function __construct() {
        parent::__construct();
    }

    function index()
    {
    	$data['login'] ='';
    	$email = $this->input->post('email');
    	$sifre = $this->input->post('sifre');
    	$msj = array();
    	if($_POST):
    	if (!empty($email) and !empty($sifre))
    	{
    		$q = $this->db->where('email',$email)->where('sifre',$sifre)->get(self::tablo);
    	
    		if ($q->num_rows() == 0)
    		{$msj[] = 'Kullanıcı Adı ve Şifre Bulunamadi';}else
    		{
    			$array = array(
    				'email' => $email,
    				'login_got'=>true,
    			);
    			
    			$this->session->set_userdata( $array );
    			redirect('admin/dashboard','refresh');
    		}

    	}else{ $msj[] = 'Email ve Sifre Alanı Zorunlu';}
    	endif;
    	$data['msj'] = $msj;
      	$this->load->view('admin/login', $data, FALSE);   
    }
}
?>