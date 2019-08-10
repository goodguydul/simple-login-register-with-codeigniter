<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
    public function index(){
    	
    	$data	= array( 'pagetitle' => 'Home',);
        $this->load->view("home/v_header",$data); 
        $this->load->view("home/v_content");       
        $this->load->view("home/v_footer");  
    }
	
	
}
?>