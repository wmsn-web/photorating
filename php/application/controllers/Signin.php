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
		$galDtls = $this->Home_model->HomeGallery();
		$this->load->view('loginpage',['galDtls'=>$galDtls]);
	}
}
?>