<?php
class Allusers extends CI_controller
{
	
	function index()
	{
		if($this->session->userdata("AdminUser"))
		{
			$this->load->model("AdminModel");
			$getUser = $this->AdminModel->getAllUser();
			$this->load->view("allusers",["userDtls"=>$getUser]);
	    }
	    else
	    {
	    	redirect("adminLogin");
	    }
	}
}

?>