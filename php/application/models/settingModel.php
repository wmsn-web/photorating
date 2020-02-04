<?php
/**
 * 
 */
class SettingModel extends CI_model
{
	
	public function getPro($logEmail)
	{
		$qery = $this->db->query("SELECT * FROM user_profile WHERE email='$logEmail'");
		return $qery->row();
	}

	public function updatePro($name, $email, $country, $age, $gender, $about,$imgs){

	$updt = $this->db->query("UPDATE `user_profile` SET 
               `name`='$name',
               `country`='$country',
               `age`='$age',
               `gender`='$gender',
               `about`='$about',`image`='$imgs' WHERE `email`='$email'");

	if($updt){
		return TRUE;
	}else{
		return FALSE;
	}
}
}
?>