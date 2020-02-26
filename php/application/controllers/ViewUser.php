<?php 

class ViewUser extends CI_controller
{
	
	function index()
	{
		if($this->session->userdata("AdminUser"))
		{
			if(!$uid = $_GET['id'])
			{
				redirect("allUsers");
			}
			$this->load->model("AdminModel");
			$getUser = $this->AdminModel->getUid($uid);
			$userEmail = $getUser->email;
			$getgal = $this->AdminModel->getGal($userEmail);

			$this->load->view("viewUser",["userDtls" =>$getUser, "getgal"=>$getgal]);

		}
		else
		{
			redirect("adminLogin");
		}
	}

	function profileApprove()
	{
		if(!$uid = $_GET['id'])
			{
				redirect("allUsers");
			}
			$this->load->model("AdminModel");
			$appr = $this->AdminModel->apprUid($uid);
			redirect ("viewUser?id=$uid");

	}
	function photoAppr()
	{
		if(!$galid = $_GET['galid'])
			{
				redirect("allUsers");
			}
			$uid = $_GET['uid'];
			$this->load->model("AdminModel");
			$appr = $this->AdminModel->apprGal($galid);
			redirect ("viewUser?id=$uid");
	}
	function deleteImage()
	{
		if(!$galid = $_GET['galid'])
			{
				redirect("allUsers");
			}
			$uid = $_GET['uid'];
			$this->load->model("AdminModel");
			$appr = $this->AdminModel->delGal($galid);
			redirect ("viewUser?id=$uid");
	}
}