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

	public function updatePro($name, $email, $country, $dob, $age, $gender, $about,$imgs){
       
        $names =    $this->db->escape_str($name);
        $emails =   $this->db->escape_str($email);
        $countrys = $this->db->escape_str($country);
        $ages =     $this->db->escape_str($age);
        $dobs =     $this->db->escape_str($dob);
        $genders =  $this->db->escape_str($gender);
		$abouts =   $this->db->escape_str($about);
		$imgss =    $this->db->escape_str($imgs);

	$updt = $this->db->query("UPDATE `user_profile` SET 
               `name`='$names',
               `country`='$countrys',
               `dob`='$dobs',
               `age`='$ages',
               `gender`='$genders',
               `about`='$abouts',`image`='$imgss',`activation`='on' WHERE `email`='$emails'");

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