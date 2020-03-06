<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class ResetPass extends CI_controller
{
	
	function index()
	{
		$token = $_GET['tokenId'];
		if($token=="")
		{
			echo "<div align='center'><h2>Invalid Token ID</h2><a href='home'>Back to home</a>";
		}
		else
		{
			$this->load->model("reset");
			 $chk = $this->reset->checkToken($token);
			 if($chk=="failed")
			 {
			 	echo "<div align='center'><h2>Invalid Token ID</h2><a href='home'>Back to home</a>";
			 }
			 else
			 {
				$usermail = $chk->email;
				$this->load->view("resetPass",["user"=>$usermail]);
			}
		}
	}
	function changePass()
	{
		$userpass = $this->input->post("password");
		$userEmail = $this->input->post("email");
		$this->load->model("reset");
		$chk = $this->reset->changePas($userEmail,$userpass);
		$this->session->set_flashdata(["feedback"=>"Password Changed Successfully"]);
			return redirect("signin");
	}
}