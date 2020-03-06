<?php
/**
 * 
 */
class ApprovePhotos extends CI_controller
{
	
	function index()
	{
		$this->load->model("AdminModel");
		$getGal = $this->AdminModel->getpendingGal();
		//print_r($getGal);
		$this->load->view("approvePhotos",["getgal"=>$getGal]);
	}
	function photoAppr()
	{
		$galid = $_GET['galid'];
		$this->load->model("AdminModel");
		$appr = $this->AdminModel->apprGal($galid);
		redirect("ApprovePhotos");
	}
	function deleteImage()
	{
		$galid = $_GET['galid'];
		$this->load->model("AdminModel");
		$appr = $this->AdminModel->delGal($galid);
		redirect("ApprovePhotos");
	}
}