<?php
/**
 * 
 */
class RevModel extends CI_model
{
	
	function getData($authMail)
	{
      


$queryx = $this->db->query("SELECT DISTINCT(imgid) FROM reviews WHERE main_user='$authMail'");



if($queryx->num_rows() > 0){

			$q =$queryx->result();
			foreach ($q as $qs) {
				$galUser = $qs->imgid;
				$query = $this->db->query("SELECT * FROM reviews WHERE main_user='$authMail' AND imgid='$galUser'");
				$num = $query->num_rows();
                $query2 = $this->db->query("SELECT SUM(rate) as rates FROM reviews WHERE main_user='$authMail' AND imgid='$galUser'")->row();
                if($num==0){
                	$rate = 0;
                	$avg = 0;
                	$avgRt = 0;
                }else{
                	$rate = $query2->rates;
                	$avg = $rate/$num;
                	$avgRt = number_format($avg);
                }
                $query3 = $this->db->query("SELECT * FROM gallery WHERE id='$galUser'")->row();
                 

                

                $galData[$qs->imgid]= array("image"=>$query3->image,"rates"=>$avgRt,"status"=>"1");
			}
		}else{
			$galData = "errors";
		}
			return $galData;
		
		}
}

