<?php
class Home_model extends CI_model
{
	public function homeGallery()
	{
		$query = $this->db->query("SELECT * FROM user_profile ORDER BY id DESC");
		return $query->result();
	}
	public function getProfile($uid){
		$getProfile = $this->db->query("SELECT * FROM user_profile WHERE id='$uid'");
		return $getProfile->row();
	}


}

?>