<?php
class Home extends CI_controller
{
	public function index()
	{
		if(isset($_GET['user_email'])){
		$user_email = $_GET['user_email'];
	    }else{
	    	$user_email = "";
	    }
	    if(isset($_GET['uid'])){
		$uid = $_GET['uid'];
	    }else{
	    	$uid = ""; 
	    }
	    $this->load->library('session');
		$this->load->model("Home_model");
		if($this->session->userdata('userEmail')){
     	$authMail = $this->session->userdata('userEmail');
     	$imgPro = $this->Home_model->getAuth($authMail);		
		$galDtls = $this->Home_model->HomeGallery($authMail);
		$getRevs = $this->Home_model->getRevsGal($authMail,$uid);
        $profDtls = "";
		$getGal = "";
        if(isset($_GET['uid'])){
		$profDtls = $this->Home_model->getProfile($user_email);
		$getGal = $this->Home_model->getgal($uid);
	}

		$this->load->view("home",['galDtls'=>$galDtls,'profDtls'=>$profDtls,"imgPro"=>$imgPro,"getGal"=>$getGal,"getRevs"=>$getRevs]);

		
	}else{
		$authMail="";
		$galDtls = $this->Home_model->HomeGallery($authMail);
		$profDtls = "";
		$getGal = "";
		if(isset($_GET['uid'])){
		$profDtls = $this->Home_model->getProfile($user_email);
		$getGal = $this->Home_model->getgal($uid);
	}
		$this->load->view("home",['galDtls'=>$galDtls,'profDtls'=>$profDtls,"getGal"=>$getGal,"imgPro"=>""]);
	}
	
	} 

	public function login(){
		    $useremail = $this->input->post('email');
			$passwordd = $this->input->post('password');
			$password = md5($passwordd);
			$this->load->model('LoginModel');
			$userEmails = $this->LoginModel->login_valid($useremail, $password);
			if($userEmails){
				//Credential valid
				$userEmail =$userEmails->email;
				$this->load->library('session');
				$this->session->set_userdata('userEmail',$userEmail);
                  $act = $userEmails->activation;
                  if($act=="off"){
                  	return redirect('settings');
                  }else{
                      return redirect('home');
                  }
				
			}else{
				$this->session->set_flashdata(["feedback"=>"Invalid Login credential or Pending Admin Approval"]);
				return redirect('signin');
					}
	}

	public function logout(){
        $this->load->library('session');
		$this->session->unset_userdata('userEmail');
		return redirect('home');
	}

	public function rateStar(){
		$rate = $this->input->post('rate_star');
		$main_user = $this->input->post('main_user');
		$from_user = $this->input->post('from_user');
		$imgid = $this->input->post('imgid');

		$this->load->model("Home_model");
		 $doRate = $this->Home_model->makeRate($rate,$main_user,$from_user,$imgid);
		 return redirect("?uid=".$imgid."&user_email=".$main_user);
	}
}

?>