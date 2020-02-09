<?php
/**
 * 
 */
class MyHalfFriends extends CI_controller
{
	
	function index()
	{
		if($this->session->userdata("userEmail"))
		{ 
			$this->load->model("Home_model");
			$this->load->model("myfriendModel");
			$authMail = $this->session->userdata('userEmail');
     	    $imgPro = $this->Home_model->getAuth($authMail);
     	    
	   		$this->load->view("MyHalfFriends",["imgPro"=>$imgPro]);	
		}else{
            $this->load->view("signin");
		}
	}

	function confirmRqst()
	{
	    $authemail = $this->input->post("authemail");
		$useremail = $this->input->post("useremail");
		$this->load->model("myfriendModel");
		echo $conRqst = $this->myfriendModel->confirmRqst($authemail,$useremail);



	}
}