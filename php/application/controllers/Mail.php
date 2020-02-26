<?php
/**
 * 
 */
class Mail extends CI_controller
{
	
	function index()
	{
		$this->load->model("AdminModel");
		$smtpAdmin = $this->AdminModel->getSmtp();

		$smtp_user = $smtpAdmin->smtp_user;
		$smtp_pass = $smtpAdmin->smtp_pass;

	    $config = Array(
	  'protocol' => 'smtp',
	  'smtp_host' => 'ssl://smtp.googlemail.com',
	  'smtp_port' => 465,
	  'smtp_user' => $smtp_user, // change it to yours
	  'smtp_pass' => $smtp_pass, // change it to yours
	  'mailtype' => 'html',
	  'charset' => 'iso-8859-1',
	  'wordwrap' => TRUE
	);

	        $message = 'This is a test Message';
	        $this->load->library('email', $config);
	      $this->email->set_newline("\r\n");
	      $this->email->from('info@wmsn.in'); // change it to yours
	      $this->email->to('wmsn.web@gmail.com');// change it to yours
	      $this->email->subject('Resume from JobsBuddy for your Job posting');
	      $this->email->message($message);
	      if($this->email->send())
	     {
	      echo 'Email sent.';
	     }
	     else
	    {
	     show_error($this->email->print_debugger());
	    }

	}
}