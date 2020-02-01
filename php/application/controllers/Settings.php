<?php

class Settings extends CI_controller
{
	
	public function index()
	{
		$this->load->library('session');
		$this->load->view("settings");
	}
}

?>