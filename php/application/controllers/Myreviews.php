<?php
/**
 * 
 */
class Myreviews extends CI_controller
{
	
	function index()
	{
		if($this->session->userdata("userEmail"))
		{ 
			$this->load->model("Home_model");
			$this->load->model("RevModel");
			$authMail = $this->session->userdata('userEmail');
            $imgPro = $this->Home_model->getAuth($authMail);
			$revData = $this->RevModel->getData($authMail);

			//print_r($revData);

			
     	    
     	    
	   		$this->load->view("myreviews",['revData'=>$revData,'imgPro'=>$imgPro]);	
		}else{
            redirect("signin");
		}
	}

	
}