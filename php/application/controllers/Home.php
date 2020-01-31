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
		$this->load->model("Home_model");
		$galDtls = $this->Home_model->HomeGallery();
		$profDtls = $this->Home_model->getProfile($uid);
		$this->load->view("home",['galDtls'=>$galDtls,'profDtls'=>$profDtls]);
	}
}

?>