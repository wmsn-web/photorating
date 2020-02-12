<?php
/**
 * 
 */
class RevModel extends CI_model
{
	
	function getData($authMail)
	{
      
$query = $this->db->query("SELECT * FROM reviews WHERE main_user='$authMail'");

$num = $query->num_rows();

if($query->num_rows() > 0){

			$q =$query->result();
			foreach ($q as $qs) {
				$galUser = $qs->imgid;
				


				
                $query2 = $this->db->query("SELECT SUM(rate) as rates FROM reviews WHERE main_user='$authMail'")->row();
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

                $galData[$qs->id]= array("image"=>$query3->image,"rates"=>$avgRt,"status"=>"1");
			}
		}else{
			$galData[1] = array("image"=>"","rates"=>"","status"=>"0");
		}
			return $galData;
		
		}
}

