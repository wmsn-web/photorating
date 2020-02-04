<?php
class LoginModel extends CI_Model{
	public function login_valid($useremail, $password){
		$q = $this->db->where(['email'=>$useremail,'password'=>$password])
		              ->get('user_profile');
		if($q->num_rows()){
			$qs =$q->row();
			return $qs;
			//return TRUE;
			}else{
			return FALSE;
				}
		
		}
	}