<?php
class AdminLogin extends CI_controller
{
	
	function index()
	{
		$this->load->view("admin_login");
	}

	function loginAdmin()
	{
		$this->load->library('session');
        $this->load->model("AdminLoginModel");
	    $adminUser = $this->input->post("adminUser");
		$adminPass = $this->input->post("adminPass");
		$pass = md5($adminPass);

		 $getAuth = $this->AdminLoginModel->login($adminUser,$pass);
		 if($getAuth==1){
		 	$this->session->set_userdata("AdminUser",$adminUser);
		 	redirect("admin");
		 }else{
		 	$this->session->set_flashdata(["feedback"=>"Invalid Username or Password!"]);
		 	redirect("adminLogin");
		 }
	}
}

?>