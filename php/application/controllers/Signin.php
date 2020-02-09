<?php
/**
 * 
 */
class Signin extends CI_controller
{
	
	function index()
	{
		$this->load->library('session');
		$this->load->model("Home_model");
		$authMail = "";
		$galDtls = $this->Home_model->HomeGallery($authMail);
		$this->load->view('loginpage',['galDtls'=>$galDtls]);
	}
}
?>