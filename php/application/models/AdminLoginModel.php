<?php
/**
 * 
 */
class AdminLoginModel extends CI_model
{
	
	function login($adminUser,$pass)
	{
		$query = $this->db->query("SELECT * FROM admin WHERE username = '$adminUser' AND password='$pass'");
		$num = $query->num_rows();
		if($num == 1)
		{
			
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
	function changePass($passs)
	{
		$query = $this->db->query("UPDATE  admin SET password='$passs'");
		return TRUE;
	}
}