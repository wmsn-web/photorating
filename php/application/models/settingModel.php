<?php

class SettingModel extends CI_model
{
	function getCountry()
	{
		$cntrs = $this->db->get("country")->result();
		foreach ($cntrs as $cntr) {
			
			$data[$cntr->id]= array('country_name'=>$cntr->country_name, 'code'=>$cntr->code);
		}
		return $data;
	}
	
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
               `about`='$about',`image`='$imgs',`activation`='on' WHERE `email`='$email'");

	if($updt){
		return TRUE;
	}else{
		return FALSE;
	}
}
     public function ChangePass($password,$userEmail)
     {
     	$updt = $this->db->query("UPDATE `user_profile` SET 
               `password`='$password'
                WHERE `email`='$userEmail'");
     	if($updt){
		     return TRUE;
	    }else{
		    return FALSE;
	}
     }

}
?>