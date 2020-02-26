<?php

class AdminModel extends CI_model
{
	
	function getAllUser()
	{
		$sqery = $this->db->query("SELECT * FROM user_profile ORDER BY  id DESC");
		$ans = $sqery->result();
		return $ans;
	}
	function getUid($uid)
	{
		$sqery = $this->db->query("SELECT * FROM user_profile WHERE id='$uid'");
		$num = $sqery->num_rows();
		if($num==0)
		{
			return $res = "Fls";
		}
		else
		{
			return $res = $sqery->row();
		}
	}
	function getGal($userEmail)
	{
		$sqery = $this->db->query("SELECT * FROM gallery WHERE user_email='$userEmail'");
		return $sqery->result();
	}
	function apprUid($uid)
	{
		$sqery = $this->db->query("SELECT * FROM user_profile WHERE id='$uid'")->row();
		$sts = $sqery->admin_appr;
		if($sts==0)
		{
			$updt = $this->db->query("UPDATE user_profile SET admin_appr='1' WHERE id='$uid'");
			return TRUE;
		}
		else
		{
			$updt = $this->db->query("UPDATE user_profile SET admin_appr='0' WHERE id='$uid'");
			return TRUE;
		}
	}
	function apprGal($galid)
	{
		$sqery = $this->db->query("SELECT * FROM gallery WHERE id='$galid'")->row();
		$sts = $sqery->admin_appr;
		if($sts==0)
		{
			$updt = $this->db->query("UPDATE gallery SET admin_appr='1' WHERE id='$galid'");
			return TRUE;
		}
		else
		{
			$updt = $this->db->query("UPDATE gallery SET admin_appr='0' WHERE id='$galid'");
			return TRUE;
		}
	}
	function delGal($galid)
	{
		$del = $this->db->query("DELETE FROM gallery WHERE id='$galid'");
		return TRUE;
	}
	function getSmtp()
	{
		$sqery = $this->db->query("SELECT * FROM mail_setup")->row();
		return $sqery;
	}
}