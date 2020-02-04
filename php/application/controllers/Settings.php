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

		$this->load->view("settings",['getDtlsd'=>$getDtls]);
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

		$this->load->model("settingModel");
		$addAll = $this->settingModel->updatePro($name, $email, $country, $age, $gender, $about, $imgs);

		       $this->session->set_flashdata("feedback","Profile Updated Successfully");
			
				return redirect('settings');
				
				}
			
			
		
	
}

?>