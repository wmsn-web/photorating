<?php
/**
 * 
 */
class MyFriends extends CI_controller
{
	
	function index()
	{
		    $this->load->model("Home_model");
			$this->load->model("myfriendModel");
			$authMail = $this->session->userdata('userEmail');
     	    $imgPro = $this->Home_model->getAuth($authMail);
		    $this->load->view("myFriends",["imgPro"=>$imgPro]);
	}
}