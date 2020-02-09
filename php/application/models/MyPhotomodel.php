<?php

class MyPhotomodel extends CI_model
{
	
	public function imgAuth($authMail)
	{
		$sql3 = $this->db->query("SELECT * FROM gallery WHERE user_email='$authMail'")->num_rows();
		if($sql3==5){
			return $RT = "no";
		}
	}
		public function getAllemage($authMail)
	{
		$sql1 = $this->db->query("SELECT * FROM gallery WHERE user_email='$authMail'");
		return $sql1->result();
	}
	public function uploadGallery($email,$imgs)
	{
		$sql2 = $this->db->query("SELECT * FROM user_profile WHERE email='$email'")->row();

		$name = $sql2->name;
		$user_email = $sql2->email;

		$sql3 = $this->db->query("SELECT * FROM gallery WHERE user_email='$email'")->num_rows();
		if($sql3>5){
			return $ret="no";
		}else{
			$sql4 = $this->db->query("INSERT INTO `gallery` SET `user_email`='$user_email',`name`='$name',`image`='$imgs'");
		}

	}

	public function deleteImage($id){
		$sql3 = $this->db->query("SELECT * FROM gallery WHERE id='$id'")->row();
       if(
		$sql = $this->db->query("DELETE FROM gallery WHERE id='$id'") &&
		$sqll = $this->db->query("DELETE FROM reviews WHERE imgid='$id'")
	     ){
       	$imgname = $sql3->image;
       	$dir = "uploads/gallery/".$imgname;
       	unlink($dir);
       	return TRUE;
       }else{
       	return FALSE;
       }

	}
}
?>