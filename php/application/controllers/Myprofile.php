<?php
class Myprofile extends CI_controller
{
	public function index()
	{
		/*Authentication*/
		$this->load->model("Home_model");
		$this->load->model("profilemodel");
		if($this->session->userdata('userEmail')){
     	$authMail = $this->session->userdata('userEmail');
     	$imgPro = $this->Home_model->getAuth($authMail);
     	$pht = $this->profilemodel->getCountPhoto($authMail);
     	$totRev = $this->profilemodel->getCountRev($authMail);
		$this->load->view("myprofile",["imgPro"=>$imgPro, "pht"=>$pht, "totRev"=>$totRev]);
	}else{
		return redirect("signin");
	}
	}
}

?>