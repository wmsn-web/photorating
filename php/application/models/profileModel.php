<?php

class ProfileModel extends CI_model
{
	
	function getCountPhoto($authMail)
	{
		$sql1 = $this->db->query("SELECT * FROM gallery WHERE user_email='$authMail'");
		return $sql1->num_rows();
	}
	function getCountRev($authMail)
	{
		$this->db->select_sum('rate')
		           ->where("main_user",$authMail);
		$result = $this->db->get('reviews')->row(); 
        
        $sql2 = $this->db->query("SELECT * FROM reviews WHERE main_user='$authMail'");
		  $rows = $sql2->num_rows();
		  $tot = $result->rate;
		  if($rows==0){
		  	$avrg = 0;
		  }else{
		  	 $avrg = @$tot/$rows;
		  }
		  
          
         return number_format($avrg,1);

          


	}
}
?>