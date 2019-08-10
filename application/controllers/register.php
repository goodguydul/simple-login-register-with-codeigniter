<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function index(){
    	$status = $this->input->get('status');
    	if (isset($status)) {
    		$x['status']=$status;
    	}else{
    		$x['status']=0;
    	}
    	$data	= array( 'pagetitle' => 'Register','status' => $status );
        $this->load->view("register/v_header",$data); 
        $this->load->view("register/v_register");       
        $this->load->view("register/v_footer",$x);  
    }
	
	public function registeraction(){

		$data = array('fname' 	=> $this->input->post('fname'),
					'lname' 	=> $this->input->post('lname'),
					'email' 	=> $this->input->post('email'),
					'password' 	=> $this->input->post('password'), 
					'address' 	=> $this->input->post('address'),
					'dob' 		=> $this->input->post('dob'),
					'memtype' 	=> $this->input->post('memtype'),
					'ccnumber' 	=> $this->input->post('ccnumber'),
					'cctype' 	=> $this->input->post('cctype'),
					'ccdate' 	=> $this->input->post('ccdate'),
					'cvv' 		=> $this->input->post('cvv')
				);

		$result = $this->m_db->register($data);
		if ($result == 1 || $result === true) {
			redirect(base_url('register?status=1'));
			
		}else{
			redirect(base_url('register?status=2'));	
		}

	}

}
?>