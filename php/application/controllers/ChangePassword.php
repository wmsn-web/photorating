<?php
/**
 * 
 */
class ChangePassword extends CI_controller
{
	
	function index()
	{
		if($this->session->userdata("AdminUser"))
        {
		$this->load->view("changePass");
		}else
		{
			redirect("adminLogin");
			//$this->load->view("admin_home");
		}
	}
	function chpas()
	{
		$this->load->model("AdminLoginModel");
		 $pass = $this->input->post("password");
		 $passs = md5($pass);
		 $chpas = $this->AdminLoginModel->changePass($passs);
		 $this->session->set_flashdata(["feedback"=>"Password Changed. Login Again!"]);
		 redirect("adminLogin");
	}
}