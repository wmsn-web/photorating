<?php
class Home_model extends CI_model
{

	public function getAuth($authMail)
	{
		$query = $this->db->query("SELECT * FROM user_profile  WHERE email='$authMail'");
		return $rrow = $query->row();

		 
	}
	
	public function homeGallery($authMail)
	   {
		
			//$query = $this->db->query("SELECT * FROM gallery WHERE user_email!='$authMail'  ORDER BY id DESC");
			//return $query->result();
	   	    $query = $this->db->query("SELECT * FROM gallery WHERE user_email!='$authMail'  ORDER BY id DESC");
			$q =$query->result();
			foreach ($q as $qs) {
				$galUser = $qs->user_email;
				$query2 = $this->db->query("SELECT * FROM user_profile WHERE email='$galUser'")->row();
				$user_name = $query2->name;
				$country = $query2->country;
				$cd = explode("-",$country);
				$code = @strtolower($cd[1]);
				$flag = "http://www.geonames.org/flags/x/".$code.".gif";
				$gender = $query2->gender;
				if($gender=="Male"){
					$genderIcon = "<i class='fa fa-male'></i>";
				}else{
					$genderIcon = "<i class='fa fa-female'></i>";
				}



				$galData[$qs->id]= array("image"=>$qs->image,"name"=>$user_name, "age"=>$query2->age,"country"=>$query2->country,"flag"=>$flag,"genderIcon"=>$genderIcon,"id"=>$qs->id,"user_email"=>$galUser);

			}
			return $galData;
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