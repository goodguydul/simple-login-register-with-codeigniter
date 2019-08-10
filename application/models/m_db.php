<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_db extends CI_Model {

	public function register($data){

		$check	= $this->db->get_where('users',array('email' => $data['email']));

		if (!$check->num_rows() > 0) {
			$this->db->trans_start();
			$this->db->query("INSERT INTO users (email, password) VALUES('$data[email]', '$data[password]')");
			$this->db->query("INSERT INTO userdata (id,fname,lname,address,dob,memtype) VALUES(LAST_INSERT_ID(),'$data[fname]','$data[lname]','$data[address]','$data[dob]','$data[memtype]')");
			$this->db->query("INSERT INTO cc (id,ccnumber,ccdate,cctype,cvv) VALUES(LAST_INSERT_ID(), '$data[ccnumber]','$data[ccdate]','$data[cctype]','$data[cvv]')");
			$this->db->trans_complete();


			if ($this->db->trans_status() === FALSE) {
	            return 0;
	        }else {
	            return 1;
	        }
		}else{
			return 0;
		}


		
	}   
	public function ceklogin($table,$where){
		return $this->db->get_where($table,$where);
	}

}
?>