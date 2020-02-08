<?php
class UserProfile extends CI_controller
{
	
	function index()
	{
		$this->load->model("Home_model");
		if($this->session->userdata('userEmail')){
     	$authMail = $this->session->userdata('userEmail');
     	$imgPro = $this->Home_model->getAuth($authMail);
		$user_mail = $_GET['user'];
		$this->load->model("GetUserProfile");
		$getUser = $this->GetUserProfile->aboutUser($user_mail,$authMail);
		$checkRqst = $this->GetUserProfile->checkRqst($user_mail,$authMail);
		$this->load->view("userprofile",["imgPro"=>$imgPro,"getUser"=>$getUser,"checkRqst"=>$checkRqst]);
	}else{
		return redirect("signin");
	}
	}

	function sendRequest(){
		$userName = $this->input->post('userName');
		$userEmail = $this->input->post('userEmail');
		$authName = $this->input->post('authName');
		$authEmail = $this->input->post('authEmail');

		$this->load->model("GetUserProfile");
		
         $getUser = $this->GetUserProfile->sendRequests($userName,$userEmail,$authName,$authEmail);
         if($getUser==1){
         	$this->session->set_flashdata("feedback","Friend Request Sent...");
         	return redirect("UserProfile?user=$userEmail");
         }else{
         	$this->session->set_flashdata("feedback","Failed...");
         	return redirect("UserProfile?user=$userEmail");
         }

        
/*
        
       echo $getUsers = $this->GetUserProfile->sendRequests($userEmail,$authEmail);
 */      
       
	}
}
?>