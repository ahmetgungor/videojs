<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class test extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
    	$data['ayar'] = ayarjson();
    	
        echo _theme('mainpage',$data);
    }
}
        

 ?>