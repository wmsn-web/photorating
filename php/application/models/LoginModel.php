<?php
class LoginModel extends CI_Model{
	public function login_valid($useremail, $password){
		$q = $this->db->where(['email'=>$useremail,'password'=>$password])
		              ->get('user_profile');
		if($q->num_rows()){
			return $q->row()->email;
			//return TRUE;
			}else{
			return FALSE;
				}
		
		}
	}