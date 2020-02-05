<?php
class AuthController extends CI_controller{
	function __construct(){
     $this->load->database('db');
     if($this->session->userdata('userEmail')){
     	$authMail = $this->session->userdata('userEmail');
	    $query = $this->db->query("SELECT * FROM user_profile  WHERE email='$authMail'");
		$rrow = $query->row();

		echo $proImg = $rrow->image;
	}
	}
}

function index(){
	echo "noooo";
}

?>

ggggggg