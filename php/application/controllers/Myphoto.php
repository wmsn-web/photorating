<?php
/**
 * 
 */
class Myphoto extends CI_controller
{
	
	function index()
	{
		$this->load->library('session');
		if(!$this->session->userdata('userEmail')){
			return redirect("signin");
		}else{
            $this->load->model("Home_model");
            $this->load->model("MyPhotomodel");
			$authMail = $this->session->userdata('userEmail');
     	    $imgPro = $this->Home_model->getAuth($authMail);
     	    $allImg = $this->MyPhotomodel->getAllemage($authMail);
     	    $authImg = $this->MyPhotomodel->imgAuth($authMail);
     	    if($authImg=="no"){
     	    	$styl = "style='display:none'";
     	    }else{
     	    	$styl = "style='display:block'";
     	    }
		    $this->load->view("myphoto",["imgPro"=>$imgPro,"allImg"=>$allImg,"styl"=>$styl]);
	}
}

public function uploadGal()
{               
	            $email = $this->input->post('main_user');

	            $config['upload_path']= 'uploads/gallery/';
                $config['allowed_types']= 'gif|jpg|png';
                $config['max_size']= 2000;
                $this->load->library('upload', $config);
                
                if (!$this->upload->do_upload('gal_img'))
                {
                        echo "No";
                }
                else
                {
                         
                         $upload_data = $this->upload->data();
			            echo  $imgs = $upload_data['file_name'];
			             
			             $this->load->model("MyPhotomodel");
              			 $updtGal = $this->MyPhotomodel->uploadGallery($email,$imgs);
              			 $this->image_resize("uploads/gallery/".$imgs,180);
			             if($updtGal=="no"){
			                $dir = "uploads/gallery/".$imgs;
			                unlink($dir);
			                $this->session->set_flashdata("feedback"," Only 5 Picture can upload. Delete atleast one Image to upload again");
			                return redirect("myphoto");

			             }else{
			             	$this->session->set_flashdata("feedback","Image Uploaded Successfully");
			             	return redirect("myphoto");

			             }
			             

                }
               
                
}

function image_resize($imgpath,$height)
{
	$config['source_image'] = $imgpath;
	$config['maintain_ratio'] = TRUE;
	$config['width']       = $height;

	$this->load->library('image_lib', $config);

	$this->image_lib->resize();
}

public function remove(){
	$id = $this->input->post('id');
	$this->load->model("MyPhotomodel");
    echo $del = $this->MyPhotomodel->deleteImage($id);
	
}

}

?>