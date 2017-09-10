<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index()
    {
    	$data['login'] ='';
     	$this->load->view('admin/login', $data, FALSE);   
    }
}
?>