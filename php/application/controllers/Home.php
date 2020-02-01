<?php
class Home extends CI_controller
{
	public function index()
	{
		if(isset($_GET['uid'])){
		$uid = $_GET['uid'];
	    }else{
	    	$uid = "";
	    }
	    $this->load->library('session');
		$this->load->model("Home_model");
		$galDtls = $this->Home_model->HomeGallery();
		$profDtls = $this->Home_model->getProfile($uid);
		$this->load->view("home",['galDtls'=>$galDtls,'profDtls'=>$profDtls]);
	}

	public function login(){
		    $useremail = $this->input->post('email');
			$passwordd = $this->input->post('password');
			$password = md5($passwordd);
			$this->load->model('LoginModel');
			$userEmail = $this->LoginModel->login_valid($useremail, $password);
			if($userEmail){
				//Credential valid
				$this->load->library('session');
				$this->session->set_userdata('userEmail',$userEmail);
				return redirect('home');
			}else{
				$this->load->view('login');
					}
	}

	public function logout(){
        $this->load->library('session');
		$this->session->unset_userdata('userEmail');
		return redirect('home');
	}
}

?>