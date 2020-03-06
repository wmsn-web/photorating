<?php

/**
 * 
 */
class Forgot extends CI_model
{
	
	function sendActMail($userEmail,$uniq)
	{
		$q = $this->db->query("SELECT * FROM user_profile WHERE email='$userEmail'");
		if($q->num_rows()==0){

			return "failed";
		}else{

 			$insrt = $this->db->query("UPDATE user_profile SET forgot_token='$uniq' WHERE email='$userEmail'");
			return "pass";
		}
	}
}