<?php
/**
 * 
 */
class Test extends CI_controller
{
	
	function index()
	{
		$this->load->model("TestModel");
		$datafrnd = $this->TestModel->getFrnd();
		$this->load->view("test",["datafrnd"=>$datafrnd]);
       
       /*
		print_r("<pre>");
		print_r ($datafrnd);
		*/
	}
}
?>