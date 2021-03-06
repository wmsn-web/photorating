<?php

class Settings extends CI_controller
{
	
	public function index()
	{

		$this->load->library('session');
		if(!$this->session->userdata('userEmail')){
			return redirect("signin");
		}else{
			$logEmail = $this->session->userdata('userEmail');
			$this->load->model("settingModel");
			$getDtls = $this->settingModel->getPro($logEmail);
            $this->load->model("Home_model");
			$authMail = $this->session->userdata('userEmail');
     	    $imgPro = $this->Home_model->getAuth($authMail);
     	    $cntr = $this->settingModel->getCountry();

     	    //print_r($cntr);

		$this->load->view("settings",['getDtlsd'=>$getDtls,"imgPro"=>$imgPro,"cntr"=>$cntr]);
	}
	}


	public function addprofile(){
		$name = $this->input->post('name');
		$act = $this->input->post('act');
		$email = $this->input->post('email');
		$country = $this->input->post('country');
		$dob = $this->input->post('dob');
		$gender = $this->input->post('gender');
		$about = $this->input->post('about');
		$hide_img = $this->input->post('hide_img');

		$today = date('Y-m-d');

		$d1 = new DateTime($today);
$d2 = new DateTime($dob);

 $diff = $d2->diff($d1);
 $age =  $diff->y;
 if($age < 18){

$this->session->set_flashdata(["feedback"=>"Invalid Date Selected! (Your age bellow 18)", "status"=>"failed"]);
return redirect('settings');

 }else{



		if($hide_img==""){

                $config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'gif|jpg|png|JPG';
                $config['max_size']             = 2000;
                
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('pro_img'))
                {
                       echo $error = array('error' => $this->upload->display_errors());

                        //$this->load->view('upload_form', $error);
                        echo "No";
                }
                else
                {
                         $data = array('upload_data' => $this->upload->data());
                         $upload_data = $this->upload->data();
        //get the uploaded file name
             $imgs = $upload_data['file_name'];


                        
                }
                }else{
             	$imgs = $hide_img;
             }

		$this->load->model("settingModel");
		$addAll = $this->settingModel->updatePro($name, $email, $country, $dob, $age, $gender, $about, $imgs);

		       $this->session->set_flashdata(["feedback"=>"Profile Updated Successfully. Pending for Admin Approval","status"=>"success"]);
			
				return redirect('settings');
				
				}
			}
			
			public function changePass()
			{
				$passwords = $this->input->post('password');
				$userEmail = $this->input->post('email');
				$password = md5($passwords);
				$this->load->model("settingModel");
				$ChangePass = $this->settingModel->ChangePass($password,$userEmail);
		        $this->session->set_flashdata(["feedback","Password Changed Successfully","status"=>"success"]);
			
				return redirect('settings');
			}

		
		
	
}

?>