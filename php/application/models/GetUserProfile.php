<?php
/**
 * 
 */
class GetUserProfile extends CI_model
{
	
	function aboutUser($user_mail,$authMail)
	{
		
		$sql = $this->db->query("SELECT * FROM user_profile WHERE email='$user_mail'")->row();
		return $sql;
	}

	function checkRqst($user_mail,$authMail)
	{
		$sqll = $this->db->query("SELECT * FROM friendsall WHERE authemail='$authMail' AND useremail='$user_mail'")->row();
		return $sqll;
	}



	function sendRequests($userName,$userEmail,$authName,$authEmail)
	{
		$sql1 = $this->db->query("INSERT INTO `friendsall` SET 
			`username`='$userName',
			`useremail`='$userEmail',
			`authname`='$authName',
			`authemail`='$authEmail',
			`rqst`='SNT'
			");
		$sql2 = $this->db->query("INSERT INTO `friendsall` SET 
			`username`='$authName',
			`useremail`='$authEmail',
			`authname`='$userName',
			`authemail`='$userEmail',
			`rqst`='GT'
			");

		return TRUE;
	}


/*

	function sendRequests($userEmail,$authEmail){
		$sql = $this->db->query("SELECT * FROM friendsall WHERE authemail='$authEmail' AND useremail='$userEmail'")->num_rows();
		return $sql;
	}
*/
	
}
?>