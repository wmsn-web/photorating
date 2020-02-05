<?php
class Home_model extends CI_model
{

	public function getAuth($authMail)
	{
		$query = $this->db->query("SELECT * FROM user_profile  WHERE email='$authMail'");
		return $rrow = $query->row();

		 
	}
	
	public function homeGallery()
	{
		
		$query = $this->db->query("SELECT * FROM gallery  ORDER BY id DESC");
		return $query->result();		
	}
	public function getProfile($user_email){
		$getProfile = $this->db->query("SELECT * FROM user_profile WHERE email='$user_email'");
		return $getProfile->row();
	}
	public function getgal($uid){
		$getgal = $this->db->query("SELECT * FROM gallery WHERE id='$uid'");
		return $getgal->row();
	}


}

?>