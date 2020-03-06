<?php /**
 * 
 */
class Reset extends CI_model
{
	
	function checkToken($token)
	{
		$q = $this->db->query("SELECT * FROM user_profile WHERE forgot_token='$token'");
		$res = $q->num_rows();
		if($res==0){

			return "failed";
		}else{
          
          return $ress = $q->row();

		}

	}
	function changePas($usermail,$userpass)
	{
		$pass = md5($userpass);
		$q = $this->db->query("UPDATE user_profile SET password='$pass' WHERE email='$usermail'");
		return "succ";
	}
}