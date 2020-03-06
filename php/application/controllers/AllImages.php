<?php
/**
 * 
 */
class AllImages extends CI_controller
{
	
	function index()
	{
		$this->load->model("AdminModel");
		$gt = $this->AdminModel->getAllImages();
		$this->load->view("allImages",["gts"=>$gt]);
	}
}