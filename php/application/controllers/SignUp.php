<?php

class SignUp extends CI_controller
{
	
	function index()
	{
		$this->load->library('session');
		$this->load->model("Home_model");
		if($this->session->userdata('userEmail')){
         
         redirect("home");

		}else{
		$authMail="";
		$galDtls = $this->Home_model->HomeGallery($authMail);
		$this->load->view('signuppage',['galDtls'=>$galDtls]);
	}
	}
	public function register(){
		$this->load->library('session');
		$useremail = $this->input->post('email');
		$passwordd = $this->input->post('password');
		$password = md5($passwordd);
		$this->load->model('signUpModel');
		
		if($insrt = $this->signUpModel->registerData($useremail,$password)){
			
			$this->session->set_userdata("userEmail",$useremail);
			redirect("settings");
		}else{
			//Already exist
			$this->session->set_flashdata(["feedback"=>"Email Already Exist!"]);
			redirect("signUp");
		}
		

	}
}
?>