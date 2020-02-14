<?php
/**
 * 
 */
class SignUpModel extends CI_model
{
	
	public function registerData($useremail,$password)
	{
		$chk = $this->db->query("SELECT * FROM user_profile WHERE email='$useremail' AND password='$password'");

		$getNum = $chk->num_rows();
		if($getNum==1){
			return FALSE;
			 
		}else{
           $this->db->query("INSERT INTO `user_profile` SET `email`='$useremail', `password`='$password',`activation`='off'");
           return TRUE;
		}

		
	}
}

?>