<?php
/**
 * 
 */
class MyfriendModel extends CI_model
{
	
	function confirmRqst($authemail,$useremail)
	{
		$sql = $this->db->query("UPDATE `friendsall` SET `status`='1' WHERE authemail='$authemail' AND `useremail`='$useremail'");
		$sq2 = $this->db->query("UPDATE `friendsall` SET `status`='1' WHERE useremail='$authemail' AND `authemail`='$useremail'");
		return TRUE;
	}
}