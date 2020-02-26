<?php

class Admin extends CI_controller
{
	
	function index()
	{
        if($this->session->userdata("AdminUser"))
        {
		$this->load->view("admin_home");
		}else
		{
			redirect("adminLogin");
			//$this->load->view("admin_home");
		}
	}
	public function logout()
	{
        $this->load->library('session');
		$this->session->unset_userdata('AdminUser');
		return redirect('adminLogin');
	}
	
}