<?php 
/**
 * 
 */
class UserPhotos extends CI_controller
{
	
	function index()
	{
		$user = $_GET['user'];
		$this->load->model("Home_Model");
		$gtImg = $this->Home_Model->gtImg($user);
		//print_r($gtImg);
		$this->load->view("userPhoto",["allImg"=>$gtImg]);
	}
}