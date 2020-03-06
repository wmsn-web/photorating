<?php
/**
 * 
 */
class SignUpModel extends CI_model
{
	
	public function registerData($useremail,$password)
	{
		$chk = $this->db->query("SELECT * FROM user_profile WHERE email='$useremail'");

		$getNum = $chk->num_rows();
		if($getNum > 0){
			return FALSE;
			 
		}else{
			$ip = $this->input->ip_address();
           $this->db->query("INSERT INTO `user_profile` SET `email`='$useremail', `password`='$password',`activation`='off',`user_ip`='$ip'");
           return TRUE;
		}

		
	}
}

?>