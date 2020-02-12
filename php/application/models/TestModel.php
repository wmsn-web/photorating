<?php

class TestModel extends CI_model
{
	
	function getFrnd(){
		$friendsall = $this->db->query("SELECT * FROM friendsall")->result();
		//$data = array();

		
		foreach ($friendsall as $friendsalla) {

			$email = $friendsalla->authemail;

			$sql = $this->db->query("SELECT * FROM user_profile WHERE email='$email'")->row();
			
			$data[$friendsalla->id]= array('authemail'=>$friendsalla->authemail,
				'Name'=>$sql->name
		);
			
		}

		return  $data;
	}
}
