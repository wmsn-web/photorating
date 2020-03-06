<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class ForgotPass extends CI_controller
{
	
	function index()
	{
		$this->load->view("forgot");
	}
	function sendAct()
	{
		$userEmail = $this->input->post("email");
		$uniqueId = uniqid(rand(), TRUE);
			$uniq = md5($uniqueId);
			$this->load->model("Forgot");
		$qr = $this->Forgot->sendActMail($userEmail,$uniq);

		if($qr=="failed")
		{
			$this->session->set_flashdata(["feedback"=>"Email Does not Already Exist!"]);
			return redirect("forgotPass");
		}
		else
		{
			$to = $userEmail;
			$subject = 'Forgot Password';
			$headers = "From: hottestface.com@gmail.com\r\n";
			$headers .= "Reply-To: hottestface.com@gmail.com\r\n";
			$headers .= "CC: \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			$message = '<html><body>';
			$message .="<h5>Password Reset</h5>
			<p>Dear, User </p>
			<p>You have requested to change password.  We have sent you a password reset link bellow.
			if you didn't send any request then ignore this message. Please don't share this message to anyone. We never ask for generate token number.</p>
			<div style='width:80%; text-align:center;'>
 				<button style='padding:6px; background:#090; color:#fff; border:solid 1px #090; broder-radius:6px;'>Reset Password</button>
			</div>
			";
			$succ = mail($to, $subject, $message, $headers);
			if(!$succ){
				print_r(error_get_last()['message']);
			}
			//$this->session->set_flashdata(["feedback"=>"We have sent you an email with Password reset link."]);
			//return redirect("forgotPass");
		}
	}

	function reset()
	{
		$this->load->view("resetPass");
	}
}
