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
		
			$query = $this->db->query("SELECT * FROM gallery   ORDER BY id DESC");
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



	public function makeRate($rate,$main_user,$from_user,$imgid){
		if(
			//$sqll = $this->db->query("update")
		$sql = $this->db->query("INSERT INTO `reviews` SET `main_user`='$main_user', `imgid`='$imgid', `from_user`='$from_user',`rate`='$rate'")){
			return true;
		}
	}


public function getRevsGal($authMail,$uid){
	$sqlsn = $this->db->query("SELECT *  FROM `reviews` WHERE `from_user` ='$authMail' AND `imgid`='$uid'");
	 return $sqlsn->num_rows();

	  
}

}

?>