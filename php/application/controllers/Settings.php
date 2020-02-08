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

		$this->load->view("settings",['getDtlsd'=>$getDtls,"imgPro"=>$imgPro]);
	}
	}

	public function addprofile(){
		$name = $this->input->post('name');
		$act = $this->input->post('act');
		$email = $this->input->post('email');
		$country = $this->input->post('country');
		$age = $this->input->post('age');
		$gender = $this->input->post('gender');
		$about = $this->input->post('about');
		$hide_img = $this->input->post('hide_img');

		if($hide_img==""){

                $config['upload_path']          = 'uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
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
		$addAll = $this->settingModel->updatePro($name, $email, $country, $age, $gender, $about, $imgs);

		       $this->session->set_flashdata("feedback","Profile Updated Successfully");
			
				return redirect('settings');
				
				}
			
			public function changePass()
			{
				$passwords = $this->input->post('password');
				$userEmail = $this->input->post('email');
				$password = md5($passwords);
				$this->load->model("settingModel");
				$ChangePass = $this->settingModel->ChangePass($password,$userEmail);
		        $this->session->set_flashdata("feedback","Password Changed Successfully");
			
				return redirect('settings');
			}
		
	
}

?>