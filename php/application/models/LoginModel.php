<?php
class LoginModel extends CI_Model{
	public function login_valid($useremail, $password){
		$q = $this->db->where(['email'=>$useremail,'password'=>$password,'admin_appr'=>'1'])
		              ->get('user_profile');
		if($q->num_rows()){
			$qs =$q->row();
			$ips = $qs->user_ip;
			$ip = $this->input->ip_address();
			if($ips=="")
			{
				$query = $this->db->query("UPDATE user_profile SET user_ip='$ip' WHERE email='$useremail'");
			}else{
				$query="";
			}
			return $qs;
			//return TRUE;
			}else{
			return FALSE;
				}
		
		}
	}