<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
    	$status = $this->input->get('status');
    	if (isset($status)) {
    		$x['status']=$status;
    	}else{
    		$x['status']=0;
    	}
    	$data	= array( 'pagetitle' => 'Login','status' => $status );
        $this->load->view("login/v_header",$data); 
        $this->load->view("login/v_login");       
        $this->load->view("login/v_footer");  
    }
	
	public function loginaction(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => $password
			);
		$cek = $this->m_db->ceklogin("users",$where)->num_rows();
		if($cek > 0){
 			
			$data_session = array(
				'email' => $email,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url('home'));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}  

}
?>